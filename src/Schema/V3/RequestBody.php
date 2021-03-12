<?php

namespace OpenAPI\Schema\V3;

use OpenAPI\Schema\AbstractObject;

class RequestBody extends AbstractObject
{
    /**
     * A brief description of the request body. This could contain examples of use. CommonMark syntax MAY be used for
     * rich text representation.
     *
     * @var string|null
     */
    public ?string $description = null;

    /**
     * REQUIRED. The content of the request body. The key is a media type or [media type range]appendix-D) and the
     * value describes it. For requests that match multiple keys, only the most specific key is applicable. e.g.
     * text/plain overrides text/*
     *
     * @var MediaType[]
     */
    public array $content;

    /**
     * Determines if the request body is required in the request. Defaults to false.
     *
     * @var bool|null
     */
    public ?bool $required = false;

    protected array $fieldPatterns = [
        '/^x-.*/' => true
    ];
}
