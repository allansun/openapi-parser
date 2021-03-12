<?php

namespace OpenAPI\Schema\V3;

use OpenAPI\Schema\AbstractObject;

class Paths extends AbstractObject
{
    protected array $fieldPatterns = [
        '/^x-.*/' => true,
        '/\/.*/'  => PathItem::class,
    ];
}
