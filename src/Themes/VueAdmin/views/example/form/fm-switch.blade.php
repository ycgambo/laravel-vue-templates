@lvt_example

<h1 class="mt-3">Switch Basics</h1>
<fm-switch name="switch"></fm-switch>

<h1 class="mt-3">Default on</h1>
<fm-switch name="switch2" on></fm-switch>
<fm-switch name="switch2" value="true"></fm-switch>
<fm-switch name="switch2" value="1" :active=1 :inactive=0></fm-switch>
<fm-switch name="switch2" on value="false"></fm-switch>

<h1 class="mt-3">Custom Width</h1>
<fm-switch name="switch3" width="100"></fm-switch>

<h1 class="mt-3">Disabled</h1>
<fm-switch name="switch4" disabled></fm-switch>

<h1 class="mt-3">Custom Color</h1>
<fm-switch name="switch5" active-color="#13ce66" inactive-color="#ff4949"></fm-switch>

<h1 class="mt-3">Custom Text</h1>
<fm-switch name="switch6" active-text="active" inactive-text="inactive"></fm-switch>

<h1 class="mt-3">Set active value</h1>
<p>The default value uploaded is string "true" or "false"</p>
<fm-switch name="switch7" active="active" inactive="inactive"></fm-switch>

<h1 class="mt-3">Check Submits</h1>
<fm-form method="post" action="/lvt/VueAdmin/example/submit">
    {{ csrf_field() }}
    <fm-switch name="switch2" on></fm-switch>
    <fm-switch name="switch7" active="active" inactive="inactive"></fm-switch>
    <el-button class="pull-right" type="primary" native-type="submit">Check It Out</el-button>
</fm-form>

<h1 class="mt-3">fm-switch Attributes</h1>
<chart-table>
    [
    {"attribute":"name","description":"input name of Switch","type":"string","options":"—","default":"—"},
    {"attribute":"disabled","description":"whether Switch is disabled","type":"boolean","options":"—","default":"false"},
    {"attribute":"on","description":"default on or not","type":"boolean","options":"—","default":"false"},
    {"attribute":"value","description":"default value, higher priority over `on` attribute","type":"boolean / string / number","options":"—","default":"false"},
    {"attribute":"width","description":"width of Switch","type":"number","options":"—","default":"40"},
    {"attribute":"active","description":"switch value when in on state","type":"boolean / string / number","options":"—","default":"true"},
    {"attribute":"inactive","description":"switch value when in off state","type":"boolean / string / number","options":"—","default":"false"},
    {"attribute":"active-text","description":"text displayed when in on state","type":"string","options":"—","default":"—"},
    {"attribute":"inactive-text","description":"text displayed when in off state","type":"string","options":"—","default":"—"},
    {"attribute":"active-color","description":"background color when in on state","type":"string","options":"—","default":"#409EFF"},
    {"attribute":"inactive-color","description":"background color when in off state","type":"string","options":"—","default":"#C0CCDA"}
    ]
</chart-table>

@endlvt_example