<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class input extends Component
{
    public $type;
    public $label;
    public $name;
    /**
     * Create a new component instance.
     */
    public function __construct($type, $label, $name)
    {
        $this->type = $type;
        $this->label = $label;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
