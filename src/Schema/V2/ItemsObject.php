<?php


namespace OpenAPI\Schema\V2;


use OpenAPI\Schema\AbstractObject;

class ItemsObject extends AbstractObject
{

    /** @var string */
    public $type;

    /** @var string */
    public $format;

    /** @var ItemsObject */
    public $items;

    /** @var string */
    public $collectionFormat;

    /** @var mixed */
    public $default;

    /** @var float */
    public $maximum;

    /**  @var boolean */
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

    /** @var mixed */
    public $enum;

    /** @var float */
    public $multipleOf;
}