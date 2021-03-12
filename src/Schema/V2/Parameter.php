<?php


namespace OpenAPI\Schema\V2;


use OpenAPI\Schema\AbstractObject;

class Parameter extends AbstractObject
{

    /**
     * Required. The name of the parameter. Parameter names are case sensitive.
     * If in is "path", the name field MUST correspond to the associated path segment from the path field in the Paths
     * Object. See Path Templating for further information. For all other cases, the name corresponds to the parameter
     * name used based on the in property.
     *
     * @var string|null
     */
    public ?string $name = null;
    /**
     * Required. The location of the parameter. Possible values are "query", "header", "path", "formData" or "body".
     *
     * @var string
     */
    public string $in;
    /**
     * A brief description of the parameter. This could contain examples of use. GFM syntax can be used for rich text
     * representation.
     *
     * @var string|null
     */
    public ?string $description = null;
    /**
     * Determines whether this parameter is mandatory. If the parameter is in "path", this property is required and
     * its value MUST be true. Otherwise, the property MAY be included and its default value is false.
     *
     * @var boolean
     */
    public ?bool $required = null;

    //========= If $in is "body" =======
    /**
     * Required. The schema defining the type used for the body parameter.
     *
     * @var Schema|null
     */
    public ?Schema $schema = null;

    //========= If $in is any value other than "body" =======
    /** @var string|null */
    public ?string $type = null;
    /** @var string|null */
    public ?string $format = null;
    /** @var boolean */
    public ?bool $allowEmptyValue = null;
    /** @var Items|null */
    public ?Items $items = null;
    /** @var string|null */
    public ?string $collectionFormat = null;
    /** @var mixed */
    public $default = null;
    /** @var float|null */
    public ?float $maximum = null;
    /** @var boolean */
    public ?bool $exclusiveMaximum = null;
    /** @var float|null */
    public ?float $minimum = null;
    /** @var boolean */
    public ?bool $exclusiveMinimum = false;
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
    public ?bool $uniqueItems = false;
    /** @var array|null */
    public ?array $enum = null;
    /** @var float|null */
    public ?float $multipleOf = null;
}