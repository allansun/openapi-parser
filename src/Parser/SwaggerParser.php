<?php


namespace OpenAPI\Parser;


use OpenAPI\Schema\V2\Swagger;

class SwaggerParser extends AbstractParser
{

    /**
     * @param  array  $data
     *
     * @return Swagger
     */
    public function parse(array $data): Swagger
    {
        return $this->parseObject(new Swagger(), $data);
    }
}