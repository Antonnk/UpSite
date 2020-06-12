<?php

namespace Domain\Content\Actions;

use Domain\Content\Contracts\ContentableContract;
use Domain\Content\Contracts\ContentDefinitionContract;
use Domain\Content\Models\Content;

class CreateContentAction
{
    public function execute(ContentDefinitionContract $definition, array $meta, array $body, ContentableContract $contentable): Content
    {
        return Content::create([
            'type' => get_class($definition),
            'meta' => $meta,
            'body' => $body,
            'contentable_id' => $contentable->getContentableId(),
            'contentable_type' => $contentable->getContentableType()
        ]);
    }
}
