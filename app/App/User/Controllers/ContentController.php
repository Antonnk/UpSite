<?php

namespace App\User\Controllers;

use Domain\Content\Actions\CreateContentAction;
use Domain\Content\Enums\ContentTypeEnum;
use Illuminate\Http\Request;
use Support\Controller;

class ContentController extends Controller
{
    public function store(Request $request, CreateContentAction $createContentAction)
    {
        $createContentAction->execute(
            ContentTypeEnum::{$request->input('type')}(),
            [$request->input('body')],
            $request->input('contentable_type')::findOrFail($request->input('contentable_id'))
        );
    }
}
