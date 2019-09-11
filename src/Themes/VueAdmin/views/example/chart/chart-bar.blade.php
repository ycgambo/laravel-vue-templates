@lvt_example

@php
    $data = [
        'CMCC' => [220, 182, 191, 134, 150, 120, 110, 125, 145, 122, 165, 122],
        'C0CC' => [220, 182, 125, 145, 122, 191, 34, 50, 120, 110, 165, 122],
        'CUCC' => [220, 182, 125, 15, 122, 191, 134, 150, 120, 110, 165, 122],
    ];
    $refs = ["13:00", "13:05", "13:10", "13:15", "13:20", "13:25", "13:30", "13:35", "13:40", "13:45", "13:50", "13:55"];
    $legends = ["中文图例", "数据2", "数据3"];
@endphp

<code-php>{!! <<<'DOC'
    $data = [
        'CMCC' => [220, 182, 191, 134, 150, 120, 110, 125, 145, 122, 165, 122],
        'C0CC' => [220, 182, 125, 145, 122, 191, 34, 50, 120, 110, 165, 122],
        'CUCC' => [220, 182, 125, 15, 122, 191, 134, 150, 120, 110, 165, 122],
    ];
    $refs = ["13:00", "13:05", "13:10", "13:15", "13:20", "13:25", "13:30", "13:35", "13:40", "13:45", "13:50", "13:55"];
    $legends = ["中文图例", "数据2", "数据3"];
DOC;
; !!}</code-php>


<h1 class="mt-3">Basic</h1>
<div class="mt-3">
    <chart-bar refs='@json($refs)' legends='@json($legends)' height="500px" title="Title" x-name="xAxis" y-name="yAxis">@json($data)</chart-bar>
</div>

<b-badge class="mt-3" v-b-toggle.default>Source Code</b-badge>
<b-collapse id="default" class="mt-2"><code-html>@php echo e( <<<'DOC'
    <chart-bar refs='@json($refs)' legends='@json($legends)' height="500px" title="Title" x-name="xAxis" y-name="yAxis">@json($data)</chart-bar>
DOC
)@endphp</code-html></b-collapse>


<h1 class="mt-3">Stack</h1>
<div class="mt-3">
    <chart-bar refs='@json($refs)' height="500px" title="Title" x-name="xAxis" y-name="yAxis" stack>@json($data)</chart-bar>
</div>

<b-badge class="mt-3" v-b-toggle.stack>Source Code</b-badge>
<b-collapse id="stack" class="mt-2"><code-html>@php echo e( <<<'DOC'
    <chart-bar refs='@json($refs)' height="500px" title="Title" x-name="xAxis" y-name="yAxis" stack>@json($data)</chart-bar>
DOC
)@endphp</code-html></b-collapse>


<h1 class="mt-3">chart-bar Attributes</h1>
<chart-table>
    [
    {"attribute": "refs", "description": "reference on x axis", "type": "string of json array", "options": "—", "default": "—"},
    {"attribute": "title", "description": "title of chart", "type": "string", "options": "—", "default": "—"},
    {"attribute": "width", "description": "width of chart", "type": "string", "options": "—", "default": "100%"},
    {"attribute": "height", "description": "height of chart", "type": "string", "options": "—", "default": "200px"},
    {"attribute": "x-name", "description": "name of x axis", "type": "string", "options": "—", "default": "—"},
    {"attribute": "y-name", "description": "name of y axis", "type": "string", "options": "—", "default": "—"},
    {"attribute": "legends", "description": "legends of chart", "type": "string of json array", "options": "—", "default": "—"},
    {"attribute": "stack", "description": "stack mode", "type": "boolean", "options": "—", "default": "false"}
    ]
</chart-table>


@endlvt_example