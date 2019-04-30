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

<b-badge variant="primary" v-b-toggle.table>source code</b-badge>
<b-collapse id="table" class="mt-2"><code-html>@php echo e( <<<'DOC'
    <chart-table>@json($data)</chart-table>
DOC
)@endphp</code-html></b-collapse>


@endlvt_example
