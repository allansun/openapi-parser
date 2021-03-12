<?php

namespace OpenAPI\Schema\V3;

use OpenAPI\Schema\AbstractObject;

class Callback extends AbstractObject
{
    protected array $fieldPatterns = [
        '/^(?!x-).+$/' => [PathItem::class],
        '/^x-.*/'      => true
    ];
}
