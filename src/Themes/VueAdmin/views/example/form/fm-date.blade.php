@lvt_example

<h1 class="mt-3">Date</h1>
<fm-date name="date" type="date"></fm-date>

<h1 class="mt-3">Datetime</h1>
<fm-date name="datetime" type="datetime"></fm-date>

<h1 class="mt-3">Date Range</h1>
<fm-date name="daterange" type="daterange" placeholder="start,end"></fm-date>

<h1 class="mt-3">Datetime Range</h1>
<fm-date name="datetimerange" type="datetimerange" placeholder="start,end"></fm-date>

<h1 class="mt-3">Default Value</h1>
<fm-date name="datetime2" type="datetime" value="{{time()}}}"></fm-date>
<fm-date name="daterange2" type="daterange" value="{{strtotime('-1 day')}},{{strtotime('+1 day')}}"></fm-date>

<h1 class="mt-3">Range Limit</h1>
<fm-date name="date7" type="date" range=",{{time()}}}"></fm-date>
<fm-date name="date8" type="date" range="{{time()}},}"></fm-date>
<fm-date name="date8" type="date" range="{{strtotime('-1 day')}},{{strtotime('+1 day')}}"></fm-date>

<h1 class="mt-3">Disabled</h1>
<fm-date name="date2" type="date" disabled></fm-date>

<h1 class="mt-3">Sizing</h1>
<fm-date name="date3" type="date" size="medium"></fm-date>
<fm-date name="date4" type="date" size="small"></fm-date>
<fm-date name="date5" type="date" size="mini"></fm-date>

<h1 class="mt-3">fm-date Attributes</h1>
<chart-table>
    [
    {"attribute":"name","description":"same as name in native input","type":"string","options":"—","default":"—"},
    {"attribute":"value","description":"default value, ms based timestamp","type":"number","options":"—","default":"—"},
    {"attribute":"range","description":"selectable range, comma separated, ms based timestamp","type":"string","options":"—","default":"—"},
    {"attribute":"readonly","description":"whether DatePicker is read only","type":"boolean","options":"—","default":"false"},
    {"attribute":"disabled","description":"whether DatePicker is disabled","type":"boolean","options":"—","default":"false"},
    {"attribute":"size","description":"size of Input","type":"string","options":"large/small/mini","default":"—"},
    {"attribute":"editable","description":"whether the input is editable","type":"boolean","options":"—","default":"true"},
    {"attribute":"clearable","description":"Whether to show clear button","type":"boolean","options":"—","default":"true"},
    {"attribute":"placeholder","description":"placeholder","type":"string","options":"—","default":"—"},
    {"attribute":"type","description":"type of the picker","type":"string","options":"year/month/date/dates/datetime/ week/datetimerange/daterange","default":"date"},
    {"attribute":"format","description":"format of the displayed value in the input box","type":"string","options":"see date formats","default":"yyyy-MM-dd"}
    ]
</chart-table>

<h1 class="mt-3">Check Submits</h1>
<fm-form method="post" action="/lvt/VueAdmin/example//submit">
    @csrf
    <fm-date name="date" type="date"></fm-date>
    <fm-date name="daterange" type="daterange" placeholder="start,end"></fm-date>
    <el-button class="pull-right" type="primary" native-type="submit">Check It Out</el-button>
</fm-form>

@endlvt_example