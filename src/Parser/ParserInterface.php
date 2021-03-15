<?php


namespace OpenAPI\Parser;


use OpenAPI\Schema\ObjectInterface;

interface ParserInterface
{
    /**
     * @param  array  $data
     *
     * @return ObjectInterface
     */
    public function parse(array $data): ObjectInterface;
}