<?php

namespace OpenAPI\Schema\V3;

use OpenAPI\Schema\AbstractObject;

class Header extends AbstractObject
{
    /**
     * A brief description of the parameter. This could contain examples of use. CommonMark syntax MAY be used for rich
     * text representation.
     *
     * @var string|null
     */
    public ?string $description;

    /**
     * Determines whether this parameter is mandatory. If the parameter location is "path", this property is REQUIRED
     * and its value MUST be true. Otherwise, the property MAY be included and its default value is false.
     *
     * @var bool|null
     */
    public ?bool $required = false;

    /**
     * Specifies that a parameter is deprecated and SHOULD be transitioned out of usage. Default value is false.
     *
     * @var bool|null
     */
    public ?bool $deprecated = false;

    /**
     * Sets the ability to pass empty-valued parameters. This is valid only for query parameters and allows sending a
     * parameter with an empty value. Default value is false. If style is used, and if behavior is n/a (cannot be
     * serialized), the value of allowEmptyValue SHALL be ignored. Use of this property is NOT RECOMMENDED, as it is
     * likely to be removed in a later revision.
     *
     * @var bool|null
     */
    public ?bool $allowEmptyValue = false;


    // The rules for serialization of the parameter are specified in one of two ways. For simpler scenarios, a schema
    // and style can describe the structure and syntax of the parameter.

    /**
     * @var ParameterSchema|null
     */
    public ?ParameterSchema $schema = null;

    /**
     * @var ParameterStyle|null
     */
    public ?ParameterStyle $style = null;

    // For more complex scenarios, the content property can define the media type and schema of the parameter.
    // A parameter MUST contain either a schema property, or a content property, but not both. When example or examples
    // are provided in conjunction with the schema object, the example MUST follow the prescribed serialization strategy
    // for the parameter.

    /**
     * A map containing the representations for the parameter. The key is the media type and the value describes it.
     * The map MUST only contain one entry.
     *
     * @var MediaType[]|null
     */
    public ?array $content = null;
}
