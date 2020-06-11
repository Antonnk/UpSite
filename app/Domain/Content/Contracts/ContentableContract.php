<?php

namespace Domain\Content\Contracts;

interface ContentableContract
{
    public function getContentableId(): int;

    public function getContentableType(): string ;
}
