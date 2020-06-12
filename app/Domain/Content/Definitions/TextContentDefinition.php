<?php

namespace Domain\Content\Definitions;

use Domain\Content\Contracts\ContentDefinitionContract;
use Domain\Content\Models\Content;
use Illuminate\View\View;

class TextContentDefinition implements ContentDefinitionContract
{
    public $name = 'Text';

    public static function render(Content $content): string
    {
        return $content->body[0] ?? '';
    }

    public static function form(Content $content): View
    {
        return view('content.text-definition', compact('content'));
    }
}
