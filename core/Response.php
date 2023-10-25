<?php

namespace app\core;

class Response
{
    public function get_status_code( int $code)
    {
        http_response_code($code);
    }
}