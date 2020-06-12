<?php

namespace Domain\Content\Definitions;

use Domain\Content\Contracts\ContentDefinitionContract;
use Domain\Content\Models\Content;

class RepeaterContentDefinition implements ContentDefinitionContract
{
    public $name = "Repeater";

    public static function render(Content $content): string
    {
        return collect($content->body)->toJson();
    }
}
