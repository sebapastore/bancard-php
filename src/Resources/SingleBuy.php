<?php

namespace SebaPastore\BancardPHP\Resources;

use SebaPastore\BancardPHP\Contracts\HttpClientContract;
use SebaPastore\BancardPHP\Contracts\KeyManagerContract;
use SebaPastore\BancardPHP\Resources\DTOs\SingleBuyDTO;
use SebaPastore\BancardPHP\Resources\Serializers\SingleBuyRequestSerializer;

class SingleBuy
{
    public function __construct(
        private readonly HttpClientContract $httpClient,
        private readonly KeyManagerContract $keyManagerContract
    ){}

    public function create(SingleBuyDTO $data)
    {
        $this->httpClient->post(
            '',
            (new SingleBuyRequestSerializer($this->keyManagerContract))->format($data)
        );
    }

}
