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

class File
{
    public static function index($path, $name = '*', $sort = SORT_NATURAL)
    {
        $files = [];

        foreach (Finder::create()->files()->name($name)->in($path) as $file) {
            $directory = self::getNestedDirectory($file, $path);

            $files[$directory.basename($file->getRealPath())] = $file->getRealPath();
        }

        if ($sort) {
            ksort($files, $sort);
        }

        return $files;
    }

    public static function getNestedDirectory(\SplFileInfo $file, $path)
    {
        $directory = $file->getPath();

        if ($nested = trim(str_replace($path, '', $directory), DIRECTORY_SEPARATOR)) {
            $nested = str_replace(DIRECTORY_SEPARATOR, '.', $nested).'.';
        }

        return $nested;
    }
}
