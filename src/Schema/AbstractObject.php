<?php

namespace OpenAPI\Schema;


abstract class AbstractObject implements ObjectInterface
{
    /**
     * Associative array, key to be the field panttern, value to be the class name of object to this patterned field
     * If value is empty, treat this field as normal value (string or array)
     *
     * @var array
     */
    protected $fieldPatterns = ['/^x-.*/' => true];

    protected $patternedFields = [];

    public function isFieldPatternedField($field)
    {
        foreach ($this->fieldPatterns as $index => $fieldTypeClassName) {
            if (preg_match($index, $field)) {
                return $fieldTypeClassName;
            }
        }

        return false;
    }

    public function setPatternedField($field, $value)
    {
        $this->patternedFields[$field] = $value;

        return $this;
    }

    public function getPatternedField($field)
    {
        if (array_key_exists($field, $this->patternedFields)) {
            return $this->patternedFields[$field];
        } else {
            return null;
        }
    }

    public function isDataValid()
    {
        if (1 <= count($this->patternedFields)) {
            return true;
        }

        $ReflectionObject = new \ReflectionObject($this);

        foreach ($ReflectionObject->getProperties(\ReflectionProperty::IS_PUBLIC) as $Property) {
            $propertyName = $Property->getName();

            if (!empty($this->$propertyName)) {
                return true;
            }
        }

        return false;
    }


}