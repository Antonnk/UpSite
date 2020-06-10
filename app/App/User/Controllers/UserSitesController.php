<?php

namespace App\User\Controllers;

use App\User\Requests\StoreUserSiteRequest;
use App\User\ViewModels\UserSiteTableViewModel;
use App\User\ViewModels\UserSiteViewModel;
use Domain\Content\Actions\CreateContentAction;
use Domain\Content\Enums\ContentTypeEnum;
use Domain\Site\Actions\CreateSiteAction;
use Domain\Site\Actions\DeleteSiteAction;
use Domain\Site\Actions\UpdateSiteAction;
use Domain\Site\DTOs\SiteData;
use Domain\Site\Models\Site;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Support\Controller;

class UserSitesController extends Controller
{
    public function index()
    {
        return view('user.sites.index', new UserSiteTableViewModel(Site::where('user_id', auth()->id())->get()));
    }

    public function show(Site $site)
    {
        return view('user.sites.show', new UserSiteViewModel($site));
    }

    public function create()
    {
        return view('user.sites.create', new UserSiteViewModel);
    }

    public function store(StoreUserSiteRequest $request, CreateSiteAction $createSiteAction, CreateContentAction $createContentAction)
    {
        $site = $createSiteAction->execute(new SiteData([
            'name' => $request->input('name'),
            'slug' => $request->input('slug'),
            'theme' => $request->input('theme'),
            'user_id' => $request->user()->id
        ]));

        $createContentAction->execute(ContentTypeEnum::TEXT(), ['body' => 'Hello'], $site);

        return redirect()->action([self::class, 'show'], compact('site'));
    }

    public function edit(Site $site)
    {
        return view('user.sites.edit', new UserSiteViewModel($site));
    }

    public function update(Site $site, StoreUserSiteRequest $request, UpdateSiteAction $updateSiteAction)
    {
        $updateSiteAction->execute($site, new SiteData([
            'name' => $request->input('name'),
            'slug' => $request->input('slug'),
            'theme' => $request->input('theme'),
            'user_id' => $request->user()->id
        ]));

        return redirect()->action([self::class, 'show'], compact('site'));
    }

    public function delete(Site $site)
    {
        return view('user.sites.delete', compact('site'));
    }

    public function destroy(Site $site, Request $request, DeleteSiteAction $deleteSiteAction)
    {
        $this->validate($request, [
            'confirm' => ['required', Rule::in([$site->slug])]
        ]);

        $deleteSiteAction->execute($site);

        return redirect()->action([self::class, 'index']);
    }
}
