@lvt_example

<modal title="Dialog">
    <p class="my-4">Hello from modal!</p>
</modal>

<modal title="Dialog" confirm="haha">
    <template slot="trigger">
        <el-button type="text">Confirm</el-button>
    </template>
    <p class="my-4">Hello from modal!</p>
</modal>

<modal title="Dialog" fullscreen>
    <template slot="trigger">
        <el-button type="text">Fullscreen</el-button>
    </template>
    <p class="my-4">Hello from modal!</p>
</modal>

<modal title="Dialog" src="{{url('/lvt/VueAdmin/example/layout/el-dialog')}}">
    <p class="my-4">Hello from modal!</p>
</modal>

<modal title="Dialog" src="https://www.baidu.com">
    <p class="my-4">Hello from modal!</p>
</modal>

@endlvt_example