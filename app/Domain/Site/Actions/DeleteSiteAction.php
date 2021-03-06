<?php


namespace Domain\Site\Actions;


use Domain\Site\Models\Site;

class DeleteSiteAction
{
    public function execute(Site $site): bool
    {
        return $site->delete();
    }
}
