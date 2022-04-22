<?php

namespace Lianmaymesi\Wireblade\Components\Layouts;

use Illuminate\View\Component;

class AppLayout extends Component
{
    public $title, $mainMenu, $subMenu;

    public function __construct($title = '', $mainMenu = '', $subMenu = '')
    {
        $this->title = $title;

        $this->mainMenu = $mainMenu;

        $this->subMenu = $subMenu;
    }

    public function render()
    {
        return view('wireblade::components.layouts.app');
    }
}
