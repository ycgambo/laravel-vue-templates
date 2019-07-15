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
    <chart-line refs='@json($refs)' legends='@json($legends)' height="500px" title="Title" x-name="xAxis" y-name="yAxis">@json($data)</chart-line>
</div>

<b-badge variant="primary" v-b-toggle.zigzag>source code</b-badge>
<b-collapse id="zigzag" class="mt-2"><code-html>@php echo e( <<<'DOC'
    <chart-line refs='@json($refs)' legends='@json($legends)' height="500px" title="Title" x-name="xAxis" y-name="yAxis">@json($data)</chart-line>
DOC
)@endphp</code-html></b-collapse>


<h1 class="mt-3">Smooth</h1>
<div class="mt-3">
    <chart-line refs='@json($refs)' height="500px" title="Title" x-name="xAxis" y-name="yAxis" smooth>@json($data)</chart-line>
</div>

<b-badge variant="primary" v-b-toggle.smooth>Source Code</b-badge>
<b-collapse id="smooth" class="mt-2"><code-html>@php echo e( <<<'DOC'
    <chart-line refs='@json($refs)' height="500px" title="Title" x-name="xAxis" y-name="yAxis" smooth>@json($data)</chart-line>
DOC
)@endphp</code-html></b-collapse>


<h1 class="mt-3">Step at Start</h1>
<div class="mt-3">
    <chart-line refs='@json($refs)'height="500px" title="Title" x-name="xAxis" y-name="yAxis" step="start">@json($data)</chart-line>
</div>

<b-badge variant="primary" v-b-toggle.step>Source Code</b-badge>
<b-collapse id="step" class="mt-2"><code-html>@php echo e( <<<'DOC'
    <chart-line refs='@json($refs)' height="500px" title="Title" x-name="xAxis" y-name="yAxis" step="start">@json($data)</chart-line>
DOC
)@endphp</code-html></b-collapse>


<h1 class="mt-3">Step at Middle</h1>
<div class="mt-3">
    <chart-line refs='@json($refs)' height="500px" title="Title" x-name="xAxis" y-name="yAxis" step="middle">@json($data)</chart-line>
</div>

<b-badge variant="primary" v-b-toggle.step>Source Code</b-badge>
<b-collapse id="step" class="mt-2"><code-html>@php echo e( <<<'DOC'
    <chart-line refs='@json($refs)' height="500px" title="Title" x-name="xAxis" y-name="yAxis" step="middle">@json($data)</chart-line>
DOC
)@endphp</code-html></b-collapse>


<h1 class="mt-3">Step at End</h1>
<div class="mt-3">
    <chart-line refs='@json($refs)' height="500px" title="Title" x-name="xAxis" y-name="yAxis" step="end">@json($data)</chart-line>
</div>

<b-badge variant="primary" v-b-toggle.step>Source Code</b-badge>
<b-collapse id="step" class="mt-2"><code-html>@php echo e( <<<'DOC'
    <chart-line refs='@json($refs)' height="500px" title="Title" x-name="xAxis" y-name="yAxis" step="end">@json($data)</chart-line>
DOC
)@endphp</code-html></b-collapse>


<h1 class="mt-3">chart-line Attributes</h1>
<chart-table>
    [
    {"attribute": "refs", "description": "reference on x axis", "type": "string of json array", "options": "—", "default": "—"},
    {"attribute": "title", "description": "title of chart", "type": "string", "options": "—", "default": "—"},
    {"attribute": "width", "description": "width of chart", "type": "string", "options": "—", "default": "100%"},
    {"attribute": "height", "description": "height of chart", "type": "string", "options": "—", "default": "200px"},
    {"attribute": "x-name", "description": "name of x axis", "type": "string", "options": "—", "default": "—"},
    {"attribute": "y-name", "description": "name of y axis", "type": "string", "options": "—", "default": "—"},
    {"attribute": "legends", "description": "legends of chart", "type": "string of json array", "options": "—", "default": "—"},
    {"attribute": "smooth", "description": "smooth mode", "type": "boolean", "options": "—", "default": "false"},
    {"attribute": "step", "description": "step mode", "type": "string", "options": "start,middle,end", "default": "—"}
    ]
</chart-table>


@endlvt_example