
# Laravel Vue Templates

A Laravel admin template to generate dynamic Vue tags in blades. Focus on data, not render.

[中文文档](https://github.com/ycgambo/laravel-vue-templates/blob/master/README_CN.md)

## Why

Though Laravel Blade and Vue are handy, we can not use them both(unless we use Vue as a library).

This leaves us two options to develop a admin site:

1. use laravel as an api server and deploy another vue application
2. use laravel blade engine with jquery and get ride of vue

Option 1 is the best choice if you are a full stack developer or the project itself is scaled.
Option 2 is very painful for those complex admin pages.

So, thanks to the vue-admin project, I warped it so to fit backend developer's habits.

It deals with these painful stuff:
1. menus (generate menu tree, detect current menu)
2. async page loading(load new blade into page content with no redirect)
3. vue plugins (write vue tags in blade)



## Install

Install package:

    composer require ycgambo/laravel-vue-templates
   
Release resource:

    php artisan vendor:publish --provider='Yb\LVT\ThemeServiceProvider'
    
Register the example routes, add this line into your providers in `config/app.php`:

    Yb\LVT\ThemeServiceProvider::class,

Access `hostname/lvt/VueAdmin/example/dashboard` to visit the pages.

> Checkout this online [Demo](http://lvt.notee.cc/lvt/VueAdmin/example/dashboard) that I deployed on my server.

> Also, there are a directory `resources/laravel-vue-templates` which copied out of this package that contains example references.

## Usage

Register into Blade component:

    VueAdmin::create($namespace, 'example')->with('menus', $menus)->boot();

And use in blades:

```php
@example
    <chart-bar width="100%" height="500px"  title="Title" x-name="xAxis" y-name="yAxis">
        {
            "ref": ["13:00", "13:05", "13:10", "13:15", "13:20", "13:25", "13:30", "13:35", "13:40", "13:45", "13:50", "13:55"],
            "Item1": [220, 182, 191, 134, 150, 120, 110, 125, 145, 122, 165, 122],
            "Item2": [220, 182, 125, 145, 122, 191, 34, 50, 120, 110, 165, 122]
        }
    </chart-bar>
@endexample
```

The `menus` is an array like this: 

```php
$menus = [
//  ['id' => 'menu id', 'name' => 'menu name', 'icon' => 'menu icon'，'url' => 'which url to redirect', 'sub' => 'for sub menus', ],

    ['id' => 'home', 'name' => 'Home', 'icon' => 'fa-tachometer'，'url' => '/home', ],
    ['id' => 'layout', 'name' => 'Layouts', 'icon' => 'fa-tachometer', 'sub' => [
        ['id' => 'vue-admin', 'name' => 'Vue Admin', 'icon' => 'fa-tachometer'，'url' => '/layout/vue-admin', ],
    ]],
];
```

If you want to extend the layout:

    VueAdmin::create($namespace, 'example')->inject('admin.base')->with('menus', $menus)->boot();

You can then inject it by using `_example` in you admin.base blade:

```php
@_example
    @slot('header')
        {{-- commonly used css --}}
        @yield('header') {{-- expose for subpages --}}
    @endslot
    
    @yield('title') {{-- expose title for subpages --}}
    
    {{ $slot }}
    
    @slot('footer')
        {{-- page footer, commonly used js --}}
        @yield('js') {{-- expose for subpages --}}
    @endslot
@end_example
```

And use injected blades:

```php
@example
    @section('header')
        {{-- page css, SEO stuff --}}
    @endsection

    @section('title')
        Page No 1
    @endsection
    
    <chart-bar width="100%" height="500px"  title="Title" x-name="xAxis" y-name="yAxis">
        {
            "ref": ["13:00", "13:05", "13:10", "13:15", "13:20", "13:25", "13:30", "13:35", "13:40", "13:45", "13:50", "13:55"],
            "Item1": [220, 182, 191, 134, 150, 120, 110, 125, 145, 122, 165, 122],
            "Item2": [220, 182, 125, 145, 122, 191, 34, 50, 120, 110, 165, 122]
        }
    </chart-bar>
    
    @section('js')
        {{-- page js --}}
    @endsection
@endexample
```
