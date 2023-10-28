<?php

abstract class Enums
{
    private static $constants = array();

    private static function getConstants()
    {
        if (empty(self::$constants)) {
            self::$constants = array();
        }

        $calledClass = get_called_class();

        if (!array_key_exists($calledClass, self::$constants)) {
            $reflection = new \ReflectionClass($calledClass);
            self::$constants[$calledClass] = $reflection->getConstants();
        }

        return self::$constants[$calledClass];
    }

    public static function isValidName($name, $strict = false)
    {
        $constants = self::getConstants();
        return $strict
            ? array_key_exists($name, $constants)
            : in_array(strtolower($name), array_map('strtolower', array_keys($constants)));
    }

    public static function isValidValue($value, $strict = true)
    {
        return in_array($value, array_values(self::getConstants()), $strict);
    }
}
