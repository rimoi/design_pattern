<?php


namespace App\Cache;


class Cache implements CacheInterface
{
    public function get(string $key)
    {
        return false;
    }
    public function has(string $key)
    {
        return false;
    }
    public function set(string $key, string $value, $expiration = 3600)
    {
        return false;
    }
}