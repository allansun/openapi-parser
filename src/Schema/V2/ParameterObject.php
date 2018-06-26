<?php


namespace OpenAPI\Schema\V2;


use OpenAPI\Schema\AbstractObject;

class ParameterObject extends AbstractObject
{

    /** @var string */
    public $name;
    /** @var string */
    public $in;
    /** @var string */
    public $description;
    /** @var boolean */
    public $required;

    //========= If $in is "body" =======
    /** @var SchemaObject */
    public $schema;

    //========= If $in is any value other than "body" =======
    /** @var string */
    public $type;
    /** @var string */
    public $format;
    /** @var boolean */
    public $allowEmptyValue;
    /** @var ItemsObject */
    public $items;
    /** @var string */
    public $collectionFormat;
    /** @var mixed */
    public $default;
    /** @var float */
    public $maximum;
    /** @var boolean */
    public $exclusiveMaximum;
    /** @var float */
    public $minimum;
    /** @var boolean */
    public $exclusiveMinimum;
    /** @var integer */
    public $maxLength;
    /** @var integer */
    public $minLength;
    /** @var string */
    public $pattern;
    /** @var integer */
    public $maxItems;
    /** @var integer */
    public $minItems;
    /** @var boolean */
    public $uniqueItems;
    /** @var array */
    public $enum;
    /** @var float */
    public $multipleOf;
}