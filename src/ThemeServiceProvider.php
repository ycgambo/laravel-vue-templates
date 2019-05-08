<?php
/**
 * Author: ycgambo
 * Date: 20/04/2019
 * Time: 12:06 PM
 */

namespace Yb\LVT;

use Illuminate\Support\ServiceProvider;
use Yb\LVT\Themes\VueAdmin\VueAdmin;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Finder\Finder;
use Illuminate\Support\Arr;

class ThemeServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishResources();
            return;
        }

        if (!config('app.debug')) {
            return;
        }

        $this->registerExampleRoutes();
        $this->registerExampleViews();
    }

    protected function publishResources()
    {
        $this->publishes([
            __DIR__.'/Themes/VueAdmin/public' => public_path(VueAdmin::RESOURCE_DIR)
        ], 'public');

        // copy examples for reference
        $this->publishes([
            $this->exampleBladePath() => resource_path(VueAdmin::RESOURCE_DIR)
        ]);
    }

    protected function registerExampleRoutes()
    {
        Route::prefix('lvt/VueAdmin/example')
            ->namespace('Yb\LVT\VueAdmin')
            ->group(function ($router) {
                $router->redirect('/', '/lvt/VueAdmin/example/dashboard');
                $router->any('/submit', 'ExampleController@checkSubmit');
                $router->post('/upload', 'ExampleController@fileUpload');
                $router->post('/img_upload', 'ExampleController@imgUpload');

                foreach (array_keys(File::index($this->exampleBladePath(), '*.blade.php')) as $key) {
                    $key = basename($key, '.blade.php');
                    $route = str_replace('.', '/', $key);
                    $router->view($route, "lvt::example.$key");
                }
            });
    }

    protected function registerExampleViews()
    {
        VueAdmin::create('lvt', 'lvt_example')
            ->inject('lvt::base')
            ->with('menus', $this->getExampleMenus())
            ->paginate()
            ->boot();
    }

    protected function getExampleMenus()
    {
        $sort = [
            'dashboard',
            'quick-tour',
            'basic.helper',
            'basic.notify',
            'basic.confirm',
            'basic.paginate',
            'basic.el-button',
            'basic.b-image',
            'basic.b-list',
            'layout.b-nav',
            'layout.b-tabs',
            'layout.b-collapse',
            'layout.b-jumbotron',
            'widget.el-tag',
            'widget.b-badge',
            'widget.progress',
            'form.fm-input',
            'form.fm-date',
            'form.fm-time',
            'form.fm-select',
            'form.fm-checkbox',
            'form.fm-radio',
            'form.fm-switch',
            'form.el-upload',
            'editor.text-editor',
            'editor.markdown.md-editor',
            'chart.chart-table',
            'media.b-embed',
        ];
        $icons = [
            'dashboard' => 'fa-tachometer',
            'quick-tour' => 'fa-plane',
            'chart' => 'fa-line-chart',
            'form' => 'fa-check-square-o',
            'notification' => 'fa-bell-o',
            'media' => 'fa-video-camera',
            'layout' => 'fa-object-group',
            'basic' => 'fa-cubes',
            'editor' => 'fa-pencil-square-o',
            'theme' => 'fa-tree',
            'widget' => 'fa-plug',
        ];
        return Menu::in($this->exampleBladePath())
            ->prefix('/lvt/VueAdmin/example/')
            ->icons($icons)
            ->get($sort);
    }

    protected function exampleBladePath()
    {
        return realpath(__DIR__ . '/Themes/VueAdmin/views/example');
    }
}
