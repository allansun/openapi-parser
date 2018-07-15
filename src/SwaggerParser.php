<?php


namespace OpenAPI;


use OpenAPI\Schema\ObjectInterface;
use OpenAPI\Schema\V2\SwaggerObject;
use Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor;
use Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor;
use Symfony\Component\PropertyInfo\PropertyInfoExtractor;
use Symfony\Component\PropertyInfo\Type;

class SwaggerParser
{

    protected $reflectionCache = [];

    /**
     * @var PropertyInfoExtractor
     */
    protected $PropertyInfoExtractor;

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

    /**
     * @param array $data
     *
     * @return SwaggerObject|ObjectInterface
     */
    public function parse(array $data)
    {
        $SwaggerObject = new SwaggerObject();


        return $this->parseObject($SwaggerObject, $data);
    }

    /**
     * @param ObjectInterface $object
     * @param array           $data
     *
     * @return ObjectInterface
     */
    protected function parseObject(ObjectInterface $object, array $data)
    {
        foreach ($data as $index => $value) {
            if (false !== strpos($index, '$')) {
                $index = str_replace('$', '_', $index);
            }

            if (property_exists($object, $index)) {
                $object = $this->parseProperty($object, $index, $value);
            } elseif (true == ($fieldTypeClassName = $object->isFieldPatternedField($index))) {
                $object = $this->parsePatternedField($object, $fieldTypeClassName, $index, $value);
            }
        }

        return $object;
    }

    protected function parsePatternedField(ObjectInterface $object, $fieldTypeClassName, $index, $value)
    {
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

    protected function parseProperty(ObjectInterface $object, $index, $value)
    {
        $propertyTypes = $this->getPropertyTypes($object, $index);

        if ($propertyTypes) {
            foreach ($propertyTypes as $PropertyType) {
                if ($PropertyType->isCollection()) {
                    $values = [];
                    if (true == ($className = $PropertyType->getCollectionValueType()->getClassName())) {
                        foreach ($value as $valueItem) {
                            $objctValue = $this->parseObject(new $className(), $valueItem);
                            if ($objctValue->isDataValid()) {
                                $values[] = $objctValue;
                            }
                        }
                    }

                    if (1 <= count($values)) {
                        $value = $values;
                        break;
                    }
                } elseif ($PropertyType->getClassName()) {
                    $className  = $PropertyType->getClassName();
                    $objctValue = $this->parseObject(new $className(), $value);
                    if ($objctValue->isDataValid()) {
                        $value = $objctValue;
                        break;
                    }
                }
            }


        }

        $object->$index = $value;

        return $object;
    }

    /**
     * @param $object
     * @param $index
     *
     * @return Type[]|null
     */
    private function getPropertyTypes(ObjectInterface $object, $index)
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
}