<?php

namespace OpenAPI\Schema\V3;

use OpenAPI\Schema\AbstractObject;

class Discrimiator extends AbstractObject
{

    /**
     * REQUIRED. The name of the property in the payload that will hold the discriminator value.
     *
     * @var string
     */
    public string $propertyName;

    /**
     * An object to hold mappings between payload values and schema names or references.
     *
     * @var array|null
     */
    public ?array $mapping = null;
}
