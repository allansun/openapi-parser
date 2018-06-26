<?php


namespace OpenAPI\Schema;


interface ObjectInterface
{
    /**
     * Check if a field is patterned field
     *
     * @param string $field
     *
     * @return bool
     */
    public function isFieldPatternedField($field);

    /**
     * Set a patterened field's value
     *
     * @param string $field
     * @param mixed  $value
     *
     * @return self
     */
    public function setPatternedField($field, $value);

    /**
     * Get value from a patterened field
     *
     * @param string $field
     *
     * @return mixed
     */
    public function getPatternedField($field);

    /**
     * Validates any fields within this object contains any data. If not it means we might have parsed wrong JSON data
     * into this object. This is particularly useful when a JSON field might be different object types, we use this
     * method to determine which object type it should be.
     *
     * @return boolean
     */
    public function isDataValid();

}