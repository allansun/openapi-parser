<?php

namespace Tests\OpenAPI;

use OpenAPI\Parser\JsonParser;
use PHPUnit\Framework\TestCase;
use Tests\OpenAPI\Fixture\Fixture;

class BasicTest extends TestCase
{

    public function testJsonParser()
    {

        $json = Fixture::getBasic();

        $data = JsonParser::parse($json);

        print_r($data);

    }

}
