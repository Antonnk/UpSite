<?php

namespace Domain\Content\Contracts;

use Domain\Content\Definitions\TextContentDefinition;

interface ContentDefinitionContract
{
    const DEFINITIONS = [
      TextContentDefinition::class
    ];
}
