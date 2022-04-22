<?php

namespace Lianmaymesi\Wireblade\Components\Partials;

use Illuminate\View\Component;

class Navigation extends Component
{
    public $mainMenu, $subMenu;

    public function __construct($mainMenu = '', $subMenu = '')
    {
        $this->mainMenu = $mainMenu;

        $this->subMenu = $subMenu;
    }

    public function render()
    {
        return view('wireblade::components.partials.navigation');
    }
}
