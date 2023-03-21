<?php

declare(strict_types=1);

namespace MichaelPetri\SymfonyFileWatcher\Domain\Event;

/** @psalm-immutable */
final class FileCreated
{
    /** @psalm-param non-empty-string $path */
    public function __construct(
        public readonly string $path
    ) {
    }
}
