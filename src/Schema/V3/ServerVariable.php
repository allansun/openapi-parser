<?php

namespace OpenAPI\Schema\V3;

use OpenAPI\Schema\AbstractObject;

class ServerVariable extends AbstractObject
{
    /**
     * An enumeration of string values to be used if the substitution options are from a limited set. The array SHOULD
     * NOT be empty.
     *
     * @var array
     */
    public array $enum = [];

    /**
     * REQUIRED. The default value to use for substitution, which SHALL be sent if an alternate value is not supplied.
     * Note this behavior is different than the Schema Object’s treatment of default values, because in those cases
     * parameter values are optional. If the enum is defined, the value SHOULD exist in the enum’s values.
     *
     * @var string
     */
    public string $default;

    /**
     * An optional description for the server variable. CommonMark syntax MAY be used for rich text representation.
     *
     * @var string|null
     */
    public ?string $description = null;

    protected array $fieldPatterns = [
        '/^x-.*/' => true
    ];
}
