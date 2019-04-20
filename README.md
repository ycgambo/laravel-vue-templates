
# Laravel Vue Templates

A Laravel admin template to generate dynamic Vue tags in blades. Focus on data, not render.


## Why

Though Laravel Blade and Vue are handy, we can not use them both(unless we use Vue as a library).

This leaves us two options to develop a admin site:

1. use laravel as an api server and deploy another vue application
2. use laravel blade engine with jquery and get ride of vue

Option 1 is good if you are a full stack developer.
Option 2 is not a wonderful choice for complex admin pages.

So, thanks to the vue-admin project, I warped it so to fit backend developer's habits.

It deals with these painful stuff:
1. menus (generate menu tree, detect current menu)
2. async page loading(load new blade into page content with no redirect)
3. vue plugins (write vue tags in blade)


## Demo



## Install

Install package:

    composer require ycgambo/laravel-vue-templates
   
Release resource:

    php artisan vendor:publish --provider='LVT\ThemeServiceProvider'


## Usage

Register into Blade component:

    VueAdmin::create($namespace, 'example')->with('menus', $menus)->boot();

And use in blades:

```php
@example
@endexample
```

If you want to extend it:

    VueAdmin::create($namespace, 'example')->inject('admin.base')->with('menus', $menus)->boot();

You can inject it into a base blade:

```php
@inject-example
    @slot('header')
        {{-- commonly used css --}}
        @yield('header') {{-- expose for subpages --}}
    @endslot
    
    @slot('title')
        {{ $title }} {{-- expose title for subpages --}}
    @endslot
    
    {{ $slot }}
    
    @slot('footer')
        {{-- page footer, commonly used js --}}
        @yield('js') {{-- expose for subpages --}}
    @endslot
@endinject-example
```

And use injected blades:

```php
@example
    @section('header')
        {{-- page css, SEO stuff --}}
    @endsection

    @slot('title')
        Page No 1
    @endslot
    
    @section('js')
        {{-- page js --}}
    @endsection
@endexample
```

Or if you want to extend it:





