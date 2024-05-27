<?php

namespace SebaPastore\BancardPHP\Resources\Formatters;

class SingleBuyAmountFormatter
{
    public static function format(int $amount): string
    {
        return number_format($amount, 2, '.', '');
    }
}
