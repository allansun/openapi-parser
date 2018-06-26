<?php

namespace OpenAPI\Schema\V2;

use OpenAPI\Schema\AbstractObject;

class InfoObject extends AbstractObject
{

    /**
     * @var string
     */
    public $title;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $termsOfService;

    /**
     * @var ContactObject
     */
    public $contact;

    /**
     * @var LicenseObject
     */
    public $license;

    /**
     * @var string
     */
    public $version;
}