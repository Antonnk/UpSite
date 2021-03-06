<?php


namespace Domain\Content\Actions;


use Domain\Content\Models\Content;
use Domain\Site\Models\Site;

class CreateContentAction
{
    public function execute(array $payload, Site $site): Content
    {
        return Content::create([
            'payload' => $payload,
            'site_id' => $site->id
        ]);
    }
}
