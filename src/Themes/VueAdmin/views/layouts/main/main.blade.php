<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link href="{{ $__theme->mix('/css/app.css') }}" rel="stylesheet">
    @yield('header')
</head>

<body>

<div id="loading">
    <div class="lds-dual-ring"></div>
</div>

<script>
    (async function f() {
        document.getElementById('loading').style.display = 'none';
        await new Promise(resolve => setTimeout(resolve, 1500));
        if (window.Vue === undefined) {
            document.getElementById('loading').style.display = 'block';
        }
    })();
</script>

<div id="lvt-app-content" style="display: none">{{ $slot }}</div>
<div id="lvt-app-header-lr" style="display: none">@yield('header-lr')</div>
<div id="lvt-app-header-rl" style="display: none">@yield('header-rl')</div>
<div id="lvt-app-header-rr" style="display: none">@yield('header-rr')</div>

<div id="lvt-app">
    <layout-sidebar>
        <template slot="menu">
            @if(isset($menus))
                @include($__theme->view('layouts.main.menu'), ['menus' => $menus])
            @else
                @include($__theme->view('layouts.main.no-menu'))
            @endif
        </template>
    </layout-sidebar>
</div>

<script src="{{ $__theme->mix('/js/manifest.js') }}"></script>
<script src="{{ $__theme->mix('/js/vendor.js') }}"></script>
<script src="{{ $__theme->mix('/js/app.js') }}"></script>

@yield('import')
<div id="lvt-app-init">@yield('init')</div>
<div id="lvt-app-js">@yield('js')</div>
</body>
</html>

