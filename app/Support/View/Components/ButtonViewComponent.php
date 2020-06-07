<?php


namespace Support\View\Components;


use Illuminate\View\Component;
use Illuminate\View\View;

class ButtonViewComponent extends Component
{

    public $href;

    public function __construct(string $href = '')
    {
        $this->href = $href;
    }

    public function render(): View
    {
        return view('components.button');
    }
}
