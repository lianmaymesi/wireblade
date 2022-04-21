<?php

namespace Lianmaymesi\Wireblade\Components\Table;

use Illuminate\View\Component;

class Row extends Component
{
    public $mobileOnly;

    public $fullWidth;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($mobileOnly = '', $fullWidth = '')
    {
        $this->mobileOnly = $mobileOnly;

        $this->fullWidth = $fullWidth;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('wireblade::components.table.row');
    }
}
