<?php

namespace OpenAPI\Schema;


use ReflectionObject;
use ReflectionProperty;

abstract class AbstractObject implements ObjectInterface
{
    /**
     * Associative array, key to be the field panttern, value to be the class name of object to this patterned field
     * If value is empty, treat this field as normal value (string or array)
     *
     * @var array
     */
    protected array $fieldPatterns = ['/^x-.*/' => true];

    protected array $patternedFields = [];

    public function getAllValidFields(): array
    {
        $fields = [];

        $ReflectionObject = new ReflectionObject($this);

        foreach ($ReflectionObject->getProperties(ReflectionProperty::IS_PUBLIC) as $Property) {
            $propertyName = $Property->getName();

            if (!empty($this->$propertyName)) {
                $fields[$propertyName] = $Property;
            }
        }

        foreach ($this->getPatternedFields() as $key => $value) {
            $fields[$key] = $value;
        }

        return $fields;
    }

    public function getPatternedField(string $field)
    {
        if (array_key_exists($field, $this->patternedFields)) {
            return $this->patternedFields[$field];
        } else {
            return null;
        }
    }

    public function getPatternedFieldType(string $field)
    {
        foreach ($this->fieldPatterns as $index => $fieldTypeClassName) {
            if (preg_match($index, $field)) {
                return $fieldTypeClassName;
            }
        }

        return null;
    }

    public function getPatternedFields(): array
    {
        return $this->patternedFields;
    }

    public function isDataValid(): bool
    {
        if (1 <= count($this->patternedFields)) {
            return true;
        }

        $ReflectionObject = new ReflectionObject($this);

        foreach ($ReflectionObject->getProperties(ReflectionProperty::IS_PUBLIC) as $Property) {
            $propertyName = $Property->getName();

            if (!empty($this->$propertyName)) {
                return true;
            }
        }

        return false;
    }

    public function setPatternedField(string $field, $value): self
    {
        $this->patternedFields[$field] = $value;

        return $this;
    }
}