<?php


namespace OpenAPI;


use OpenAPI\Schema\V3\OpenAPI;

class OpenAPIParser extends AbstractParser
{

    /**
     * @param  array  $data
     *
     * @return OpenAPI
     */
    public function parse(array $data): OpenAPI
    {
        return $this->parseObject(new OpenAPI(), $data);
    }
}