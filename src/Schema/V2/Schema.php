<?php /** @noinspection PhpMissingFieldTypeInspection */
/** @noinspection PhpMissingFieldTypeInspection */
/** @noinspection PhpMissingFieldTypeInspection */
/** @noinspection PhpMissingFieldTypeInspection */
/** @noinspection PhpMissingFieldTypeInspection */
/** @noinspection PhpMissingFieldTypeInspection */
/** @noinspection PhpMissingFieldTypeInspection */
/** @noinspection PhpMissingFieldTypeInspection */
/** @noinspection PhpMissingFieldTypeInspection */
/** @noinspection PhpMissingFieldTypeInspection */
/** @noinspection PhpMissingFieldTypeInspection */
/** @noinspection PhpMissingFieldTypeInspection */
/** @noinspection PhpMissingFieldTypeInspection */
/** @noinspection PhpMissingFieldTypeInspection */
/** @noinspection PhpMissingFieldTypeInspection */
/** @noinspection PhpMissingFieldTypeInspection */
/** @noinspection PhpMissingFieldTypeInspection */
/** @noinspection PhpMissingFieldTypeInspection */
/** @noinspection PhpMissingFieldTypeInspection */
/** @noinspection PhpMissingFieldTypeInspection */
/** @noinspection PhpMissingFieldTypeInspection */
/** @noinspection PhpMissingFieldTypeInspection */
/** @noinspection PhpMissingFieldTypeInspection */
/** @noinspection PhpMissingFieldTypeInspection */

/** @noinspection PhpMissingFieldTypeInspection */


namespace OpenAPI\Schema\V2;


use OpenAPI\Schema\AbstractObject;

class Schema extends AbstractObject
{

    /**
     * The Schema Object allows the definition of input and output data types. These types can be objects,
     * but also primitives and arrays. This object is based on the JSON Schema Specification Draft 4 and uses a
     * predefined subset of it. On top of this subset, there are extensions provided by this specification to allow for
     * more complete documentation.
     *
     * Further information about the properties can be found in JSON Schema Core and JSON Schema Validation. Unless
     * stated otherwise, the property definitions follow the JSON Schema specification as referenced here.
     *
     * The following properties are taken directly from the JSON Schema definition and follow the same specifications:
     */

    public $_ref;
    public $format;
    public $title;
    public $description;
    public $default;
    public $multipleOf;
    public $maximum;
    public $exclusiveMaximum;
    public $minimum;
    public $exclusiveMinimum;
    public $maxLength;
    public $minLength;
    public $pattern;
    public $maxItems;
    public $minItems;
    public $uniqueItems;
    public $maxProperties;
    public $minProperties;
    public $required;
    public $enum;
    public $type;


    /**
     * The following properties are taken from the JSON Schema definition but their definitions were adjusted to the
     * Swagger Specification. Their definition is the same as the one from JSON Schema, only where the original
     * definition references the JSON Schema definition, the Schema Object definition is used instead.
     */

    public $items;
    public $allOf;
    public $properties;
    public $additionalProperties;


    /**
     * Other than the JSON Schema subset fields, the following fields may be used for further schema documentation.
     */

    /**
     * @var string|null
     */
    public ?string $discriminator = null;

    /**
     * @var boolean
     */
    public ?bool $readOnly = null;

    /**
     * @var XMLObject|null
     */
    public ?XMLObject $xml = null;

    /**
     * @var ExternalDocumentation|null
     */
    public ?ExternalDocumentation $externalDocs = null;

    /**
     * @var mixed
     */
    public $example = null;

}