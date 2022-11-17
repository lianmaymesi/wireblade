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

    public static function trixCss()
    {
        return '<link rel="stylesheet" href="https://unpkg.com/trix@2.0.0-beta.0/dist/trix.css"></link>';
    }

    public static function trixJs()
    {
        return '<script src="https://unpkg.com/trix@2.0.0-beta.0/dist/trix.umd.min.js"></script>';
    }
}
