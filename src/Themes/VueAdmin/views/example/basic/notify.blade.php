@lvt_example

<h1 class="mt-3">Default <b-badge variant="primary" v-b-toggle.default>Source Code</b-badge></h1>
<div class="mt-3">
    <el-button onclick="__notify(123)">Click Me</el-button>
    <el-button onclick="__notify(123, 'title')">Title</el-button>
</div>

<b-collapse id="default" class="mt-2"><code-html>@php echo e( <<<'DOC'
    <el-button onclick="__notify(123)">Click Me</el-button>
    <el-button onclick="__notify(123, 'title')">Title</el-button>
DOC
)@endphp</code-html></b-collapse>


<h1 class="mt-3">Type <b-badge variant="primary" v-b-toggle.type>Source Code</b-badge></h1>
<div class="mt-3">
    <el-button type="success" onclick="__notify(123, 'title', 'success')">Success</el-button>
    <el-button type="warning" onclick="__notify(123, 'title', 'warning')">Warning</el-button>
    <el-button type="danger" onclick="__notify(123, 'title', 'error')">Error</el-button>
</div>

<b-collapse id="type" class="mt-2"><code-html>@php echo e( <<<'DOC'
    <el-button type="success" onclick="__notify(123, 'title', 'success')">Success</el-button>
    <el-button type="warning" onclick="__notify(123, 'title', 'warning')">Warning</el-button>
    <el-button type="danger" onclick="__notify(123, 'title', 'error')">Error</el-button>
DOC
)@endphp</code-html></b-collapse>


<h1 class="mt-3">Duration<b-badge variant="primary" v-b-toggle.duration>Source Code</b-badge></h1>
<div class="mt-3">
    <el-button onclick="__notify(123, 'title', 'success', 500)">Duration</el-button>
    <el-button onclick="__notify(123, 'title', 'success', 0)">Forever</el-button>
</div>

<b-collapse id="type" class="mt-2"><code-html>@php echo e( <<<'DOC'
    <el-button onclick="__notify(123, 'title', 'success', 500)">Duration</el-button>
    <el-button onclick="__notify(123, 'title', 'success', 0)">Forever</el-button>
DOC
)@endphp</code-html></b-collapse>


@endlvt_example