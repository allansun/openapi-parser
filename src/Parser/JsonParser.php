<?php


namespace OpenAPI\Parser;


class JsonParser implements ParserInterface
{
    /**
     * @inheritdoc
     */
    public static function parse(string $info): array
    {
        return json_decode($info, true);
    }
}