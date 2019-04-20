<?php
/**
 * Author: ycgambo
 * Date: 20/04/2019
 * Time: 8:52 AM
 */

namespace LVT\Themes\VueAdmin;

class VueAdmin extends \LVT\Theme
{
    const RESOURCE_DIR = '/laravel-vue-templates';

    public function viewPath()
    {
        return __DIR__;
    }

    public function view($path)
    {
        return "$this->namespace::$path";
    }

    public function mix($path)
    {
        return self::RESOURCE_DIR . $path;
    }
}