
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
   
Add this line into your providers in `config/app.php`(no need for laravel 5.8+):

    Yb\LVT\ThemeServiceProvider::class,

Release resource:

    php artisan vendor:publish --provider='Yb\LVT\ThemeServiceProvider'
    
Access `hostname/lvt/VueAdmin/example/dashboard` to visit the pages.

> Checkout this online [Demo](http://lvt.notee.cc/lvt/VueAdmin/example/dashboard) that I deployed on my server.

> Also, there are a directory `resources/laravel-vue-templates` which copied out of this package that contains example references.

Comment out this line if you don't want those example routes:

    Yb\LVT\ThemeServiceProvider::class,


## Usage

Register into Blade component:

    VueAdmin::create($namespace, 'example')->with('menus', $menus)->boot();

And use in blades:

```
@example

@php
    $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
    ];
@endphp

<fm-form action="/lvt/VueAdmin/example/submit" method="post" size="small" rules='@json($rules)'>
    {{ csrf_field() }}
    <fm-input label="Name" name="name"></fm-input>
    <fm-input label="Email" name="email"></fm-input>
    
    <el-form-item>
        <el-button class="pull-right" type="primary" native-type="submit">Check It Out</el-button>
    </el-form-item>
</fm-form>

@endexample
```

The `menus` is an array like this, [see how to generate it](#route-examples):

```
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

```
@_example

    @section('header')
        {{-- page css are not dynamic loaded, because there's no way to clean it up once loaded, and it will affect other pages --}}
        {{-- commonly used css --}}
    @endsection
    
    {{-- custom header icon slots --}}
    @section('header-lr')
    @endsection
    @section('header-rl')
        <a class="header-item" href="#">
            <i class="fa fa-weixin" aria-hidden="true"></i>
        </a>
    @endsection
    @section('header-rr')
        <a class="header-item" href="/admin/logout">
            <i class="fa fa-sign-out" aria-hidden="true"></i>
        </a>
    @endsection

    @section('title')
        @yield('title') {{-- expose title for subpages --}}
    @endsection

    {{ $slot }}

    @section('import')
        {{-- commonly used js --}}
    @endsection

    @section('js')
        {{-- these section will be dynamic loaded, and you can use __destructor to clean things up before load another page --}}
        @if ($errors->any())
            <script>
                @foreach ($errors->all() as $error)
                    __notify("{{$error}}", 'Error', 'warning')
                @endforeach
            </script>
        @endif
    @endsection
@end_example
```

And use injected blades:

```
@example

@php
    $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
    ];

    $data = [
        'CMCC' => [220, 182, 191, 134, 150, 120, 110, 125, 145, 122, 165, 122],
        'C0CC' => [220, 182, 125, 145, 122, 191, 34, 50, 120, 110, 165, 122],
        'CUCC' => [220, 182, 125, 15, 122, 191, 134, 150, 120, 110, 165, 122],
    ];
    $data['ref'] = ["13:00", "13:05", "13:10", "13:15", "13:20", "13:25", "13:30", "13:35", "13:40", "13:45", "13:50", "13:55"];
@endphp

@section('title')
    Page No 1
@endsection

<fm-form action="/lvt/VueAdmin/example/submit" method="post" size="small" rules='@json($rules)'>
    {{ csrf_field() }}
    <fm-input label="Name" name="name"></fm-input>
    <fm-input label="Email" name="email"></fm-input>
    <fm-date label="Birth" name="birth" type="datetime"></fm-date>
    <fm-select label="Hometown" name="hometown">
        <el-option value="Washington" label="Washington">Washington</el-option>
        <el-option value="Chicago" label="Chicago">Chicago</el-option>
    </fm-select>
    <fm-checkbox label="Hobbies">
        <el-checkbox name="code" label="Code" border checked>Code</el-checkbox>
        <el-checkbox name="eat" label="Eat" border>Eat</el-checkbox>
    </fm-checkbox>
    <fm-switch label="Remember Me" name="remember" on active-color="#13ce66" inactive-color="#ff4949"
               active-text="Yes"
               inactive-text="No"></fm-switch>
    <el-form-item label="Describe Yourself">
        <text-editor name="describe" upload_url="/lvt/VueAdmin/example/img_upload">{!! $editor ?? '' !!}</text-editor>
    </el-form-item>
    <el-form-item>
        <el-button class="pull-right" type="primary" native-type="submit">Check It Out</el-button>
    </el-form-item>
</fm-form>

<chart-line height="400px" smooth="false" x-name="xAxis" y-name="yAxis">@json($data)</chart-line>

@section('js')
    @parent
    <script>
        !(function () {
            var i = setInterval(() => {
                console.log(123)
            }, 500)
            __destructor = () => {
                clearInterval(i)
            }
        })()
    </script>
@endsection

@endexample
```

## Route Examples

Regsiter admin routes: (`app/Providers/RouteServiceProvider.php`)

```
    public function map()
    {
        $this->mapApiRoutes();
        $this->mapWebRoutes();
        $this->mapAdminRoutes();
    }

    protected function mapAdminRoutes()
    {
        Route::prefix('admin')
            // ->middleware('admin')
            ->namespace("{$this->namespace}\Admin")
            ->group(base_path('routes/admin.php'));
        \Yb\LVT\Themes\VueAdmin\VueAdmin::create('admin', 'admin')
            ->inject('admin.base')
            ->with('menus', $this->getAdminMenus())
            ->paginate()
            ->boot();
    }

    protected function getAdminMenus()
    {
        $sort = [
            'index',
            'consumerMessage.manual',
        ];
        $icons = [
            'index' => 'fa-tachometer',
            'consumerMessage' => 'fa-commenting-o',
        ];
        $names = [
            'consumerMessage' => '客服消息',
            'consumerMessage.manual' => '手动发送',
            'consumerMessage.reply' => '消息回复',
        ];
        $ignores = [
            'base',
            'consumerMessage.manual_edit',
            'consumerMessage.reply_edit',
        ];
        
        return \Yb\LVT\Menu::in(resource_path('views/admin'))
            ->prefix('/admin')
            ->icons($icons)
            ->names($names)
            ->ignores($ignores)
            ->get($sort);
    }
```

The view directory tree:

```
resources/views/admin
├── base.blade.php
├── consumerMessage
│   ├── manual.blade.php
│   ├── manual_edit.blade.php
│   ├── reply.blade.php
│   ├── reply_edit.blade.php
└── index.blade.php
```
