<?php

namespace OpenAPI\Parser;

use OpenAPI\Schema\ObjectInterface;
use OpenAPI\Schema\V2\Swagger;
use OpenAPI\Schema\V3\OpenAPI;
use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\PropertyInfo\PropertyInfoExtractor;
use Symfony\Component\PropertyInfo\Type;

abstract class AbstractParser implements ParserInterface
{
    protected array $reflectionCache = [];

    /**
     * @var PropertyInfoExtractor
     */
    protected PropertyInfoExtractor $PropertyInfoExtractor;

    /**
     * SwaggerParser constructor.
     *
     */
    public function __construct()
    {
        $ReflectionExtractor = new ReflectionExtractor();
        $PhpDocExtractor     = new PhpDocExtractor();

        $this->PropertyInfoExtractor = new PropertyInfoExtractor(
            [$ReflectionExtractor],
            [$PhpDocExtractor, $ReflectionExtractor],
            [$PhpDocExtractor],
            [$ReflectionExtractor]
        );

    }

    abstract public function parse(array $data): ObjectInterface;

    /**
     * @param  ObjectInterface  $object
     * @param  array            $data
     *
     * @return ObjectInterface|Swagger|OpenAPI
     */
    protected function parseObject(ObjectInterface $object, array $data): ObjectInterface
    {
        foreach ($data as $index => $value) {
            if ('$ref' == $index) {
                $index = str_replace('$', '_', $index);
            }

            if (property_exists($object, $index)) {
                $object = $this->parseProperty($object, $index, $value);
            } elseif (true == ($fieldTypeClassName = $object->getPatternedFieldType($index))) {
                $object = $this->parsePatternedField($object, $fieldTypeClassName, $index, $value);
            }
        }

        return $object;
    }

    /**
     * @param  ObjectInterface  $object
     * @param                   $index
     * @param                   $value
     *
     * @return ObjectInterface|ObjectInterface[]
     */
    protected function parseProperty(ObjectInterface $object, $index, $value)
    {
        if(empty($values)){
            return $object;
        }


        $propertyTypes = $this->getPropertyTypes($object, $index);

        if ($propertyTypes) {
            $values = [];
            foreach ($propertyTypes as $PropertyType) {
                if ($PropertyType->isCollection()) {
                    if (true == ($PropertyType->getCollectionValueType() &&
                                 $className = $PropertyType->getCollectionValueType()->getClassName())) {
                        foreach ($value as $key => $valueItem) {
                            $objctValue = $this->parseObject(new $className(), $valueItem);
                            if ($objctValue->isDataValid()) {
                                $values[$key] = $objctValue;
                            }
                        }
                    }
                } elseif ($PropertyType->getClassName()) {
                    $className  = $PropertyType->getClassName();
                    $objctValue = $this->parseObject(new $className(), $value);
                    if ($objctValue->isDataValid()) {
                        $values = $objctValue;
                        break;
                    }
                }
            }


        }

        $object->$index = !empty($values) ? $values : $value;

        return $object;
    }

    /**
     * @param $object
     * @param $index
     *
     * @return Type[]|null
     */
    private function getPropertyTypes(ObjectInterface $object, $index): ?array
    {
        $objectClass = get_class($object);

        if (!array_key_exists($objectClass, $this->reflectionCache) || !array_key_exists($index,
                $this->reflectionCache[$objectClass])) {

            $propertyTypes = $this->PropertyInfoExtractor->getTypes($objectClass, $index);

            $this->reflectionCache[$objectClass][$index] = $propertyTypes;
        } else {
            $propertyTypes = $this->reflectionCache[$objectClass][$index];
        }

        return $propertyTypes;
    }

    protected function parsePatternedField(
        ObjectInterface $object,
        $fieldTypeClassName,
        $index,
        $value
    ): ObjectInterface {
        if ($fieldTypeClassName && true !== $fieldTypeClassName) {
            if (!is_array($fieldTypeClassName)) {
                $fieldTypeClassNames[] = $fieldTypeClassName;
            } else {
                $fieldTypeClassNames = $fieldTypeClassName;
            }

            foreach ($fieldTypeClassNames as $fieldTypeClassName) {
                if (class_exists($fieldTypeClassName)) {
                    $field = new $fieldTypeClassName();

                    $valueObject = $this->parseObject($field, $value);
                    if ($valueObject->isDataValid()) {
                        $object->setPatternedField($index, $valueObject);
                        break;
                    }
                }
            }
        } else {
            $object->setPatternedField($index, $value);
        }


        return $object;
    }
}

