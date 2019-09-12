<?php

namespace Fikrimi\Pipe\Enum;

class Provider extends Enum
{
    public const SSH = 0;
    public const GITLAB = 1;
    public const GITHUB = 2;
    public const BITBUCKET = 3;

    public static $names = [
        self::SSH       => 'SSH',
        self::GITLAB    => 'GitLab',
        self::GITHUB    => 'GitHub',
        self::BITBUCKET => 'BitBucket',
    ];

    public static function getRepositories()
    {
        $repo = self::$names;
        unset($repo[self::SSH]);

        return $repo;
    }
}
