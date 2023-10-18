<?php

namespace App\Libraries;

class RandomString
{
    public static function generateRandomString()
    {
        $randomInt = random_int(1000000, 9999999);
        return $randomInt;
    }
    public static function RnadomToken($length = 22)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $randomString;
    }
}
