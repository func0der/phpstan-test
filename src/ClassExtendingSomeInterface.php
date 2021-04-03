<?php

declare(strict_types=1);

namespace Func0der\PhpStanTest;

use Some\Lib\SomeInterface;

class ClassExtendingSomeInterface implements SomeInterface
{
    public static function create(): self
    {
        return new self();
    }
}
