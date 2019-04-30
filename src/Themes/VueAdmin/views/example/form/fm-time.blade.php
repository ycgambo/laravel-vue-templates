@lvt_example

<h1 class="mt-3">Time Basics</h1>
<fm-time name="time"></fm-time>

<h1 class="mt-3">Time Range</h1>
<fm-time name="time" is-range placeholder="start, end"></fm-time>

<h1 class="mt-3">Range Limits</h1>
<fm-time name="time" range="09:30:00 - 12:00:00, 14:30:00 - 18:30:00"></fm-time>

<h1 class="mt-3">Default Value</h1>
<fm-time name="time" value="{{time()}}"></fm-time>
<fm-time name="time" is-range value="{{strtotime('-1 hour')}},{{strtotime('+1 hour')}}"></fm-time>

<h1 class="mt-3">Disabled</h1>
<fm-time name="time" disabled placeholder="disabled"></fm-time>

<h1 class="mt-3">Sizing</h1>
<fm-time name="time" size="medium"></fm-time>
<fm-time name="time" size="small"></fm-time>
<fm-time name="time" size="mini"></fm-time>

<h1 class="mt-3">fm-time Attributes</h1>
<chart-table>
    [
    {"attribute":"name","description":"same as name in native input","type":"string","options":"—","default":"—"},
    {"attribute":"value","description":"default value, ms based timestamp","type":"number","options":"—","default":"—"},
    {"attribute":"is-range","description":"whether to pick a time range", "type":"boolean","options":"—","default":"false"},
    {"attribute":"range","description":"selectable range, comma separated, ms based timestamp","type":"string","options":"—","default":"—"},
    {"attribute":"readonly","description":"whether DatePicker is read only","type":"boolean","options":"—","default":"false"},
    {"attribute":"disabled","description":"whether DatePicker is disabled","type":"boolean","options":"—","default":"false"},
    {"attribute":"size","description":"size of Input","type":"string","options":"large/small/mini","default":"—"},
    {"attribute":"editable","description":"whether the input is editable","type":"boolean","options":"—","default":"true"},
    {"attribute":"clearable","description":"Whether to show clear button","type":"boolean","options":"—","default":"true"},
    {"attribute":"placeholder","description":"placeholder","type":"string","options":"—","default":"—"},
    {"attribute":"format","description":"format of the picker","type":"string","options":"hour HH, minute mm, second ss, AM/PM A","default":"HH:mm:ss"}
    ]
</chart-table>

<h1 class="mt-3">Check Submits</h1>
<fm-form method="post" action="/lvt/VueAdmin/example//submit">
    @csrf
    <fm-time name="time"></fm-time>
    <fm-time name="time2" is-range placeholder="start, end"></fm-time>
    <el-button class="pull-right" type="primary" native-type="submit">Check It Out</el-button>
</fm-form>

@endlvt_example