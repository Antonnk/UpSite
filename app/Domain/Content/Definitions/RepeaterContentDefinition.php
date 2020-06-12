<?php

namespace Domain\Content\Definitions;

use Domain\Content\Contracts\ContentDefinitionContract;
use Domain\Content\Models\Content;
use Illuminate\View\View;

class RepeaterContentDefinition implements ContentDefinitionContract
{
    public $name = "Repeater";

    public static function render(Content $content): string
    {
        return collect($content->body)->toJson();
    }

    public static function form(Content $content): View
    {
        return view('content.repeater-definition', compact('content'));
    }
}
