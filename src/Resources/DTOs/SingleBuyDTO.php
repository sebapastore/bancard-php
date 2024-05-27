<?php

namespace SebaPastore\BancardPHP\Resources\DTOs;

class SingleBuyDTO
{
    public function __construct(
        readonly int $amount,
        readonly int $shopProcessId,
        readonly string $description,
        readonly string $returnUrl,
        readonly string|null $additionalData = null,
        readonly string $currency = 'PYG',
        readonly string|null $cancelUrl = null
    )
    {
    }

}
