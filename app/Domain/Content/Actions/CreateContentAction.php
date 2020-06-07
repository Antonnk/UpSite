<?php


namespace Domain\Content\Actions;


use Domain\Content\Enums\ContentTypeEnum;
use Domain\Content\Models\Content;
use Domain\Site\Models\Site;

class CreateContentAction
{
    public function execute(ContentTypeEnum $type, array $payload, Site $site): Content
    {
        return Content::create([
            'type' => $type,
            'payload' => json_encode($payload),
            'site_id' => $site->id
        ]);
    }
}
