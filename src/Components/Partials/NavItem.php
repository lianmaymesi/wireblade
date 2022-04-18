<?php

namespace Lianmaymesi\Wireblade\Components\Partials;

use Illuminate\View\Component;

class NavItem extends Component
{
    public $dropdown;

    public $title;

    public $route;

    public $submenu;

    public function __construct($title, $route = '', $submenu = '', $dropdown = '')
    {
        $this->dropdown = $dropdown;

        $this->title = $title;

        $this->route = $route;

        $this->submenu = $submenu;
    }

    public function render()
    {
        return view('wireblade::components.partials.nav-item');
    }
}
