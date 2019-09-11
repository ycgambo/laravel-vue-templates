@lvt_example

@section('js')
    <script>
        window.filterFunc = (input) => {
          console.log(input)
          return [
            {
              label: 'xxx',
              value: 'xxx'
            }
          ]
        }
        __destructor = () => {
          window.filterFunc = undefined
        }
    </script>
@endsection

<h1 class="mt-3">Select Basics</h1>
<fm-select name="select1" value="value">
    <el-option value="value" label="label" disabled></el-option>
    <el-option value="value2" label="label2"></el-option>
    <el-option value="value3" label="label3"></el-option>
</fm-select>

<h1 class="mt-3">Filter</h1>
<fm-select name="select1" value="value" filter="filterFunc">
    <el-option value="value" label="label"></el-option>
</fm-select>

<b-badge class="mt-3" v-b-toggle.filter>Source Code</b-badge>
<b-collapse id="filter" class="mt-2"><code-html>@php echo e( <<<'DOC'
<fm-select name="select1" value="value" filter="filterFunc">
    <el-option value="value" label="label"></el-option>
</fm-select>

@section('js')
    <script>
        window.filterFunc = (input) => {
          console.log(input)
          return [
            {
              label: 'xxx',
              value: 'xxx'
            }
          ]
        }
        __destructor = () => {
          window.filterFunc = undefined
        }
    </script>
@endsection
DOC
)@endphp</code-html></b-collapse>

<h1 class="mt-3">Multiple</h1>
<fm-select name="select2" multiple>
    <el-option value="value" label="label"></el-option>
    <el-option value="value2" label="label2"></el-option>
    <el-option value="value3" label="label3"></el-option>
</fm-select>

<h1 class="mt-3">Clearable</h1>
<fm-select name="select8" clearable>
    <el-option value="value" label="label"></el-option>
    <el-option value="value2" label="label2"></el-option>
    <el-option value="value3" label="label3"></el-option>
</fm-select>

<h1 class="mt-3">Multiple Limits</h1>
<fm-select name="select3" multiple multiple-limit="3">
    <el-option value="value" label="label"></el-option>
    <el-option value="value2" label="label2"></el-option>
    <el-option value="value3" label="label3"></el-option>
</fm-select>

<h1 class="mt-3">Multiple Collapse</h1>
<fm-select name="select4" multiple collapse-tags>
    <el-option value="value" label="label"></el-option>
    <el-option value="value2" label="label2"></el-option>
    <el-option value="value3" label="label3"></el-option>
</fm-select>

<h1 class="mt-3">Filterable</h1>
<fm-select name="select5" filterable>
    <el-option value="value" label="London"></el-option>
    <el-option value="value2" label="US"></el-option>
    <el-option value="value3" label="China"></el-option>
</fm-select>

<h1 class="mt-3">Disable All</h1>
<fm-select name="select6" disabled>
    <el-option value="value" label="label"></el-option>
    <el-option value="value2" label="label2"></el-option>
    <el-option value="value3" label="label3"></el-option>
    <el-option value="value4" label="label4"></el-option>
    <el-option value="value5" label="label5"></el-option>
    <el-option value="value5" label="label6"></el-option>
</fm-select>

<h1 class="mt-3">Sizing</h1>
<fm-select name="select7" size="small">
    <el-option value="value" label="label"></el-option>
    <el-option value="value2" label="label2"></el-option>
    <el-option value="value3" label="label3"></el-option>
</fm-select>

<h1 class="mt-3">fm-select Attributes</h1>
<chart-table>
    [
    {"attribute":"name","description":"the name attribute of select input","type":"string","options":"—","default":"—"},
    {"attribute":"value","description":"binding value","type":"string","options":"—","default":"—"},
    {"attribute":"multiple","description":"whether multiple-select is activated","type":"boolean","options":"—","default":"false"},
    {"attribute":"filter","description":"a window var which is a filter callback","type":"string","options":"—","default":"—"}
    {"attribute":"disabled","description":"whether Select is disabled","type":"boolean","options":"—","default":"false"},
    {"attribute":"size","description":"size of Input","type":"string","options":"large/small/mini","default":"—"},
    {"attribute":"clearable","description":"whether single select can be cleared","type":"boolean","options":"—","default":"false"},
    {"attribute":"collapse-tags","description":"whether to collapse tags to a text when multiple selecting","type":"boolean","options":"—","default":"false"},
    {"attribute":"multiple-limit","description":"maximum number of options user can select when multiple is true. No limit when set to 0","type":"number","options":"—","default":"0"},
    {"attribute":"placeholder","description":"placeholder","type":"string","options":"—","default":"Select"},
    {"attribute":"filterable","description":"whether Select is filterable","type":"boolean","options":"—","default":"false"},
    {"attribute":"no-match-text","description":"displayed text when no data matches the filtering query","type":"string","options":"—","default":"No matching data"},
    {"attribute":"creatable","description":"whether creating new items is allowed. To use this, filterable must be true","type":"boolean","options":"—","default":"false"}
    ]
</chart-table>

<h1 class="mt-3">el-option Attributes</h1>
<chart-table>
    [
    {"attribute":"value","description":"value of option","type":"string/number/object","options":"—","default":"—"},
    {"attribute":"label","description":"label of option, same as value if omitted","type":"string/number","options":"—","default":"—"},
    {"attribute":"disabled","description":"whether option is disabled","type":"boolean","options":"—","default":"false"}
    ]
</chart-table>

<h1 class="mt-3">Check Submits</h1>
<fm-form method="post" action="/lvt/VueAdmin/example/submit">
    {{ csrf_field() }}
    <fm-select name="select3" multiple multiple-limit="3">
        <el-option value="value" label="label"></el-option>
        <el-option value="value2" label="label2"></el-option>
        <el-option value="value3" label="label3"></el-option>
    </fm-select>
    <el-button class="pull-right" type="primary" native-type="submit">Check It Out</el-button>
</fm-form>

@endlvt_example