<?php

namespace Lianmaymesi\Wireblade\Components\Partials;

use Illuminate\View\Component;

class DropdownLink extends Component
{
    public $title;

    public $route;

    public $active;

    public function __construct($title, $route, $active = '')
    {
        $this->title = $title;

        $this->route = $route;

        $this->active = $active;
    }

    public function render()
    {
        return view('wireblade::components.partials.dropdown-link');
    }
}
