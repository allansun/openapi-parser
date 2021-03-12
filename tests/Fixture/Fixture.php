<?php


namespace Tests\OpenAPI\Fixture;


class Fixture
{

    private static string $basic = 'kubernetes-openapi.json';

    /**
     * Read the file content in current folder and returns its content
     *
     * @param $filename
     *
     * @return bool|string
     */
    private static function readfile($filename)
    {
        return file_get_contents(dirname(realpath(__FILE__)) . '/' . $filename);
    }

    public static function getBasic()
    {
        return json_decode(self::readfile(self::$basic), true);
    }
}