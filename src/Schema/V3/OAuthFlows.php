<?php

namespace OpenAPI\Schema\V3;

use OpenAPI\Schema\AbstractObject;

class OAuthFlows extends AbstractObject
{
    /**
     * Configuration for the OAuth Implicit flow
     *
     * @var OAuthFlow|null
     */
    public ?OAuthFlow $implicit = null;

    /**
     * Configuration for the OAuth Resource Owner Password flow
     *
     * @var OAuthFlow|null
     */
    public ?OAuthFlow $password = null;

    /**
     * Configuration for the OAuth Client Credentials flow. Previously called application in OpenAPI 2.0.
     *
     * @var OAuthFlow|null
     */
    public ?OAuthFlow $clientCredentials = null;

    /**
     * Configuration for the OAuth Authorization Code flow. Previously called accessCode in OpenAPI 2.0.
     *
     * @var OAuthFlow|null
     */
    public ?OAuthFlow $authorizationCode = null;

    protected array $fieldPatterns = [
        '/^x-.*/' => true
    ];
}
