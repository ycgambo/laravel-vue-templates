@lvt_example

<h1 class="mt-3">Input Basics</h1>
<fm-input name="aa"></fm-input>

<h1 class="mt-3">Placeholder</h1>
<fm-input name="bb" placeholder="new placeholder"></fm-input>

<h1 class="mt-3">Tip</h1>
<fm-input name="tip" tip="Please input a number"></fm-input>

<h1 class="mt-3">Default Value</h1>
<fm-input name="cc" value="haha"></fm-input>

<h1 class="mt-3">Disabled</h1>
<fm-input name="dd" disabled></fm-input>

<h1 class="mt-3">Readonly</h1>
<fm-input name="ee" value="readonly" readonly></fm-input>

<h1 class="mt-3">Sizing</h1>
<fm-input name="ff" size="medium"></fm-input>
<fm-input name="gg" size="small"></fm-input>
<fm-input name="hh" size="mini"></fm-input>

<h1 class="mt-3">Minimum / Maximum</h1>
<p>Minimum is buggy</p>
<fm-input name="ii" min="2" max="3"></fm-input>

<h1 class="mt-3">Textarea</h1>
<fm-input name="jj" type="textarea" tip="haha"></fm-input>
<fm-input name="kk" type="textarea" rows="4"></fm-input>

<h1 class="mt-3">Numbers</h1>
<fm-number name="ll"></fm-number>
<fm-number name="mm" step="10" value="10"></fm-number>
<fm-number name="nn" precision="2"></fm-number>
<fm-number name="oo" controls="false"></fm-number>
<fm-number name="pp" controls_position="right"></fm-number>

<h1 class="mt-3">fm-input Attributes</h1>
<chart-table>
    [
    {"attribute":"type","description":"type of input","type":"string","options":"text, textarea and other native input types","default":"text"},
    {"attribute":"value","description":"binding value","type":"string / number","options":"—","default":"—"},
    {"attribute":"max","description":"same as maxlength in native input","type":"number","options":"—","default":"—"},
    {"attribute":"min","description":"same as minlength in native input","type":"number","options":"—","default":"—"},
    {"attribute":"placeholder","description":"placeholder of Input","type":"string","options":"—","default":"—"},
    {"attribute":"clearable","description":"whether to show clear button","type":"boolean","options":"—","default":"false"},
    {"attribute":"disabled","description":"whether Input is disabled","type":"boolean","options":"—","default":"false"},
    {"attribute":"size","description":"size of Input, works when type is not 'textarea'","type":"string","options":"medium / small / mini","default":"—"},
    {"attribute":"rows","description":"number of rows of textarea, only works when type is 'textarea'","type":"number","options":"—","default":"2"},
    {"attribute":"name","description":"same as name in native input","type":"string","options":"—","default":"—"},
    {"attribute":"readonly","description":"same as readonly in native input","type":"boolean","options":"—","default":"false"},
    {"attribute":"max","description":"same as max in native input","type":"—","options":"—","default":"—"},
    {"attribute":"min","description":"same as min in native input","type":"—","options":"—","default":"—"},
    {"attribute":"resize","description":"control the resizability","type":"string","options":"none, both, horizontal, vertical","default":"—"},
    {"attribute":"tip","description":"tips of Input when hover","type":"string","options":"—","default":"—"}
    ]
</chart-table>

<h1 class="mt-3">fm-number Attributes</h1>
<chart-table>
    [
    {"attribute":"value","description":"binding value","type":"number","options":"—","default":"—"},
    {"attribute":"min","description":"the minimum allowed value","type":"number","options":"—","default":"-Infinity"},
    {"attribute":"max","description":"the maximum allowed value","type":"number","options":"—","default":"Infinity"},
    {"attribute":"step","description":"incremental step","type":"number","options":"—","default":"1"},
    {"attribute":"precision","description":"precision of input value","type":"number","options":"—","default":"—"},
    {"attribute":"size","description":"size of the component","type":"string","options":"large/small","default":"—"},
    {"attribute":"disabled","description":"whether the component is disabled","type":"boolean","options":"—","default":"false"},
    {"attribute":"controls","description":"whether to enable the control buttons","type":"boolean","options":"—","default":"true"},
    {"attribute":"controls-position","description":"position of the control buttons","type":"string","options":"right","default":"-"},
    {"attribute":"name","description":"same as name in native input","type":"string","options":"—","default":"—"}
    ]
</chart-table>

<h1 class="mt-3">Todo</h1>
<p>Mixed input</p>

<h1 class="mt-3">Check Submits</h1>
<fm-form method="post" action="/lvt/VueAdmin/example/submit">
    {{ csrf_field() }}
    <fm-input name="bb" placeholder="new placeholder"></fm-input>
    <fm-number name="ll"></fm-number>
    <el-button class="pull-right" type="primary" native-type="submit">Check It Out</el-button>
</fm-form>

@endlvt_example