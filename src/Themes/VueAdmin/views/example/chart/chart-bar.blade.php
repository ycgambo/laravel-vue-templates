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


<h1 class="mt-3">Default</h1>
<div class="mt-3">
    <chart-bar width="100%" height="500px" title="Title" x-name="xAxis" y-name="yAxis">@json($data)</chart-bar>
</div>

<b-badge variant="primary" v-b-toggle.default>Source Code</b-badge>
<b-collapse id="default" class="mt-2"><code-html>@php echo e( <<<'DOC'
    <chart-bar width="100%" height="500px" title="Title" x-name="xAxis" y-name="yAxis">@json($data)</chart-bar>
DOC
)@endphp</code-html></b-collapse>


<h1 class="mt-3">Stack</h1>
<div class="mt-3">
    <chart-bar width="100%" height="500px" title="Title" x-name="xAxis" y-name="yAxis" stack>@json($data)</chart-bar>
</div>

<b-badge variant="primary" v-b-toggle.stack>Source Code</b-badge>
<b-collapse id="stack" class="mt-2"><code-html>@php echo e( <<<'DOC'
    <chart-bar width="100%" height="500px" title="Title" x-name="xAxis" y-name="yAxis" stack>@json($data)</chart-bar>
DOC
)@endphp</code-html></b-collapse>


@endlvt_example