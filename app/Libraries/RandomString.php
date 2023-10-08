<?php

namespace App\Libraries;

class RandomString
{
    public static function generateRandomString()
    {
        $randomInt = random_int(1000000, 9999999);
        return $randomInt;
    }
}
