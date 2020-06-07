<?php


namespace App\User\ViewModels;


use App\User\Controllers\UserSitesController;
use Domain\Site\Models\Site;
use Spatie\ViewModels\ViewModel;
use Support\View\Blueprints\ColumnBlueprint;
use Support\View\Blueprints\TableBlueprint;

class UserSiteTableViewModel extends ViewModel
{
    public $sites;

    public $tableBlueprint;

    public function __construct($sites)
    {
        $this->sites = $sites;

        $this->tableBlueprint = (new TableBlueprint())
            ->setColumns($this->columns())
            ->setData($this->sites);
    }

    public function columns()
    {
        return [
            (new ColumnBlueprint('name'))->setLink(function (Site $site) {
                return action([UserSitesController::class, 'show'], compact('site'));
            }),
            (new ColumnBlueprint('slug'))->setType(ColumnBlueprint::TYPE_MONOTYPE),
            (new ColumnBlueprint('created_at'))
                ->setTitle('Created')
                ->setType(ColumnBlueprint::TYPE_DATETIME),
        ];
    }
}
