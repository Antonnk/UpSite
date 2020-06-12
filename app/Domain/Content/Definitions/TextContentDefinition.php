<?php

namespace Domain\Content\Definitions;

use Domain\Content\Contracts\ContentDefinitionContract;
use Domain\Content\Models\Content;

class TextContentDefinition implements ContentDefinitionContract
{
    public $name = 'Text';

    public static function render(Content $content): string
    {
        return $content->body[0] ?? '';
    }
}