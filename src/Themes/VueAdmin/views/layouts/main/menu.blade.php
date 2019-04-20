@php(isset($path) or $path = 'm')
@foreach($menus as $id => $menu)
    @if(empty($menu['sub']))
        <a href="{{$menu['url']}}" index="{{"$path-$id"}}">
            <el-menu-item index="{{"$path-$id"}}">
                @if(empty($sub) && !empty($menu['icon']))
                    <i class="fa {{$menu['icon']}}"></i>
                @endif
                <span slot="title">{{$menu['name']}}</span>
            </el-menu-item>
        </a>
    @else
        <el-submenu index="{{"$path-$id"}}">
            <template slot="title">
                @if(empty($sub) && !empty($menu['icon']))
                    <i class="fa {{$menu['icon']}}"></i>
                @endif
                <span slot="title">{{$menu['name']}}</span>
            </template>

            @include(\LVT\Themes\VueAdmin\VueAdmin::view('layouts.vue-admin.menu'), ['menus' => $menu['sub'], 'sub' => true, 'path' => "$path-$id"])
        </el-submenu>
    @endif
@endforeach

