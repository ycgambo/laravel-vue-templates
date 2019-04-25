@lvt_example

<h1 class="mt-3">Radio Basics</h1>
<fm-radio>
    <el-radio name="el_radio" label="1"></el-radio>
    <el-radio name="el_radio" label="2" border>Bordered</el-radio>
    <el-radio name="el_radio" label="3" disabled>Disabled</el-radio>
</fm-radio>

<h1 class="mt-3">Button Style</h1>
<fm-radio>
    <el-radio-button name="el_radio_btn" label="1"></el-radio-button>
    <el-radio-button name="el_radio_btn" label="2">Washington</el-radio-button>
    <el-radio-button name="el_radio_btn" label="3" disabled>Chicago</el-radio-button>
</fm-radio>

<h1 class="mt-3">Default Value</h1>
<fm-radio value="Chicago">
    <el-radio-button name="12" label="New York"></el-radio-button>
    <el-radio-button name="12" label="Washington"></el-radio-button>
    <el-radio-button name="12" label="Chicago"></el-radio-button>
</fm-radio>

<h1 class="mt-3">Disable All</h1>
<fm-radio disabled>
    <el-radio-button name="1234" label="China"></el-radio-button>
    <el-radio-button name="1234" label="Los Angeles"></el-radio-button>
</fm-radio>

<h1 class="mt-3">Sizing</h1>
<p>Notice the changed size. Bigger one takes effect.</p>
<fm-radio>
    <el-radio-button name="el_radio_btn" label="4">Normal</el-radio-button>
    <el-radio-button name="el_radio_btn" label="4" size="medium">Medium</el-radio-button>
</fm-radio>
<fm-radio size="small">
    <el-radio-button name="el_radio_btn" label="5">Small</el-radio-button>
    <el-radio-button name="el_radio_btn" label="6" size="mini">Mini</el-radio-button>
</fm-radio>

<h1 class="mt-3">Cross Group Effects</h1>
<p>These radios have same name.</p>
<fm-radio>
    <el-radio-button name="123" label="New York"></el-radio-button>
    <el-radio-button name="123" label="Washington"></el-radio-button>
    <el-radio-button name="123" label="Chicago"></el-radio-button>
</fm-radio>
<fm-radio>
    <el-radio-button name="123" label="China"></el-radio-button>
</fm-radio>

<h1 class="mt-3">el-radio Attributes</h1>
<chart-table>
    [
    {"attribute":"label","description":"the value of Radio","type":"string / number / boolean","options":"—","default":"—"},
    {"attribute":"disabled","description":"whether Radio is disabled","type":"boolean","options":"—","default":"false"},
    {"attribute":"border","description":"whether to add a border around Radio","type":"boolean","options":"—","default":"false"},
    {"attribute":"size","description":"size of the Radio, only works when border is true","type":"string","options":"medium / small / mini","default":"—"},
    {"attribute":"name","description":"native 'name' attribute","type":"string","options":"—","default":"—"}
    ]
</chart-table>

<h1 class="mt-3">fm-radio Attributes</h1>
<chart-table>
    [
    {"attribute":"value","description":"default value","type":"string","options":"-","default":"—"},
    {"attribute":"size","description":"size of checkbox buttons or bordered checkboxes","type":"string","options":"medium / small / mini","default":"—"},
    {"attribute":"disabled","description":"whether the nesting checkboxes are disabled","type":"boolean","options":"—","default":"false"}
    ]
</chart-table>

<h1 class="mt-3">Check Submits</h1>
<fm-form method="post" action="/example/submit">
    @csrf
    <fm-radio value="Chicago">
        <el-radio-button name="city" label="New York"></el-radio-button>
        <el-radio-button name="city" label="Washington"></el-radio-button>
        <el-radio-button name="city" label="Chicago"></el-radio-button>
    </fm-radio>
    <el-button class="pull-right" type="primary" native-type="submit">Check It Out</el-button>
</fm-form>

@endlvt_example