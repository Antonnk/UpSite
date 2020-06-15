<?php


namespace Support\View\Components;


use Illuminate\View\Component;
use Illuminate\View\View;

class InputViewComponent extends Component
{
    /** @var string */
    public $label;

    /** @var string */
    public $name;

    /** @var string|null */
    public $description;

    public function __construct(string $name, string $label, ?string $description = null)
    {
        $this->label = $label;
        $this->name = $name;
        $this->description = $description;
    }

    public function render(): View
    {
        return view('components.input');
    }
}
