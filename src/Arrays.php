<?php

namespace GW\Value;

final class Arrays
{
    private function __construct()
    {
        // prohibits creation objects of this class
    }

    public static function create(array $array = []): ArrayValue
    {
        return new PlainArray($array);
    }

    public static function createFromValues(...$array): ArrayValue
    {
        return new PlainArray(...$array);
    }

    public static function assoc(array $array = []): AssocValue
    {
        return new AssocArray($array);
    }

    public static function strings(array $strings = []): StringsValue
    {
        return new StringsArray(self::create($strings));
    }
}