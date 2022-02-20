<?php

namespace Lianmaymesi\Wireblade\Components\Partials;

use Illuminate\View\Component;

class NavLink extends Component
{
    public $title;

    public $route;

    public $dropdown;

    public function __construct($title, $route, $dropdown = '')
    {
        $this->title = $title;

        $this->route = $route;

        $this->dropdown = $dropdown;
    }

    public function render()
    {
        return view('wireblade::components.partials.nav-link');
    }
}
