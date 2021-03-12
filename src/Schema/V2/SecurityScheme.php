<?php


namespace OpenAPI\Schema\V2;


use OpenAPI\Schema\AbstractObject;

class SecurityScheme extends AbstractObject
{
    /** @var string */
    public string $type;
    /** @var string|null */
    public ?string $description = null;
    /** @var string|null */
    public ?string $name = null;
    /** @var string|null */
    public ?string $in = null;
    /** @var string|null */
    public ?string $flow = null;
    /** @var string|null */
    public ?string $authorizationUrl = null;
    /** @var string|null */
    public ?string $tokenUrl = null;
    /** @var Scopes|null */
    public ?Scopes $scopes = null;

}