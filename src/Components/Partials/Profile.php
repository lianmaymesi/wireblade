<?php

namespace Lianmaymesi\Wireblade\Components\Partials;

use Illuminate\View\Component;

class Profile extends Component
{
    public $name;

    public $logout;

    public $image;

    public $linkSettings;

    public function __construct($name, $logout, $image, $linkSettings = '')
    {
        $this->name = $name;

        $this->logout = $logout;

        $this->image = $image;

        $this->linkSettings = $linkSettings;
    }

    public function render()
    {
        return view('wireblade::components.partials.profile');
    }
}
