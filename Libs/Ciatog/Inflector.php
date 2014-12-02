<?php
namespace Ciatog;

class Inflector
{
    public function humanise($str)
    {
        return ucwords(preg_replace('/[_-]+/', ' ', strtolower(trim($str))));
    }

    public function machinise($str)
    {
        return preg_replace('/[^A-Za-z0-9\-_]/', "", preg_replace('/[\s]+/', '_', strtolower(trim($str))));
    }

    public function dasherise($str)
    {
        return preg_replace('/[^A-Za-z0-9\-]/', "", preg_replace('/([\s]+|_)/', '-', strtolower(trim($str))));
    }
}
