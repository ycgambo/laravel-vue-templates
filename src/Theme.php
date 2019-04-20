<?php
/**
 * Author: ycgambo
 * Date: 20/04/2019
 * Time: 8:44 AM
 */

namespace LVT;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\View;

abstract class Theme
{
    protected $from;
    protected $namespace;
    protected $alias;
    protected $with;

    public function __construct($namespace, $alias, $from)
    {
        $this->namespace = $namespace;
        $this->from = $from;
        $this->alias = $alias;
    }

    public static function create($namespace, $alias, $from = 'main')
    {
        return new static($namespace, $alias, $from);
    }

    public function with($key, $value = null)
    {
        $this->with[$key] = $value;
        return $this;
    }

    public function boot()
    {
        $viewName = $this->namespace . View::HINT_PATH_DELIMITER . $this->from;

        View::addNamespace($this->namespace, $this->viewPath());
        Blade::component($viewName, $this->alias);

        // 加载当前view的时候再创建绑定，防止同一个主题使用多次时变量被覆盖
        View::creator($viewName, function ($view) {
            foreach ($this->with as $key => $value) {
                $view::with($key, $value);
            }
        });
    }

    public function viewPath()
    {
        // return the directory path to find view files
    }

    public function view($path)
    {
        // return the path of a specific view file
    }

    public function mix($path)
    {
        // return the path of a specific js/css... file
    }
}