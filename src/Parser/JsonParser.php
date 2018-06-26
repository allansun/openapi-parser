<?php


namespace OpenAPI\Parser;


class JsonParser implements ParserInterface
{
    /**
     * @inheritdoc
     */
    public static function parse(string $info)
    {
        return json_decode($info, true);
    }
}