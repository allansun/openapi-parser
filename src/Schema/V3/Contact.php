<?php

namespace OpenAPI\Schema\V3;

use OpenAPI\Schema\AbstractObject;

class Contact extends AbstractObject
{

    /**
     * The identifying name of the contact person/organization.
     *
     * @var string|null
     */
    public ?string $name = null;

    /**
     * The URL pointing to the contact information. MUST be in the format of a URL.
     *
     * @var string|null
     */
    public ?string $url = null;

    /**
     * The email address of the contact person/organization. MUST be in the format of an email address.
     *
     * @var string|null
     */
    public ?string $email = null;

    protected array $fieldPatterns = [
        '/^x-.*/' => true
    ];
}
