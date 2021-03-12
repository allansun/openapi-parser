<?php

namespace OpenAPI\Schema\V3;

use OpenAPI\Schema\AbstractObject;

class SecurityRequirement extends AbstractObject
{
    protected array $fieldPatterns = [
        '/.*/' => true
    ];

}
