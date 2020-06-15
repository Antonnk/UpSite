<?php

namespace App\User\Controllers;

use Domain\Content\Actions\UpdateContentAction;
use Domain\Site\Models\Site;
use Illuminate\Http\Request;

class UpdateContentPayloadController
{
    public function __invoke(Site $site, Request $request, UpdateContentAction $updateContentAction)
    {
        $mergedPayload = collect($site->content->payload)->merge($request->input('payload'));
        $updateContentAction->execute($site->content, $mergedPayload->toArray(), $site);

        return redirect()->action([UserSitesController::class, 'show'], $site);
    }
}
