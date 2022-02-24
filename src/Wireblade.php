<?php

namespace Lianmaymesi\Wireblade;

class Wireblade
{
    public static function css()
    {
        return '<style>' . file_get_contents(__DIR__ . './../public/assets/css/wireblade.css') . '</style>';
    }

    public static function js()
    {
        return '<script defer>' . file_get_contents(__DIR__ . './../public/assets/js/wireblade.js') . '</script>';
    }
}
