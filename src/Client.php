<?php

namespace SebaPastore\BancardPHP;

use SebaPastore\BancardPHP\Contracts\ClientContract;
use SebaPastore\BancardPHP\Contracts\KeyManagerContract;
use SebaPastore\BancardPHP\Resources\SingleBuy;

class Client implements ClientContract
{
    public function __construct(private readonly KeyManagerContract $keyManager)
    {
    }

    public function singleBuy(): SingleBuy
    {
        return new SingleBuy($this->keyManager);
    }
}
