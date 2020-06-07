<?php


namespace Support\View\Components;


use Illuminate\Contracts\Support\Arrayable;
use Illuminate\View\Component;
use Illuminate\View\View;

class DescriptionListViewComponent extends Component
{
    public $item;

    public $title;

    public $description;

    public function __construct(Arrayable $item, string $title = '', string $description = '')
    {
        $this->item = $item;
        $this->title = $title ?? null;
        $this->description = $description ?? null;
    }

    public function render(): View
    {
        return view('components.description-list');
    }
}
