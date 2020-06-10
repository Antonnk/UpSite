<?php

namespace App\Edge\Controllers;

use Domain\Site\Models\Site;
use Support\Controller;

class SiteController extends Controller
{
    public function show(Site $site)
    {
        return view("edge.themes.$site->theme.index", compact('site'));
    }
}
