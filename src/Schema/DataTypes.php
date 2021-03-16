<?php


namespace OpenAPI\Schema;


use Exception;

final class DataTypes implements DataTypesInterface
{
    const INTEGER = 'integer';
    const LONG = 'long';
    const FLOAT = 'float';
    const DOUBLE = 'double';
    const STRING = 'string';
    const BYTE = 'byte';
    const BINARY = 'binary';
    const BOOLEAN = 'boolean';
    const DATE = 'date';
    const DATETIME = 'dateTime';
    const PASSWORD = 'password';

    const NUMBER = 'number';
    const INT32 = 'int32';
    const INT64 = 'int64';
    const DATE_TIME = 'date-time';

    const DATATYPES = [
        self::INTEGER  => self::INTEGER,
        self::LONG     => self::FLOAT,
        self::FLOAT    => self::FLOAT,
        self::DOUBLE   => self::FLOAT,
        self::STRING   => self::STRING,
        self::BYTE     => self::STRING,
        self::BINARY   => self::STRING,
        self::BOOLEAN  => self::BOOLEAN,
        self::DATE     => self::STRING,
        self::DATETIME => self::STRING,
        self::PASSWORD => self::STRING,

        self::NUMBER    => self::FLOAT,
        self::INT32     => self::INTEGER,
        self::INT64     => self::INTEGER,
        self::DATE_TIME => self::STRING,

    ];

    static public function getPHPDataType(string $dataType): string
    {
        if (!array_key_exists($dataType, self::DATATYPES)) {
            throw new Exception(sprintf("Unrecongnized data type '%s'", $dataType));
        }

        // On 32bit systems, store int64 as string
        if (self::INT64 == $dataType && PHP_INT_SIZE < 8) {
            return self::STRING;
        }

        return self::DATATYPES[$dataType];
    }


}