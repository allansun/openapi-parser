<?php


namespace OpenAPI\Schema\V2;


use OpenAPI\Schema\AbstractObject;

class Items extends AbstractObject
{

    /** @var string */
    public string $type;

    /** @var string|null */
    public ?string $format = null;

    /** @var Items|null */
    public ?Items $items = null;

    /** @var string|null */
    public ?string $collectionFormat = null;

    /** @var mixed */
    public $default = null;

    /** @var float|null */
    public ?float $maximum = null;

    /**  @var boolean */
    public ?bool $exclusiveMaximum = null;

    /** @var float|null */
    public ?float $minimum = null;

    /** @var boolean */
    public ?bool $exclusiveMinimum = null;

    /** @var int|null */
    public ?int $maxLength = null;

    /** @var int|null */
    public ?int $minLength = null;

    /** @var string|null */
    public ?string $pattern = null;

    /** @var int|null */
    public ?int $maxItems = null;

    /** @var int|null */
    public ?int $minItems = null;

    /** @var boolean */
    public ?bool $uniqueItems = null;

    /** @var mixed */
    public $enum = null;

    /** @var float|null */
    public ?float $multipleOf = null;
}