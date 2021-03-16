<?php /** @noinspection PhpMissingFieldTypeInspection */

namespace OpenAPI\Schema\V3;

use OpenAPI\Schema\AbstractObject;

class Schema extends AbstractObject
{
    // The following properties are taken directly from the JSON Schema definition and follow the same specifications:
    public $title = null;
    public $multipleOf = null;
    public $maximum = null;
    public $exclusiveMaximum = null;
    public $minimum = null;
    public $exclusiveMinimum = null;
    public $maxLength = null;
    public $minLength = null;
    public $pattern = null;
    public $maxItems = null;
    public $minItems = null;
    public $uniqueItems = null;
    public $maxProperties = null;
    public $minProperties = null;
    public $required = null;
    public $enum = null;

    // The following properties are taken from the JSON Schema definition but their definitions were adjusted to the OpenAPI Specification.

    /**
     *  Value MUST be a string. Multiple types via an array are not supported.
     *
     * @var string|null
     */
    public $type = null;

    /**
     * Inline or referenced schema MUST be of a Schema Object and not a standard JSON Schema.
     *
     * @var Schema|Reference|null
     */
    public $allOf = null;

    /**
     * Inline or referenced schema MUST be of a Schema Object and not a standard JSON Schema.
     *
     * @var Schema|Reference|null
     */
    public $oneOf = null;

    /**
     * Inline or referenced schema MUST be of a Schema Object and not a standard JSON Schema.
     *
     * @var Schema|Reference|null
     */
    public $anyOf = null;

    /**
     * Inline or referenced schema MUST be of a Schema Object and not a standard JSON Schema.
     *
     * @var Schema|Reference|null
     */
    public $not = null;

    /**
     * Value MUST be an object and not an array. Inline or referenced schema MUST be of a Schema Object and not a
     * standard JSON Schema. items MUST be present if the type is array
     *
     * @var Schema|Reference|null
     */
    public $items = null;

    /**
     * Property definitions MUST be a Schema Object and not a standard JSON Schema (inline or referenced).
     *
     * @var Schema|Reference|null
     */
    public $properties = null;

    /**
     * Value can be boolean or object. Inline or referenced schema MUST be of a Schema Object and not a standard JSON
     * Schema. Consistent with JSON Schema, additionalProperties defaults to true.
     *
     * @var Schema|Reference|bool|null
     */
    public $additionalProperties = null;

    /**
     * CommonMark syntax MAY be used for rich text representation.
     *
     * @var string|null
     */
    public $description = null;

    /**
     * See Data Type Formats for further details. While relying on JSON Schema’s defined formats, the OAS offers a few
     * additional predefined formats.
     *
     * @var mixed|null
     */
    public $format = null;

    /**
     * The default value represents what would be assumed by the consumer of the input as the value of the schema if
     * one is not provided. Unlike JSON Schema, the value MUST conform to the defined type for the Schema Object
     * defined at the same level. For example, if type is string, then default can be "foo" but cannot be 1.
     *
     * @var mixed|null
     */
    public $default = null;


    // Other than the JSON Schema subset fields, the following fields MAY be used for further schema documentation:

    /**
     * A true value adds "null" to the allowed type specified by the type keyword, only if type is explicitly defined
     * within the same Schema Object. Other Schema Object constraints retain their defined behavior, and therefore may
     * disallow the use of null as a value. A false value leaves the specified or default type unmodified. The default
     * value is false.
     *
     * @var bool|null
     */
    public $nullable = false;

    /**
     * Adds support for polymorphism. The discriminator is an object name that is used to differentiate between other
     * schemas which may satisfy the payload description. See Composition and Inheritance for more details.
     *
     * @var Discrimiator|null
     */
    public ?Discrimiator $discriminator = null;

    /**
     * Relevant only for Schema "properties" definitions. Declares the property as “read only”. This means that it MAY
     * be sent as part of a response but SHOULD NOT be sent as part of the request. If the property is marked as
     * readOnly being true and is in the required list, the required will take effect on the response only. A property
     * MUST NOT be marked as both readOnly and writeOnly being true. Default value is false.
     *
     * @var bool|null
     */
    public ?bool $readOnly = false;

    /**
     * Relevant only for Schema "properties" definitions. Declares the property as “write only”. Therefore, it MAY be
     * sent as part of a request but SHOULD NOT be sent as part of the response. If the property is marked as writeOnly
     * being true and is in the required list, the required will take effect on the request only. A property MUST NOT
     * be marked as both readOnly and writeOnly being true. Default value is false.
     *
     * @var bool|null
     */
    public ?bool $writeOnly = false;

    /**
     * This MAY be used only on properties schemas. It has no effect on root schemas. Adds additional metadata to
     * describe the XML representation of this property.
     *
     * @var XML|null
     */
    public ?XML $xml = null;

    /**
     * Additional external documentation for this schema.
     *
     * @var ExternalDocumentation|null
     */
    public ?ExternalDocumentation $externalDocs = null;

    /**
     * A free-form property to include an example of an instance for this schema. To represent examples that cannot be
     * naturally represented in JSON or YAML, a string value can be used to contain the example with escaping where
     * necessary.
     *
     * @var null
     */
    public $example = null;

    /**
     * Specifies that a schema is deprecated and SHOULD be transitioned out of usage. Default value is false.
     *
     * @var bool|null
     */
    public ?bool $deprecated = false;

    protected array $fieldPatterns = [
        '/.*/' => true
    ];
}
