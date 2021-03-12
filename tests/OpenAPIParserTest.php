<?php

namespace Tests\OpenAPI;

use OpenAPI\OpenAPIParser;
use OpenAPI\Schema\V3\OpenAPI;
use PHPUnit\Framework\TestCase;

class OpenAPIParserTest extends TestCase
{

    public function testParse()
    {
        $data = json_decode(file_get_contents(__DIR__ . '/Fixture/openapi.json'), true);

        $parser = new OpenAPIParser();


        $result = $parser->parse($data);

        $this->assertInstanceOf(OpenAPI::class, $result);

        $this->assertMatchesRegularExpression('/(.*)Petstore(.*)/', $result->info->title);
    }
}
