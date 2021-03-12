<?php

namespace OpenAPI\Schema\V3;

use OpenAPI\Schema\AbstractObject;

class Reference extends AbstractObject
{
    /**
     * REQUIRED. The reference string.
     *
     * @var string
     */
    public string $_ref;
}
