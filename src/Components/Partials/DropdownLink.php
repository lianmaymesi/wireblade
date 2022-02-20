<?php

namespace Lianmaymesi\Wireblade\Components\Partials;

use Illuminate\View\Component;

class DropdownLink extends Component
{
    public $title;

    public $route;

    public function __construct($title, $route)
    {
        $this->title = $title;

        $this->route = $route;
    }

    public function render()
    {
        return view('wireblade::components.partials.dropdown-link');
    }
}
