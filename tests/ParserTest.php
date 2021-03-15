<?php

namespace Tests\OpenAPI;

use OpenAPI\Parser;
use OpenAPI\Schema\V3\OpenAPI;
use PHPUnit\Framework\TestCase;

class ParserTest extends TestCase
{

    /**
     * @depends testParseFileContent
     */
    public function testDetectParser()
    {
        $parser = new Parser();

        $data = $parser->parseFileContent(__DIR__ . '/Fixture/petstore-swagger.json');
        $this->assertInstanceOf(Parser\SwaggerParser::class, $parser->detectParser($data));


        $data = $parser->parseFileContent(__DIR__ . '/Fixture/petstore-openapi.json');
        $this->assertInstanceOf(Parser\OpenAPIParser::class, $parser->detectParser($data));

        $this->expectExceptionMessage('Unkown OpenApi/Swagger specification version');
        $parser->detectParser($parser->parseFileContent(__DIR__ . '/Fixture/invalid-version.json'));
    }

    /**
     * @depends testDetectParser
     */
    public function testParse()
    {
        $this->assertInstanceOf(OpenAPI::class, Parser::parse(__DIR__ . '/Fixture/petstore-openapi.json'));
    }

    public function testParseFileContent()
    {
        $parser = new Parser();

        $this->assertIsArray($parser->parseFileContent(__DIR__ . '/Fixture/petstore-swagger.json'));
        $this->assertIsArray($parser->parseFileContent(__DIR__ . '/Fixture/petstore-swagger.yml'));

        $this->assertIsArray($parser->parseFileContent(__DIR__ . '/Fixture/petstore-openapi.json'));
        $this->assertIsArray($parser->parseFileContent(__DIR__ . '/Fixture/petstore-openapi.yml'));

        $this->expectExceptionMessage('File content invalid');

        $parser->parseFileContent(__DIR__ );
    }
}
