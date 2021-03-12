<?php

namespace OpenAPI\Schema\V3;

use OpenAPI\Schema\AbstractObject;

class Link extends AbstractObject
{

    /**
     * A relative or absolute URI reference to an OAS operation. This field is mutually exclusive of the operationId
     * field, and MUST point to an Operation Object. Relative operationRef values MAY be used to locate an existing
     * Operation Object in the OpenAPI definition.
     *
     * @var string|null
     */
    public ?string $operationRef = null;

    /**
     * The name of an existing, resolvable OAS operation, as defined with a unique operationId. This field is mutually
     * exclusive of the operationRef field.
     *
     * @var string|null
     */
    public ?string $operationId = null;

    /**
     * A map representing parameters to pass to an operation as specified with operationId or identified via
     * operationRef. The key is the parameter name to be used, whereas the value can be a constant or an expression to
     * be evaluated and passed to the linked operation. The parameter name can be qualified using the parameter
     * location [{in}.]{name} for operations that use the same parameter name in different locations (e.g. path.id).
     *
     * @var array|null
     */
    public ?array $parameters = null;

    /**
     * A literal value or {expression} to use as a request body when calling the target operation.
     *
     * @var string|null
     */
    public ?string $requestBody = null;

    /**
     * A description of the link. CommonMark syntax MAY be used for rich text representation.
     *
     * @var string|null
     */
    public ?string $description = null;

    /**
     * A server object to be used by the target operation.
     *
     * @var Server|null
     */
    public ?Server $server = null;

    protected array $fieldPatterns = [
        '/^x-.*/' => true
    ];
}
