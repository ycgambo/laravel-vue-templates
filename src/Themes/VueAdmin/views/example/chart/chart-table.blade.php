@lvt_example

@php
    $data = [
        [ "age" => 40, "first_name" => "Dickerson", "isActive" => true, "last_name" => "Macdonald" ],
        [ "age" => 21, "first_name" => "Larsen", "isActive" => false, "last_name" => "Shaw" ],
        [ "age" => 89, "first_name" => "Geneva", "isActive" => false, "last_name" => "Wilson" ],
        [ "age" => 38, "first_name" => "Jami", "isActive" => true, "last_name" => "Carney" ],
    ];
@endphp

<code-php>{!! <<<'DOC'
    $data = [
        [ "age" => 40, "first_name" => "Dickerson", "isActive" => true, "last_name" => "Macdonald" ],
        [ "age" => 21, "first_name" => "Larsen", "isActive" => false, "last_name" => "Shaw" ],
        [ "age" => 89, "first_name" => "Geneva", "isActive" => false, "last_name" => "Wilson" ],
        [ "age" => 38, "first_name" => "Jami", "isActive" => true, "last_name" => "Carney" ],
    ];
DOC;
; !!}</code-php>


<h1 class="mt-3">Table</h1>
<div class="mt-3">
    <chart-table>@json($data)</chart-table>
</div>

<b-badge class="mt-3" v-b-toggle.table>source code</b-badge>
<b-collapse id="table" class="mt-2"><code-html v-pre>@php echo e( <<<'DOC'
    <chart-table>@json($data)</chart-table>
DOC
)@endphp</code-html></b-collapse>


<h1 class="mt-3">ElementUI</h1>
<div class="mt-3">
    <el-table :data='@json($data)' border style="width: 100%">
        <el-table-column prop="age" label="Age" width="100"></el-table-column>
        <el-table-column prop="first_name" label="First Name"></el-table-column>
        <el-table-column prop="last_name" label="Last Name"></el-table-column>
        <el-table-column prop="isActive" label="Active"></el-table-column>
    </el-table>
</div>

<b-badge class="mt-3" v-b-toggle.el>source code</b-badge>
<b-collapse id="el" class="mt-2"><code-html v-pre>@php echo e( <<<'DOC'
    <el-table :data='@json($data)' border style="width: 100%">
        <el-table-column prop="age" label="Age" width="100"></el-table-column>
        <el-table-column prop="first_name" label="First Name"></el-table-column>
        <el-table-column prop="last_name" label="Last Name"></el-table-column>
        <el-table-column prop="isActive" label="Active"></el-table-column>
    </el-table>
DOC
)@endphp</code-html><md-renderer v-pre>@php echo e( <<<'DOC'
For Eloquent pagination, you may use `:data='@json($paginator->toArray()['data'])'` to bind data.
DOC
)@endphp</md-renderer></b-collapse>

@endlvt_example
