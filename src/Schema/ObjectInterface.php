<?php


namespace OpenAPI\Schema;


interface ObjectInterface
{
    /**
     * Get value from a patterened field
     *
     * @param  string  $field
     *
     * @return mixed
     */
    public function getPatternedField(string $field);

    /**
     * Get the defined type of patterned field
     * @param  string  $field
     *
     * @return string|array
     */
    public function getPatternedFieldType(string $field);

    /**
     * Get all patterned fields
     *
     * @return ObjectInterface[]
     */
    public function getPatternedFields(): array;

    /**
     * Validates any fields within this object contains any data. If not it means we might have parsed wrong JSON data
     * into this object. This is particularly useful when a JSON field might be different object types, we use this
     * method to determine which object type it should be.
     *
     * @return boolean
     */
    public function isDataValid(): bool;

    /**
     * Set a patterened field's value
     *
     * @param  string  $field
     * @param  mixed   $value
     *
     * @return self
     */
    public function setPatternedField(string $field, $value): ObjectInterface;

}