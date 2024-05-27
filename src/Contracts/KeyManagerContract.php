<?php

namespace SebaPastore\BancardPHP\Contracts;

interface KeyManagerContract
{
    public function getPublicKey(): string;

    public function getSecretKey(): string;

    public function signData(string $data): string;
}
