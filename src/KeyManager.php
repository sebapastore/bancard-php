<?php

namespace SebaPastore\BancardPHP;

use SebaPastore\BancardPHP\Contracts\KeyManagerContract;

class KeyManager implements KeyManagerContract
{

    public function __construct(private readonly string $publicKey, private readonly string $secretKey)
    {}

    public function getPublicKey(): string
    {
        return $this->publicKey;
    }

    public function getSecretKey(): string
    {
        return $this->secretKey;
    }

    public function signData(string $data): string
    {
        return md5($this->secretKey . $data);
    }
}
