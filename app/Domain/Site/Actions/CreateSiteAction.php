<?php


namespace Domain\Site\Actions;


use Domain\Site\DTOs\SiteData;
use Domain\Site\Models\Site;

class CreateSiteAction
{
    public function execute(SiteData $siteData): Site
    {
        return Site::create([
            'name' => $siteData->name,
            'slug' => $siteData->slug,
            'theme' => $siteData->theme,
            'user_id' => $siteData->user_id,
        ]);
    }
}
