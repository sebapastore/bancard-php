<?php

namespace SebaPastore\BancardPHP\Contracts;

interface HttpClientContract
{
    public function post(string $url, array $data);

    public function get(string $url, array $data);

}
