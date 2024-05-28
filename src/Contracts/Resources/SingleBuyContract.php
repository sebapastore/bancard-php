<?php

namespace SebaPastore\BancardPHP\Contracts\Resources;

use SebaPastore\BancardPHP\Contracts\ResponseContract;
use SebaPastore\BancardPHP\DTOs\SingleBuyDTO;

interface SingleBuyContract
{
    public function create(SingleBuyDTO $data): ResponseContract;
}
