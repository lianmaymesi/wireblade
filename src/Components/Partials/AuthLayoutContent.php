<?php

namespace Lianmaymesi\Wireblade\Components\Partials;

use Illuminate\View\Component;

class AuthLayoutContent extends Component
{
    public $title;

    public $content;

    public $cta;

    public $ctaText;

    public function __construct($title = '', $content = '', $cta = '', $ctaText = '')
    {
        $this->title = $title;

        $this->content = $content;

        $this->cta = $cta;

        $this->ctaText = $ctaText;
    }

    public function render()
    {
        return view('wireblade::components.partials.auth-layout-content');
    }
}
