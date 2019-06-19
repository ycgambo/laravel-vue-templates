
# Laravel Vue Templates

可以使用Blade动态生成Vue标签的Laravel后台骨架，使后端开发者可以专注于数据、而不是页面渲染。

## 痛点

虽然Laravel的Blade和Vue都是非常好用的，但是我们却不能把两者同时用起来（除非把Vue当成一个js库来使用）

一般来说，这就给后端开发在开发后台时留下了两个选择：

1. 用Laravel做api然后部署另一个Vue项目来做后台展示
2. 用Laravel的模板引擎，使用jQuery来替代Vue来做动态交互

对于全栈开发者或者大的项目来说，选项1无疑是最好的选择。
而选项2对于某些复杂的管理页来说开发起来就无比痛苦了。

参考Vue Admin项目，我对一些前端包进行了一定的封装，来使其符合后端开发者的习惯。

这个项目解决了以下痛点：
1. 菜单 (生成菜单树，检测当前菜单)
2. 异步页面加载 (异步渲染blade模板，却没有页面跳转)
3. Vue标签支持 (在模板里动态生成并渲染Vue标签)

## 安装

安装软件包:

    composer require ycgambo/laravel-vue-templates
    
把下面这行代码加到`config/app.php`:

    Yb\LVT\ThemeServiceProvider::class,
   
释放资源:

    php artisan vendor:publish --provider='Yb\LVT\ThemeServiceProvider'

然后访问`hostname/lvt/VueAdmin/example/dashboard`来查看样例.

> 查看我部署的一个在线[Demo](http://lvt.notee.cc/lvt/VueAdmin/example/dashboard).

> 同时，样例代码也被拷贝到了`resources/laravel-vue-templates`中以供参考.

如果你想移除例子的路由的话，把这行代码注释掉就行了:

    Yb\LVT\ThemeServiceProvider::class,

## 使用

注册Blade组件:

    VueAdmin::create($namespace, 'example')->with('menus', $menus)->boot();

然后使用即可:

```
@example

@php
    $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
    ];
@endphp

<fm-form action="/lvt/VueAdmin/example/submit" method="post" size="small" rules='@json($rules)'>
    @csrf
    <fm-input label="Name" name="name"></fm-input>
    <fm-input label="Email" name="email"></fm-input>
    
    <el-form-item>
        <el-button class="pull-right" type="primary" native-type="submit">Check It Out</el-button>
    </el-form-item>
</fm-form>

@endexample
```

`menus`应该遵循这样的结构，[查看如何构造菜单](#路由例子): 

```
$menus = [
//  ['id' => 'menu id', 'name' => 'menu name', 'icon' => 'menu icon'，'url' => 'which url to redirect', 'sub' => 'for sub menus', ],

    ['id' => 'home', 'name' => 'Home', 'icon' => 'fa-tachometer'，'url' => '/home', ],
    ['id' => 'layout', 'name' => 'Layouts', 'icon' => 'fa-tachometer', 'sub' => [
        ['id' => 'vue-admin', 'name' => 'Vue Admin', 'icon' => 'fa-tachometer'，'url' => '/layout/vue-admin', ],
    ]],
];
```

如果你想继续扩展这个模板:

    VueAdmin::create($namespace, 'example')->inject('admin.base')->with('menus', $menus)->boot();

通过注入模板到`admin.base`中并用`_example`来拓展它:

```
@_example

    @section('header')
        {{-- page css are not dynamic loaded, because there's no way to clean it up once loaded, and it will affect other pages --}}
        {{-- commonly used css --}}
    @endsectio
    
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
    @endsectionn

    @section('title')
        @yield('title') {{-- expose title for subpages --}}
    @endsection

    {{ $slot }}

    @section('import')
        {{-- commonly used js --}}
    @endsection

    @section('js')
        {{-- these section will be dynamic loaded, and you can use __destructor to clean things up before load another page --}}
    @endsection
   
@end_example
```

然后就可以使用扩展后的自定义模板了:

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
    @csrf
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

## 路由例子

注册路由: (`app/Providers/RouteServiceProvider.php`)

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

view文件夹结构:

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
