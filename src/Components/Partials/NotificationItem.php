<?php

namespace Lianmaymesi\Wireblade\Components\Partials;

use Illuminate\View\Component;

class NotificationItem extends Component
{
    public $read;

    public function __construct($read = '')
    {
        $this->read = $read;
    }

    public function render()
    {
        return view('wireblade::components.partials.notification-item');
    }
}
