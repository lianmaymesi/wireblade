<?php

namespace Lianmaymesi\Wireblade\Components\Partials;

use Illuminate\View\Component;

class NavItem extends Component
{
    public $submenu;

    public $dropdown;

    public $title;

    public $route;

    public function __construct($submenu = '', $dropdown = '', $title, $route = '')
    {
        $this->submenu = $submenu;

        $this->dropdown = $dropdown;

        $this->title = $title;

        $this->route = $route;
    }

    public function render()
    {
        return view('wireblade::components.partials.nav-item');
    }
}
