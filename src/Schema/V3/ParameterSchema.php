<?php

namespace OpenAPI\Schema\V3;

class ParameterSchema extends \OpenAPI\Schema\AbstractObject
{
    /**
     * Describes how the parameter value will be serialized depending on the type of the parameter value. Default
     * values (based on value of in): for query - form; for path - simple; for header - simple; for cookie - form.
     *
     * @var string|null
     */
    public ?string $style = null;

    /**
     * When this is true, parameter values of type array or object generate separate parameters for each value of the
     * array or key-value pair of the map. For other types of parameters this property has no effect. When style is
     * form, the default value is true. For all other styles, the default value is false.
     *
     * @var bool|null
     */
    public ?bool $explode = false;

    /**
     * Determines whether the parameter value SHOULD allow reserved characters, as defined by [RFC3986]
     * :/?#[]@!$&'()*+,;= to be included without percent-encoding. This property only applies to parameters with an in
     * value of query. The default value is false.
     *
     * @var bool|null
     */
    public ?bool $allowReserved = false;

    /**
     * The schema defining the type used for the parameter.
     *
     * @var Schema|Reference|null
     */
    public $schema = null;

    /**
     * Example of the parameter’s potential value. The example SHOULD match the specified schema and encoding
     * properties if present. The example field is mutually exclusive of the examples field. Furthermore, if
     * referencing a schema that contains an example, the example value SHALL override the example provided by the
     * schema. To represent examples of media types that cannot naturally be represented in JSON or YAML, a string
     * value can contain the example with escaping where necessary.
     *
     * @var mixed|null
     */
    public $example = null;

    /**
     * Examples of the parameter’s potential value. Each example SHOULD contain a value in the correct format as
     * specified in the parameter encoding. The examples field is mutually exclusive of the example field. Furthermore,
     * if referencing a schema that contains an example, the examples value SHALL override the example provided by the
     * schema.
     *
     * @var Example[]|Reference[]|null
     */
    public ?array $examples = null;


}
