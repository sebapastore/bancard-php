<?php

namespace SebaPastore\BancardPHP\Resources\Concerns;

use SebaPastore\BancardPHP\Contracts\KeyManagerContract;

trait Signable
{
    public function __construct(private readonly KeyManagerContract $keyManager)
    {}
}
