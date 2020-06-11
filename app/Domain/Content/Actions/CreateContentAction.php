<?php

namespace Domain\Content\Actions;

use Domain\Content\Contracts\ContentableContract;
use Domain\Content\Contracts\ContentDefinitionContract;
use Domain\Content\Models\Content;

class CreateContentAction
{
    public function execute(ContentDefinitionContract $definition, array $payload, ContentableContract $contentable): Content
    {
        return Content::create([
            'type' => get_class($definition),
            'body' => json_encode($payload),
            'contentable_id' => $contentable->getContentableId(),
            'contentable_type' => $contentable->getContentableType()
        ]);
    }
}
