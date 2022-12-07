<?php

namespace Lianmaymesi\Wireblade\Components\Table;

use Illuminate\View\Component;

class Heading extends Component
{
    public $mobileOnly;
    public $fullWidth;
    public $sortable;
    public $direction;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($mobileOnly = null, $fullWidth = null, $sortable = null, $direction = null)
    {
        $this->mobileOnly = $mobileOnly;
        $this->fullWidth = $fullWidth;
        $this->sortable = $sortable;
        $this->direction = $direction;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view("wireblade::components.table.heading");
    }
}
