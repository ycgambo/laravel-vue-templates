<?php
/**
 * Author: ycgambo
 * Date: 20/04/2019
 * Time: 12:06 PM
 */

namespace LVT;

use Illuminate\Support\ServiceProvider;
use LVT\Themes\VueAdmin\VueAdmin;

class ThemeServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'Themes/VueAdmin/public'
            ], public_path(VueAdmin::RESOURCE_DIR));
        }
    }

}