<?php


namespace OpenAPI\Schema\V2;


use OpenAPI\Schema\AbstractObject;

/**
 * @method PathItem[]|mixed[] getPatternedFields()
 */
class Paths extends AbstractObject
{
    protected array $fieldPatterns = [
        '/^x-.*/' => true,
        '/\/.*/'  => PathItem::class,
    ];
}