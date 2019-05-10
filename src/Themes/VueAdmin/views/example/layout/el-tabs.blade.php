@lvt_example

{{-- b-tabs is buggy when switch --}}
{{--<b-tabs>--}}
{{--    <b-tab title="first" active>--}}
{{--        <br>I'm the first fading tab--}}
{{--    </b-tab>--}}
{{--    <b-tab title="second">--}}
{{--        <br>I'm the second tab content--}}
{{--    </b-tab>--}}
{{--    <b-tab title="disabled" disabled>--}}
{{--        <br>Disabled tab!--}}
{{--    </b-tab>--}}
{{--</b-tabs>--}}

<h1 class="mt-3">Default</h1>
<el-tabs value="second">
    <el-tab-pane label="用户管理" name="first">用户管理</el-tab-pane>
    <el-tab-pane label="配置管理" name="second">配置管理</el-tab-pane>
    <el-tab-pane label="角色管理" name="third">角色管理</el-tab-pane>
    <el-tab-pane label="定时任务补偿" name="fourth">定时任务补偿</el-tab-pane>
</el-tabs>

<h1 class="mt-3">Tab position</h1>
<el-tabs value="second" tab-position="left">
    <el-tab-pane label="用户管理" name="first">用户管理</el-tab-pane>
    <el-tab-pane label="配置管理" name="second" disabled>配置管理</el-tab-pane>
    <el-tab-pane label="角色管理" name="third">角色管理</el-tab-pane>
    <el-tab-pane label="定时任务补偿" name="fourth">定时任务补偿</el-tab-pane>
</el-tabs>

@endlvt_example