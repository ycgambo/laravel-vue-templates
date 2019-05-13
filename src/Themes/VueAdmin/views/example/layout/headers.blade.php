@lvt_example

@php
    $path = \Illuminate\Support\Facades\Request::fullUrl();
    $page = request()->get('page', 1);
    $data = range($page*10, $page*10 + 10);
    $users = new \Illuminate\Pagination\LengthAwarePaginator($data, 100, 10, $page,['path' => $path]);
@endphp


@section('header-rr')
    <a class="header-item">
        <i class="fa fa-language" aria-hidden="true"></i>
    </a>
@endsection

@section('header-rl')
<a class="header-item">
    <el-popover width="800" trigger="click" @@show="__store.set('switch_on', 1)" @hide="__store.set('switch_on')">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <th>{{$user}}</th>
                </tr>
            @endforeach
            </tbody>
        </table>

        {{ $users->links() }}

        <span slot="reference" class="switch">切换<i class="fa fa-lock" aria-hidden="true"></i></span>
    </el-popover>
</a>
@endsection

@section('js')
    <script>
        $(function () {
            if (__store.get('switch_on')) {
                $('.el-popover__reference.switch').click()
            }
        })
    </script>
@endsection

<el-button onclick="setTimeout(() => {$('.el-popover__reference.switch').click()}, 100)">Show</el-button>

@endlvt_example