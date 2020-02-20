<?php
/**
 * Author: ycgambo
 * Date: 20/04/2019
 * Time: 8:44 AM
 */

namespace Yb\LVT;

use Illuminate\Pagination\AbstractPaginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\View;

abstract class Theme
{
    protected $from;
    protected $namespace;
    protected $alias;
    protected $with;
    protected $inject;

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

    public function inject($blade)
    {
        $this->inject = $blade;
        return $this;
    }

    /**
     * replace the default pagination links render template
     * @return $this
     */
    public function paginate()
    {
        AbstractPaginator::defaultSimpleView("$this->namespace::links.default");
        AbstractPaginator::defaultView("$this->namespace::links.default");
        return $this;
    }

    public function boot()
    {
        $viewName = "$this->namespace::layouts.$this->from.main";

        View::addNamespace($this->namespace, $this->viewPath());

        if (empty($this->inject)) {
            $this->component($viewName, $this->alias);
        } else {
            $this->component($viewName, "_{$this->alias}");
            $this->component($this->inject, $this->alias);
        }

        // 加载当前view的时候再创建绑定，防止同一个主题使用多次时变量被覆盖
        View::creator($viewName, function ($view) {
            $view->with('__theme', $this);
            foreach ($this->with as $key => $value) {
                $view->with($key, $value);
            }
        });

        return $this;
    }

    public function alias($path, $alias)
    {
        $this->component($path, $alias);
        return $this;
    }

    /**
     * compability for laravel framework version < 5.6
     * @param $path
     * @param null $alias
     */
    public function component($path, $alias = null)
    {
        Blade::directive($alias, function ($expression) use ($path) {
            return $expression
                ? "<?php \$__env->startComponent('{$path}', {$expression}); ?>"
                : "<?php \$__env->startComponent('{$path}'); ?>";
        });

        Blade::directive('end'.$alias, function ($expression) {
            return '<?php echo $__env->renderComponent(); ?>';
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