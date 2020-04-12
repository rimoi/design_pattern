<?php

namespace App\Cache;

use Doctrine\Common\Cache\Cache;

class DoctrineAdapter implements CacheInterface
{
    private $cache;

    public function __construct(Cache $cache)
    {
        $this->cache = $cache;
    }

    public function get(string $key)
    {
        return $this->cache->fetch($key);
    }

    public function has(string $key)
    {
        return $this->cache->contains($key);
    }

    public function set(string $key, string $value, $expiration = 3600)
    {
        $this->cache->save($key, $value, $expiration);
    }
}