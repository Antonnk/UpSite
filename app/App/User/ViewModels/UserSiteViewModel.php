<?php


namespace App\User\ViewModels;


use Domain\Site\Models\Site;
use Spatie\ViewModels\ViewModel;

class UserSiteViewModel extends ViewModel
{
    private $site;

    public function __construct(Site $site = null)
    {
        $this->site = $site ?? new Site();
    }

    public function site(): Site
    {
        return $this->site;
    }
}
