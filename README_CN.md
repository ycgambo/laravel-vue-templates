
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
   
释放资源:

    php artisan vendor:publish --provider='Yb\LVT\ThemeServiceProvider'
    
把下面这行代码加到`config/app.php`，如果你想注册例子的路由的话:

    Yb\LVT\ThemeServiceProvider::class,

然后访问`hostname/lvt/VueAdmin/example/dashboard`来查看样例.

> 查看我部署的一个在线[Demo](http://lvt.notee.cc/lvt/VueAdmin/example/dashboard).

> 同时，样例代码也被拷贝到了`resources/laravel-vue-templates`中以供参考.

## 使用

注册Blade组件:

    VueAdmin::create($namespace, 'example')->with('menus', $menus)->boot();

然后使用即可:

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

`menus`应该遵循这样的结构，[查看如何构造菜单](https://github.com/ycgambo/laravel-vue-templates/blob/master/src/Menu.php): 

```php
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

```php
@_example

    @section('header')
        {{-- page css are not dynamic loaded, because there's no way to clean it up once loaded, and it will affect other pages --}}
        {{-- commonly used css --}}
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
        @yield('js') {{-- expose for subpages --}}
    @endsection
   
@end_example
```

然后就可以使用扩展后的自定义模板了:

```php
@example
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
