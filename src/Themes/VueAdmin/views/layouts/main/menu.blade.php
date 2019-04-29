@foreach($menus as $menu)
    @if(empty($menu['sub']))
        <a href="{{$menu['url']}}" index="{{$menu['id']}}">
            <el-menu-item index="{{$menu['id']}}">
                @if(empty($sub) && !empty($menu['icon']))
                    <i class="fa {{$menu['icon']}}"></i>
                @endif
                <span slot="title">{{$menu['name']}}</span>
            </el-menu-item>
        </a>
    @else
        <el-submenu index="{{$menu['id']}}">
            <template slot="title">
                @if(empty($sub) && !empty($menu['icon']))
                    <i class="fa {{$menu['icon']}}"></i>
                @endif
                <span slot="title">{{$menu['name']}}</span>
            </template>

            @include($__theme->view('layouts.main.menu'), ['menus' => $menu['sub'], 'sub' => true])
        </el-submenu>
    @endif
@endforeach

