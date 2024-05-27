<?php

namespace SebaPastore\BancardPHP;

use SebaPastore\BancardPHP\Contracts\ClientContract;
use SebaPastore\BancardPHP\Contracts\HttpClientContract;
use SebaPastore\BancardPHP\Contracts\KeyManagerContract;
use SebaPastore\BancardPHP\Resources\SingleBuy;

class Client implements ClientContract
{
    public function __construct(
        private readonly HttpClientContract $httpClient,
        private readonly KeyManagerContract $keyManager
    )
    {
    }

    public function singleBuy(): SingleBuy
    {
        return new SingleBuy($this->httpClient, $this->keyManager);
    }
}
