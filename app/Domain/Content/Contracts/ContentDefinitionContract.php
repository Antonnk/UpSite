<?php

namespace Domain\Content\Contracts;

use Domain\Content\Models\Content;
use Illuminate\View\View;
use Domain\Content\Definitions\{TextContentDefinition, RepeaterContentDefinition};

interface ContentDefinitionContract
{
    const DEFINITIONS = [
        TextContentDefinition::class,
        RepeaterContentDefinition::class
    ];

    public static function render(Content $content): string;

    //public static function form(): View;
}
