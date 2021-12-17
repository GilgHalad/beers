<?php
namespace App\Model\Exception\Food;

Use Exception;

class FoodNotSend extends Exception
{
    public static function throwException()
    {
        throw new self("Food not send");
    }
}
?>