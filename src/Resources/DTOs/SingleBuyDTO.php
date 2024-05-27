<?php

namespace SebaPastore\BancardPHP\Resources\DTOs;

class SingleBuyDTO
{
    public function __construct(
        public readonly int $amount,
        public readonly int $shopProcessId,
        public readonly string $description,
        public readonly string $returnUrl,
        public readonly string|null $additionalData = null,
        public readonly string $currency = 'PYG',
        public readonly string|null $cancelUrl = null
    )
    {
    }

}
