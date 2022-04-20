<?php

namespace Lianmaymesi\Wireblade\Components\Form;

use Illuminate\View\Component;

class Select extends Component
{
    public $prefixLabel;

    public $suffixLabel;

    public $error;

    public $label;

    public $mandatory;

    public $toolTip;

    public $toolTipPosition;

    public function __construct($prefixLabel = '', $suffixLabel = '', $error = '', $label = '', $mandatory = '', $toolTip = '', $toolTipPosition = 'ttop')
    {
        $this->prefixLabel = $prefixLabel;

        $this->suffixLabel = $suffixLabel;

        $this->error = $error;

        $this->label = $label;

        $this->mandatory = $mandatory;

        $this->toolTip = $toolTip;

        $this->toolTipPosition = $toolTipPosition;
    }

    public function render()
    {
        return view('wireblade::components.form.select');
    }
}
