<?php

namespace app\core;

class Response
{
    public function set_status_code( int $code)
    {
        http_response_code($code);
    }

    public function redirect(string $url)
    {
        header("Location: " . $url);
    }
}