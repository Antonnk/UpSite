<?php

namespace Domain\Content\Actions;

use Domain\Content\Models\Content;
use Domain\Site\Models\Site;

class UpdateContentAction
{
    public function execute(Content $content, array $payload, Site $site): Content
    {
        $content->update([
            'payload' => $payload,
            'site_id' => $site->id
        ]);

        return $content;
    }
}
