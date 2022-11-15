<?php

namespace Framework\Model;

class FileManager
{
    public function __construct()
    {
        echo 1;    
    }

    public function getBaseName(string $path, string $suffix = ""): string
    {
        return basename($path, $suffix);
    }

    public function setFileGroup(string $filename, string|int $group): bool
    {
        return chgrp($filename, $group);
    }

    public function setFileMode(string $filename, int $permissions): bool
    {
        return chmod($filename, $permissions);
    }

    public function setFileOwner(string $filename, string|int $user): bool
    {
        return chown($filename, $user);
    }

    public function clearFileStatCache(bool $clear_realpath_cache = false, string $filename = ""): void
    {
        clearstatcache($clear_realpath_cache, $filename);
    }
    
    public function copy(string $from, string $to, $context = null): bool
    {
        return copy($from, $to, $context);
    }


}