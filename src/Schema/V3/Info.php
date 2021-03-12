<?php

namespace OpenAPI\Schema\V3;

use OpenAPI\Schema\AbstractObject;

class Info extends AbstractObject
{
    /**
     * REQUIRED. The title of the API.
     *
     * @var string
     */
    public string $title;

    /**
     * A short description of the API. CommonMark syntax MAY be used for rich text representation.
     *
     * @var string|null
     */
    public ?string $description = null;

    /**
     * A URL to the Terms of Service for the API. MUST be in the format of a URL.
     *
     * @var string|null
     */
    public ?string $termsOfService = null;

    /**
     * The contact information for the exposed API.
     *
     * @var Contact|null
     */
    public ?Contact $contact = null;

    /**
     * The license information for the exposed API.
     *
     * @var License|null
     */
    public ?License $license = null;

    /**
     * REQUIRED. The version of the OpenAPI document (which is distinct from the OpenAPI Specification version or the
     * API implementation version).
     *
     * @var string
     */
    public string $version;

    protected array $fieldPatterns = [
        '/^x-.*/' => true
    ];
}
