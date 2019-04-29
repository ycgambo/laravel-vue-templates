@lvt_example

<h1 class="mt-3">Default <b-badge variant="primary" v-b-toggle.default>Source Code</b-badge></h1>
<div class="mt-3">
    <el-button onclick="__confirm(123)">Click Me</el-button>
</div>

<b-collapse id="default" class="mt-2"><code-html>@php echo e( <<<'DOC'
    <el-button onclick="__confirm(123)">Click Me</el-button>
DOC
)@endphp</code-html></b-collapse>


<h1 class="mt-3">Type <b-badge variant="primary" v-b-toggle.type>Source Code</b-badge></h1>
<div class="mt-3">
    <el-button type="success" onclick="__confirm(123, 'success')">Success</el-button>
    <el-button type="warning" onclick="__confirm(123, 'warning')">Warning</el-button>
    <el-button type="danger" onclick="__confirm(123, 'error')">Error</el-button>
</div>

<b-collapse id="type" class="mt-2"><code-html>@php echo e( <<<'DOC'
    <el-button type="success" onclick="__confirm(123, 'success')">Success</el-button>
    <el-button type="warning" onclick="__confirm(123, 'warning')">Warning</el-button>
    <el-button type="danger" onclick="__confirm(123, 'error')">Error</el-button>
DOC
)@endphp</code-html></b-collapse>


<h1 class="mt-3">Callback <b-badge variant="primary" v-b-toggle.callback>Source Code</b-badge></h1>
<div class="mt-3">
    <el-button onclick="__confirm(123, 'info', function(){__notify('Passed')})">Pass</el-button>
    <el-button onclick="__confirm(123, 'info', function(){}, function(){__notify('Failed')})">Fail</el-button>
</div>

<b-collapse id="callback" class="mt-2"><code-html>@php echo e( <<<'DOC'
    <el-button onclick="__confirm(123, 'info', function(){__notify('Passed')})">Pass</el-button>
    <el-button onclick="__confirm(123, 'info', function(){}, function(){__notify('Failed')})">Fail</el-button>
DOC
)@endphp</code-html></b-collapse>


@endlvt_example