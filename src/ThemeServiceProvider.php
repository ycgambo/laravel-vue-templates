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

                foreach (array_keys($this->index($this->exampleBladePath(), '*.blade.php')) as $key) {
                    $key = basename($key, '.blade.php');
                    $route = str_replace('.', '/', $key);
                    $router->view($route, "lvt::example.$key");
                }
            });
    }

    protected function index($path, $name = '*', $sort = SORT_NATURAL)
    {
        $files = [];

        foreach (Finder::create()->files()->name($name)->in($path) as $file) {
            $directory = $this->getNestedDirectory($file, $path);

            $files[$directory.basename($file->getRealPath())] = $file->getRealPath();
        }

        if ($sort) {
            ksort($files, $sort);
        }

        return $files;
    }

    public function getNestedDirectory(\SplFileInfo $file, $path)
    {
        $directory = $file->getPath();

        if ($nested = trim(str_replace($path, '', $directory), DIRECTORY_SEPARATOR)) {
            $nested = str_replace(DIRECTORY_SEPARATOR, '.', $nested).'.';
        }

        return $nested;
    }

    protected function registerExampleViews()
    {
        VueAdmin::create('lvt', 'lvt_example')
            ->inject('lvt::base')
            ->with('menus', $this->getExampleMenus())
            ->boot();
    }

    protected function getExampleMenus()
    {
        // get menus
        $blades = [];
        foreach (array_keys($this->index($this->exampleBladePath(), '*.blade.php')) as $key) {
            $key = basename($key, '.blade.php');
            $route = str_replace('.', '/', $key);
            $blades[$key] = "/lvt/VueAdmin/example/$route";
        }

        $sort = [
            'dashboard',
            'quick-tour',
            'basic.load',
            'basic.url',
            'basic.store',
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
            'form.fm-text-editor',
            'form.fm-md-editor',
            'form.fm-el-upload',
            'chart.chart-table',
            'render.code-base',
            'media.b-embed',
            'theme.readme',
        ];
        $menus = [];
        foreach ($sort as $ordered_key) {
            if (Arr::has($blades, $ordered_key)) {
                Arr::set($menus, $ordered_key, false);
            }
        }
        foreach ($blades as $unordered_key => $route) {
            Arr::set($menus, $unordered_key, $route);
        }

        return $this->formatExampleMenus($menus);
    }

    protected function formatExampleMenus($menus)
    {
        $icons = [
            'dashboard' => ':fa-tachometer',
            'quick-tour' => ':fa-plane',
            'chart' => ':fa-line-chart',
            'form' => ':fa-pencil-square-o',
            'notification' => ':fa-bell-o',
            'media' => ':fa-video-camera',
            'layout' => ':fa-object-group',
            'basic' => ':fa-cubes',
            'render' => ':fa-paint-brush',
            'theme' => ':fa-tree',
            'widget' => ':fa-plug',
        ];
        $formated = [];
        foreach ($menus as $menu => $info) {
            if (empty($info)) continue;

            $menu_info = explode(':', $icons[$menu] ?? '');
            if (empty($menu_info[0]) || $menu_info[0] == "example.$menu") {
                $menu_info[0] = $menu;
            }
            if (empty($menu_info[1])) {
                $menu_info[1] = 'fa-link';
            }

            if (is_array($info)) {
                $formated[] = ['id' => $menu_info[0], 'name' => $menu_info[0], 'icon' => $menu_info[1], 'sub' => $this->formatExampleMenus($info)];
            } else {
                $formated[] = ['id' => $info, 'name' => $menu_info[0], 'url' => $info, 'icon' => $menu_info[1]];
            }
        }
        return $formated;
    }

    protected function exampleBladePath()
    {
        return realpath(__DIR__ . '/Themes/VueAdmin/views/example');
    }
}
