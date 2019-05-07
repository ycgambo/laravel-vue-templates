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

class Menu
{
    protected $path;
    protected $url_prefix = '';
    protected $adds = [];
    protected $ignores = [];
    protected $names = [];
    protected $icons = [];
    protected $urls = [];

    public function __construct($path)
    {
        $this->path = $path;
    }

    /**
     * @param $path ['id']
     * @return Menu
     */
    public static function in($path)
    {
        return new static($path);
    }

    /**
     * set the prefix of menu url
     * @param $url_prefix
     * @return $this
     */
    public function prefix($url_prefix)
    {
        $this->url_prefix = rtrim($url_prefix, '/');
        return $this;
    }

    /**
     * add custom ids
     * @param $ids ['id']
     * @return $this
     */
    public function adds($ids)
    {
        $this->adds = array_values($ids);
        return $this;
    }

    /**
     * igore menu item in ids
     * @param $ids ['id']
     * @return $this
     */
    public function ignores($ids)
    {
        $this->ignores = array_values($ids);
        return $this;
    }

    /**
     * set the name of menus
     * @param array $names ['id' => 'name']
     * @return $this
     */
    public function names(array $names)
    {
        $this->names = $names;
        return $this;
    }

    /**
     * set the icon of menus
     * @param array $icons ['id' => 'icon']
     * @return $this
     */
    public function icons(array $icons)
    {
        $this->icons = $icons;
        return $this;
    }

    /**
     * set the url of menus
     * @param array $urls ['id' => 'url']
     * @return $this
     */
    public function urls(array $urls)
    {
        $this->urls = $urls;
        return $this;
    }

    /**
     * get generated menus
     * @param array $sort ['id']
     * @return array
     */
    public function get($sort = [])
    {
        // index files and register urls
        foreach (array_keys(File::index($this->path, '*.blade.php')) as $key) {
            $key = basename($key, '.blade.php');

            if (in_array($key, $this->ignores) || isset($this->urls[$key])) continue;

            $route = str_replace('.', '/', $key);
            $this->urls[$key] = "{$this->url_prefix}/$route";
        }
        $this->urls += array_fill_keys($this->adds, '#');

        // sort menus
        $menus = [];
        foreach ($sort as $ordered_key) {
            if (Arr::has($this->urls, $ordered_key)) {
                Arr::set($menus, $ordered_key, false);
            }
        }
        foreach ($this->urls as $unordered_key => $url) {
            Arr::set($menus, $unordered_key, $unordered_key);
        }

        return $this->buildMenus($menus);
    }

    protected function buildMenus($menus)
    {
        $formated = [];
        foreach ($menus as $menu => $id) {
            if (in_array($menu, $this->ignores) || empty($id)) continue;

            if (is_array($id)) {
                $formated[] = ['id' => $menu, 'name' => $this->names[$menu] ?? $menu, 'icon' => $this->icons[$menu] ?? 'fa-link', 'sub' => $this->buildMenus($id)];
            } else {
                $formated[] = ['id' => $id, 'name' => $this->names[$id] ?? $menu, 'icon' => $this->icons[$id] ?? 'fa-link', 'url' => $this->urls[$id]];
            }
        }
        return $formated;
    }
}
