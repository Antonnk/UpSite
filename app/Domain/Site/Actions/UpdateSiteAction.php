<?php


namespace Domain\Site\Actions;


use Domain\Site\DTOs\SiteData;
use Domain\Site\Models\Site;

class UpdateSiteAction
{
    public function execute(Site $site, SiteData $siteData): Site
    {
        $site->update($siteData->toArray());

        return $site->fresh();
    }
}
