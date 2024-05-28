<?php

namespace SebaPastore\BancardPHP\Resources\RequestSerializers;

use SebaPastore\BancardPHP\Contracts\KeyManagerContract;
use SebaPastore\BancardPHP\DTOs\SingleBuyDTO;
use SebaPastore\BancardPHP\Resources\Formatters\SingleBuyAmountFormatter;
use SebaPastore\BancardPHP\Resources\TokenGenerators\SingleBuyTokenGenerator;

class SingleBuyRequestSerializer
{
    public function __construct(private readonly KeyManagerContract $keyManager)
    {}

    public function format(SingleBuyDTO $data): array
    {
        return [
            'public_key' => $this->keyManager->getPublicKey(),
            'operation' => [
                'token' => SingleBuyTokenGenerator::generate($this->keyManager, $data),
                'shop_process_id' => $data->shopProcessId,
                'currency' => $data->currency,
                'amount' => SingleBuyAmountFormatter::format($data->amount),
                'additional_data' => $data->additionalData,
                'description' => $data->description,
                'return_url' => $data->returnUrl,
                'cancel_url' => $data->cancelUrl,
            ]
        ];
    }
}
