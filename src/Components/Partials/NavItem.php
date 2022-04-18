<?php

namespace Lianmaymesi\Wireblade\Components\Partials;

use Illuminate\View\Component;

class NavItem extends Component
{
    public $dropdown;

    public $title;

    public $route;

    public function __construct($dropdown = '', $title, $route = '')
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
