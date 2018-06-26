<?php

namespace Tests\OpenAPI;

use Doctrine\Common\Annotations\AnnotationReader;
use OpenAPI\Parser\JsonParser;
use OpenAPI\Schema\V2\SwaggerObject;
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

    public function testAnnotation()
    {
        $AnnotationReader = new AnnotationReader();
        $OpenAPI          = new SwaggerObject();


    }
}
