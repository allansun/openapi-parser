<?php


namespace OpenAPI\Schema;


interface DataTypesInterface
{
    /**
     * Return according PHP data type from given OpenAPI data type
     *
     * @param string $dataType
     *
     * @return string
     */
    static public function getPHPDataType(string $dataType);
}