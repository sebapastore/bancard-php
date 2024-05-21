<?php

namespace SebaPastore\BancardPHP;

use SebaPastore\BancardPHP\Contracts\ClientContract;
use SebaPastore\BancardPHP\Resources\SingleBuy;

class Client implements ClientContract
{
    public function singleBuy(): SingleBuy
    {
        return new SingleBuy();
    }
}
