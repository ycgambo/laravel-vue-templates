@php(isset($path) or $path = 'm')
@foreach($menus as $id => $menu)
    @if(empty($menu['sub']))
        <a href="{{$menu['url']}}" index="{{$menu['id'] ?? "$path-$id"}}">
            <el-menu-item index="{{"$path-$id"}}">
                @if(empty($sub) && !empty($menu['icon']))
                    <i class="fa {{$menu['icon']}}"></i>
                @endif
                <span slot="title">{{$menu['name']}}</span>
            </el-menu-item>
        </a>
    @else
        <el-submenu index="{{$menu['id'] ?? "$path-$id"}}">
            <template slot="title">
                @if(empty($sub) && !empty($menu['icon']))
                    <i class="fa {{$menu['icon']}}"></i>
                @endif
                <span slot="title">{{$menu['name']}}</span>
            </template>

            @include($__theme->view('layouts.main.menu'), ['menus' => $menu['sub'], 'sub' => true, 'path' => "$path-$id"])
        </el-submenu>
    @endif
@endforeach

