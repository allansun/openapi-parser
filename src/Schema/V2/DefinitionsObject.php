<?php


namespace OpenAPI\Schema\V2;


use OpenAPI\Schema\AbstractObject;

/**
 * @method SchemaObject[] getPatternedFields()
 */
class DefinitionsObject extends AbstractObject
{

    protected $fieldPatterns = [
        '/.*/' => SchemaObject::class,
    ];

}