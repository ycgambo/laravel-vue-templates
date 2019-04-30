@lvt_example

@php
    $data = [
        'CMCC' => [220, 182, 191, 134, 150, 120, 110, 125, 145, 122, 165, 122],
        'C0CC' => [220, 182, 125, 145, 122, 191, 34, 50, 120, 110, 165, 122],
        'CUCC' => [220, 182, 125, 15, 122, 191, 134, 150, 120, 110, 165, 122],
    ];
    $data['ref'] = ["13:00", "13:05", "13:10", "13:15", "13:20", "13:25", "13:30", "13:35", "13:40", "13:45", "13:50", "13:55"];
@endphp

<code-php>{!! <<<'DOC'
    $data = [
        'CMCC' => [220, 182, 191, 134, 150, 120, 110, 125, 145, 122, 165, 122],
        'C0CC' => [220, 182, 125, 145, 122, 191, 34, 50, 120, 110, 165, 122],
        'CUCC' => [220, 182, 125, 15, 122, 191, 134, 150, 120, 110, 165, 122],
    ];
    $data['ref'] = ["13:00", "13:05", "13:10", "13:15", "13:20", "13:25", "13:30", "13:35", "13:40", "13:45", "13:50", "13:55"];
DOC;
; !!}</code-php>


<h1 class="mt-3">Zigzag</h1>
<div class="mt-3">
    <chart-line width="100%" height="500px" title="Title" x-name="xAxis" y-name="yAxis">@json($data)</chart-line>
</div>

<b-badge variant="primary" v-b-toggle.zigzag>source code</b-badge>
<b-collapse id="zigzag" class="mt-2"><code-html>@php echo e( <<<'DOC'
    <chart-line width="100%" height="500px" title="Title" x-name="xAxis" y-name="yAxis">@json($data)</chart-line>
DOC
)@endphp</code-html></b-collapse>


<h1 class="mt-3">Smooth</h1>
<div class="mt-3">
    <chart-line width="100%" height="500px" title="Title" x-name="xAxis" y-name="yAxis" smooth>@json($data)</chart-line>
</div>

<b-badge variant="primary" v-b-toggle.smooth>Source Code</b-badge>
<b-collapse id="smooth" class="mt-2"><code-html>@php echo e( <<<'DOC'
    <chart-line width="100%" height="500px" title="Title" x-name="xAxis" y-name="yAxis" smooth>@json($data)</chart-line>
DOC
)@endphp</code-html></b-collapse>


<h1 class="mt-3">Step at Start</h1>
<div class="mt-3">
    <chart-line width="100%" height="500px" title="Title" x-name="xAxis" y-name="yAxis" step="start">@json($data)</chart-line>
</div>

<b-badge variant="primary" v-b-toggle.step>Source Code</b-badge>
<b-collapse id="step" class="mt-2"><code-html>@php echo e( <<<'DOC'
    <chart-line width="100%" height="500px" title="Title" x-name="xAxis" y-name="yAxis" step="start">@json($data)</chart-line>
DOC
)@endphp</code-html></b-collapse>


<h1 class="mt-3">Step at Middle</h1>
<div class="mt-3">
    <chart-line width="100%" height="500px" title="Title" x-name="xAxis" y-name="yAxis" step="middle">@json($data)</chart-line>
</div>

<b-badge variant="primary" v-b-toggle.step>Source Code</b-badge>
<b-collapse id="step" class="mt-2"><code-html>@php echo e( <<<'DOC'
    <chart-line width="100%" height="500px" title="Title" x-name="xAxis" y-name="yAxis" step="middle">@json($data)</chart-line>
DOC
)@endphp</code-html></b-collapse>


<h1 class="mt-3">Step at End</h1>
<div class="mt-3">
    <chart-line width="100%" height="500px" title="Title" x-name="xAxis" y-name="yAxis" step="end">@json($data)</chart-line>
</div>

<b-badge variant="primary" v-b-toggle.step>Source Code</b-badge>
<b-collapse id="step" class="mt-2"><code-html>@php echo e( <<<'DOC'
    <chart-line width="100%" height="500px" title="Title" x-name="xAxis" y-name="yAxis" step="end">@json($data)</chart-line>
DOC
)@endphp</code-html></b-collapse>


@endlvt_example