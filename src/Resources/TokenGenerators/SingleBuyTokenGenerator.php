<?php

namespace SebaPastore\BancardPHP\Resources\TokenGenerators;

use SebaPastore\BancardPHP\Contracts\KeyManagerContract;
use SebaPastore\BancardPHP\DTOs\SingleBuyDTO;
use SebaPastore\BancardPHP\Resources\Formatters\SingleBuyAmountFormatter;

class SingleBuyTokenGenerator
{
    public static function generate(KeyManagerContract $keyManager, SingleBuyDTO $data): string
    {
        return $keyManager->signData(
            $data->shopProcessId
            . SingleBuyAmountFormatter::format($data->amount)
            . $data->currency
        );
    }
}
