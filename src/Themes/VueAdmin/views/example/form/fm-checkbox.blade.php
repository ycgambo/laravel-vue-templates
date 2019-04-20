@example

<h1 class="mt-3">Checkbox Basics</h1>
<fm-checkbox>
    <el-checkbox name="aa" label="1"></el-checkbox>
    <el-checkbox name="ab" label="2" border>Washington</el-checkbox>
    <el-checkbox name="ac" label="3" disabled>Chicago</el-checkbox>
</fm-checkbox>

<h1 class="mt-3">Button Style</h1>
<fm-checkbox>
    <el-checkbox-button name="ba" label="1"></el-checkbox-button>
    <el-checkbox-button name="bb" label="2">Washington</el-checkbox-button>
    <el-checkbox-button name="bc" label="3" disabled>Chicago</el-checkbox-button>
</fm-checkbox>

<h1 class="mt-3">Default Value</h1>
<fm-checkbox value="Chicago,New York">
    <el-checkbox name="ca" label="New York"></el-checkbox>
    <el-checkbox name="cb" label="Washington"></el-checkbox>
    <el-checkbox name="cc" label="Chicago"></el-checkbox>
</fm-checkbox>

<h1 class="mt-3">Disable All</h1>
<fm-checkbox disabled>
    <el-checkbox name="da" label="China"></el-checkbox>
    <el-checkbox name="db" label="Los Angeles"></el-checkbox>
</fm-checkbox>

<h1 class="mt-3">Sizing</h1>
<fm-checkbox>
    <el-checkbox name="ea" label="4" border>Normal</el-checkbox>
    <el-checkbox name="eb" label="5" border size="medium">Medium</el-checkbox>
</fm-checkbox>
<fm-checkbox size="small">
    <el-checkbox name="fa" label="6" border>Small</el-checkbox>
    <el-checkbox name="fb" label="6" border size="mini">Mini</el-checkbox>
</fm-checkbox>

<h1 class="mt-3">Minimum / Maximum</h1>
<fm-checkbox min="1" max="2">
    <el-checkbox name="ha" label="New York"></el-checkbox>
    <el-checkbox name="hb" label="Washington"></el-checkbox>
    <el-checkbox name="hc" label="Chicago"></el-checkbox>
</fm-checkbox>

<h1 class="mt-3">el-checkbox Attributes</h1>
<chart-table>
    [
    {"attribute":"label","description":"value of the Checkbox when used inside a checkbox-group","type":"string / number / boolean","options":"—","default":"—"},
    {"attribute":"true-label","description":"value of the Checkbox if it's checked","type":"string / number","options":"—","default":"—"},
    {"attribute":"false-label","description":"value of the Checkbox if it's not checked","type":"string / number","options":"—","default":"—"},
    {"attribute":"disabled","description":"whether the Checkbox is disabled","type":"boolean","options":"—","default":"false"},
    {"attribute":"border","description":"whether to add a border around Checkbox","type":"boolean","options":"—","default":"false"},
    {"attribute":"size","description":"size of the Checkbox, only works when border is true","type":"string","options":"medium / small / mini","default":"—"},
    {"attribute":"name","description":"native 'name' attribute","type":"string","options":"—","default":"—"},
    {"attribute":"checked","description":"if the Checkbox is checked","type":"boolean","options":"—","default":"false"},
    {"attribute":"indeterminate","description":"same as indeterminate in native checkbox","type":"boolean","options":"—","default":"false"}
    ]
</chart-table>

<h1 class="mt-3">fm-checkbox Attributes</h1>
<chart-table>
    [
    {"attribute":"value","description":"default value, comma separated","type":"string","options":"-","default":"—"},
    {"attribute":"size","description":"size of checkbox buttons or bordered checkboxes","type":"string","options":"medium / small / mini","default":"—"},
    {"attribute":"disabled","description":"whether the nesting checkboxes are disabled","type":"boolean","options":"—","default":"false"},
    {"attribute":"min","description":"minimum number of checkbox checked","type":"number","options":"—","default":"—"},
    {"attribute":"max","description":"maximum number of checkbox checked","type":"number","options":"—","default":"—"}
    ]
</chart-table>

<h1 class="mt-3">Check Submits</h1>
<fm-form method="post" action="/example/submit">
    @csrf
    <fm-checkbox value="Chicago,New York">
        <el-checkbox name="new_york" label="New York"></el-checkbox>
        <el-checkbox name="washington" label="Washington"></el-checkbox>
        <el-checkbox name="chicago" label="Chicago"></el-checkbox>
    </fm-checkbox>
    <el-button class="pull-right" type="primary" native-type="submit">Check It Out</el-button>
</fm-form>

@endexample