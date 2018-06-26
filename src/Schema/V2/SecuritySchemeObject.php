<?php


namespace OpenAPI\Schema\V2;


use OpenAPI\Schema\AbstractObject;

class SecuritySchemeObject extends AbstractObject
{
    /** @var string */
    public $type;
    /** @var string */
    public $description;
    /** @var string */
    public $name;
    /** @var string */
    public $in;
    /** @var string */
    public $flow;
    /** @var string */
    public $authorizationUrl;
    /** @var string */
    public $tokenUrl;
    /** @var ScopesObject */
    public $scopes;

}