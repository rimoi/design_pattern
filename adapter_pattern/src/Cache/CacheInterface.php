<?php

namespace App\Cache;

interface CacheInterface
{
    public function get(string $key);

    public function has(string $key);

    public function set(string $key, string $value, $expiration = 3600);
}