<?php
namespace Ciatog;

class Inflector
{
    /**
     * Takes a string, trims and lowercases it and finally replaces all occurances
     * of underscores and dashes with spaces.
     *
     * @param string $str
     *
     * @return string Returns the humanised version of string parameter
     */
    public function humanise($str)
    {
        return ucwords(preg_replace('/[_-]+/', ' ', strtolower(trim($str))));
    }

    /**
    * Takes a string, trims and lowercases it, replaces all spaces with underscores
    * and finally removes all characters that are not alphanumeric, dashes or underscores.
    *
    * @param string $str
    *
    * @return string Returns the machinised version of string parameter
    */
    public function machinise($str)
    {
        return preg_replace('/[^A-Za-z0-9\-_]/', "", preg_replace('/[\s]+/', '_', strtolower(trim($str))));
    }

    /**
    * Takes a string, trims and lowercases it, replaces all spaces and underscores with
    * dashes and finally removes all characters that are not alphanumeric or dashes.
    *
    * @param string $str
    *
    * @return string Returns the machinised version of string parameter
    */
    public function dasherise($str)
    {
        return preg_replace('/[^A-Za-z0-9\-]/', "", preg_replace('/([\s]+|_)/', '-', strtolower(trim($str))));
    }
}
