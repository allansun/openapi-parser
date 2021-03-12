<?php


namespace OpenAPI\Parser;


interface ParserInterface
{
    /**
     * @param  string  $info
     *
     * @return array
     */
    public static function parse(string $info): array;
}