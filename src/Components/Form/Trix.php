<?php

namespace Lianmaymesi\Wireblade\Components\Form;

use Illuminate\Support\Str;
use Illuminate\View\Component;

class Trix extends Component
{
    public $label;

    public $mandatory;

    public $error;

    public $id;

    public $editorHeight;

    public $name;

    public $toolTip;

    public $helpText;

    public $toolTipPosition;

    public $hideAttachment;

    public function __construct(
        $label = "",
        $mandatory = "",
        $error = "",
        $editorHeight = null,
        $name = "",
        $toolTip = "",
        $toolTipPosition = "ttop",
        $helpText = "",
        $hideAttachment = ""
    ) {
        $this->label = $label;

        $this->mandatory = $mandatory;

        $this->error = $error;

        $this->id = Str::random(8);

        $this->editorHeight = $editorHeight;

        $this->name = $name;

        $this->toolTip = $toolTip;

        $this->toolTipPosition = $toolTipPosition;

        $this->helpText = $helpText;

        $this->hideAttachment = $hideAttachment;
    }

    public function render()
    {
        return view("wireblade::components.form.trix");
    }
}
