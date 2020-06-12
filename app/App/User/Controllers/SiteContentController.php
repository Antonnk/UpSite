<?php

namespace App\User\Controllers;

use Domain\Content\Actions\CreateContentAction;
use Domain\Site\Models\Site;
use Illuminate\Http\Request;
use Support\Controller;

class SiteContentController extends Controller
{
    public function store(Request $request, Site $site, CreateContentAction $createContentAction)
    {
        $createContentAction->execute(
            app($request->input('type')),
            $request->input('meta'),
            [$request->input('body')],
            $site
        );

        return redirect()->action([UserSitesController::class, 'show'], $site);
    }
}
