<?php

namespace OpenAPI\Schema\V3;

use OpenAPI\Schema\AbstractObject;

class OAuthFlow extends AbstractObject
{
    /**
     * REQUIRED. The authorization URL to be used for this flow. This MUST be in the form of a URL.
     *
     * @var string|null
     */
    public ?string $authorizationUrl = null;

    /**
     * REQUIRED. The token URL to be used for this flow. This MUST be in the form of a URL.
     *
     * @var string|null
     */
    public ?string $tokenUrl = null;

    /**
     * The URL to be used for obtaining refresh tokens. This MUST be in the form of a URL.
     *
     * @var string|null
     */
    public ?string $refreshUrl = null;

    /**
     * REQUIRED. The available scopes for the OAuth2 security scheme. A map between the scope name and a short
     * description for it. The map MAY be empty.
     *
     * @var array|null
     */
    public ?array $scopes = null;

    protected array $fieldPatterns = [
        '/^x-.*/' => true
    ];
}
