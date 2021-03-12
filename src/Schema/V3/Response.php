<?php

namespace OpenAPI\Schema\V3;

use OpenAPI\Schema\AbstractObject;

class Response extends AbstractObject
{

    /**
     * REQUIRED. A short description of the response. CommonMark syntax MAY be used for rich text representation.
     *
     * @var string
     */
    public string $description;

    /**
     * Maps a header name to its definition. [RFC7230] states header names are case insensitive. If a response header
     * is defined with the name "Content-Type", it SHALL be ignored.
     *
     * @var Header[]|null
     */
    public ?array $headers = null;

    /**
     * A map containing descriptions of potential response payloads. The key is a media type or [media type
     * range]appendix-D) and the value describes it. For responses that match multiple keys, only the most specific key
     * is applicable. e.g. text/plain overrides text/*
     *
     * @var MediaType[]|null
     */
    public ?array $content = null;

    /**
     * A map of operations links that can be followed from the response. The key of the map is a short name for the
     * link, following the naming constraints of the names for Component Objects.
     *
     * @var Link[]|Reference[]|null
     */
    public ?array $links = null;

    protected array $fieldPatterns = [
        '/^x-.*/' => true
    ];
}
