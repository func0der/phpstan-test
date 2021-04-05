<?php

declare(strict_types=1);

namespace Func0der\PhpStanTest;

use JMS\Serializer\DeserializationContext;
use JMS\Serializer\SerializationContext;
use JMS\Serializer\SerializerInterface;
use Some\Lib\SomeInterface;

class ClassExtendingSomeInterface implements SerializerInterface, SomeInterface
{
    public static function create(): self
    {
        return new self();
    }

    public function serialize(
        $data,
        string $format,
        ?SerializationContext $context = null,
        ?string $type = null
    ): string {
        return '';
    }

    public function deserialize(string $data, string $type, string $format, ?DeserializationContext $context = null)
    {
        return new $type();
    }

}
