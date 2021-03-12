<?php

namespace OpenAPI\Schema\V2;

use OpenAPI\Schema\AbstractObject;

class Info extends AbstractObject
{

    /**
     * @var string
     */
    public string $title;

    /**
     * @var string|null
     */
    public ?string $description = null;

    /**
     * @var string|null
     */
    public ?string $termsOfService = null;

    /**
     * @var Contact|null
     */
    public ?Contact $contact = null;

    /**
     * @var License|null
     */
    public ?License $license = null;

    /**
     * @var string
     */
    public string $version;
}