<?php

namespace Tests\OpenAPI;

use OpenAPI\Schema\V2 as Schema;
use OpenAPI\SwaggerParser;
use PHPUnit\Framework\TestCase;
use Tests\OpenAPI\Fixture\Fixture;

class SwaggerParserTest extends TestCase
{

    public function testBasic()
    {
        $json = Fixture::getBasic();

        $Parser = new SwaggerParser();

        $Swagger = $Parser->parse($json);

//        ini_set('xdebug.var_display_max_depth', 10);
//        var_dump($Swagger);
        $this->assertInstanceOf(Schema\SwaggerObject::class, $Swagger);

//        $InfoObject = $Swagger->info;
//
//        $this->assertInstanceOf(Schema\InfoObject::class, $InfoObject);
//
//        $PathsObject = $Swagger->paths;
//
//        $this->assertInstanceOf(Schema\PathsObject::class, $PathsObject);
//
//        /** @var Schema\PathItemObject $PetsPath */
//        $PetsPath = $PathsObject->getPatternedField('/pets');
//
//        $this->assertInstanceOf(Schema\PathItemObject::class,$PetsPath);
//
//        $GetOperation = $PetsPath->get;
//
//        $this->assertInstanceOf(Schema\OperationObject::class,$GetOperation);
//
//        $responses = $GetOperation->responses;
//
//        $this->assertInstanceOf(Schema\ResponsesObject::class,$responses);
//
//        /** @var Schema\ResponseObject $response200 */
//        $response200 = $responses->getPatternedField('200');
//
//        $this->assertInstanceOf(Schema\ResponseObject::class,$response200);


    }
}
