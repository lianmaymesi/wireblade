<?php

namespace Lianmaymesi\Wireblade\Components\Layouts;

use Illuminate\View\Component;

class AppLayout extends Component
{
    public $title;

    public function __construct($title = '')
    {
        $this->title = $title;
    }

    public function render()
    {
        return view('wireblade::components.layouts.app');
    }
}
