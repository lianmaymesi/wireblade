<?php

namespace Lianmaymesi\Wireblade\Components\Partials;

use Illuminate\View\Component;

class NavHelp extends Component
{
    public $title;

    public $helpText;

    public function __construct($title, $helpText)
    {
        $this->title = $title;

        $this->helpText = $helpText;
    }

    public function render()
    {
        return view('wireblade::components.partials.nav-help');
    }
}
