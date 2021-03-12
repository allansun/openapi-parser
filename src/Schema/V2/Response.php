<?php


namespace OpenAPI\Schema\V2;


use OpenAPI\Schema\AbstractObject;

class Response extends AbstractObject
{
    /**
     * @var string
     */
    public string $description;

    /**
     * @var Schema|null
     */
    public ?Schema $schema = null;

    /**
     * @var Headers|null
     */
    public ?Headers $headers = null;

    /**
     * @var Example|null
     */
    public ?Example $examples = null;
}