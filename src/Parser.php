<?php

namespace OpenAPI;

use Exception;
use OpenAPI\Parser\OpenAPIParser;
use OpenAPI\Parser\ParserInterface;
use OpenAPI\Parser\SwaggerParser;
use OpenAPI\Schema\ObjectInterface;
use Symfony\Component\Yaml\Yaml;

final class Parser
{
    public static function parse(string $fileUri): ObjectInterface
    {
        $instance    = new self();
        $fileContent = $instance->parseFileContent($fileUri);
        $parser      = $instance->detectParser($fileContent);

        return $parser->parse($fileContent);

    }

    public function parseFileContent(string $fileUri): array
    {
        $fileExtension = pathinfo($fileUri, PATHINFO_EXTENSION);
        switch ($fileExtension) {
            case 'yml':
            case 'yaml':
                $result = Yaml::parseFile($fileUri);
                break;
            case 'json':
                $result = json_decode(file_get_contents($fileUri), true);
                break;
            default:
                $result = null;
        }

        if (null == $result) {
            throw new Exception('File content invalid');
        } else {
            return $result;
        }
    }

    public function detectParser(array $data): ParserInterface
    {
        if (key_exists('swagger', $data)) {
            return new SwaggerParser();
        } elseif (key_exists('openapi', $data)) {
            return new OpenAPIParser();
        } else {
            throw new Exception('Unkown OpenApi/Swagger specification version');
        }
    }
}
