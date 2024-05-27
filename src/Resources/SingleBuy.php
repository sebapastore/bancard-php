<?php

namespace SebaPastore\BancardPHP\Resources;

use SebaPastore\BancardPHP\Contracts\Resources\SingleBuyContract;
use SebaPastore\BancardPHP\DTOs\SingleBuyDTO;
use SebaPastore\BancardPHP\Resources\Concerns\Signable;

class SingleBuy implements SingleBuyContract
{
    use Signable;

    public function create(SingleBuyDTO $data)
    {

    }

}
