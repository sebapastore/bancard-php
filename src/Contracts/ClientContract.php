<?php

namespace SebaPastore\BancardPHP\Contracts;

use SebaPastore\BancardPHP\Contracts\Resources\SingleBuyContract;

interface ClientContract
{
    public function singleBuy(): SingleBuyContract;
}
