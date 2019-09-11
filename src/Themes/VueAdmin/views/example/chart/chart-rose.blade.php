@lvt_example

@php
    $data = [
        ["value" => 10, "name" => "rose1"],
        ["value" => 5, "name" => "rose2"],
        ["value" => 15, "name" => "rose3"],
        ["value" => 25, "name" => "rose4"],
        ["value" => 20, "name" => "rose5"]
    ];
@endphp

<code-php>{!! <<<'DOC'
    $data = [
        ["value" => 10, "name" => "rose1"],
        ["value" => 5, "name" => "rose2"],
        ["value" => 15, "name" => "rose3"],
        ["value" => 25, "name" => "rose4"],
        ["value" => 20, "name" => "rose5"]
    ];
DOC;
; !!}</code-php>


<h1 class="mt-3">Area</h1>
<div class="mt-3">
    <chart-rose width="100%" height="500px" title="Area" type="area">@json($data)</chart-rose>
</div>

<b-badge class="mt-3" v-b-toggle.area>source code</b-badge>
<b-collapse id="area" class="mt-2"><code-html>@php echo e( <<<'DOC'
    <chart-rose width="100%" height="500px" title="Area" type="area">@json($data)</chart-rose>
DOC
)@endphp</code-html></b-collapse>


<h1 class="mt-3">Radius</h1>
<div class="mt-3">
    <chart-rose width="100%" height="500px" title="Radius" type="radius">@json($data)</chart-rose>
</div>

<b-badge class="mt-3" v-b-toggle.radius>source code</b-badge>
<b-collapse id="radius" class="mt-2"><code-html>@php echo e( <<<'DOC'
    <chart-rose width="100%" height="500px" title="Radius" type="radius">@json($data)</chart-rose>
DOC
)@endphp</code-html></b-collapse>


@endlvt_example