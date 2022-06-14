<?php

namespace Tests\OpenAPI;

use OpenAPI\Parser\OpenAPIParser;
use OpenAPI\Schema\V3 as Schema;
use PHPUnit\Framework\TestCase;

class OpenAPIParserTest extends TestCase
{

    public function testParse()
    {
        $data = json_decode(file_get_contents(__DIR__ . '/Fixture/petstore-openapi.json'), true);

        $parser = new OpenAPIParser();


        $result = $parser->parse($data);

        $this->assertInstanceOf(Schema\OpenAPI::class, $result);

        $this->assertMatchesRegularExpression('/(.*)Petstore(.*)/', $result->info->title);

        $this->assertInstanceOf(Schema\OpenAPI::class, $result);

        $Info = $result->info;

        $this->assertInstanceOf(Schema\Info::class, $Info);

        $Paths = $result->paths;

        $this->assertInstanceOf(Schema\Paths::class, $Paths);

        /** @var Schema\PathItem $PetsPath */
        $PetsPath = $Paths->getPatternedField('/pet');

        $this->assertInstanceOf(Schema\PathItem::class, $PetsPath);

        $GetOperation = $PetsPath->put;

        $this->assertInstanceOf(Schema\Operation::class, $GetOperation);

        $responses = $GetOperation->responses;

        $this->assertInstanceOf(Schema\Responses::class, $responses);

        /** @var Schema\Response $response200 */
        $response400 = $responses->getPatternedField('400');

        $this->assertInstanceOf(Schema\Response::class, $response400);
    }

    public function testEbayBuyMarketing(){
        $data = json_decode(file_get_contents(__DIR__ . '/Fixture/buy-marketing.json'), true);

        $parser = new OpenAPIParser();

        $result = $parser->parse($data);
        $this->assertInstanceOf(Schema\OpenAPI::class, $result);
    }
}
