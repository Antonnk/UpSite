<?php


namespace Support\View\Components;


use Illuminate\View\Component;
use Illuminate\View\View;
use Support\View\Blueprints\TableBlueprint;

class TableViewComponent extends Component
{
    public $blueprint;

    public function __construct(TableBlueprint $blueprint)
    {
        $this->blueprint = $blueprint;
    }

    public function render(): View
    {
        return view('components.table');
    }
}
