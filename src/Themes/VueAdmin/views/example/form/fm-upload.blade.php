@lvt_example

<h1 class="mt-3">Default</h1>
<fm-upload name="file1" action="/lvt/VueAdmin/example/fm_upload"></fm-upload>

<h1 class="mt-3">List type</h1>
<fm-upload name="file1" action="/lvt/VueAdmin/example/fm_upload" list-type="none"></fm-upload>
<fm-upload name="file1" action="/lvt/VueAdmin/example/fm_upload" list-type="text"></fm-upload>
<fm-upload name="file1" action="/lvt/VueAdmin/example/fm_upload" list-type="picture-card"></fm-upload>

<h1 class="mt-3">Multiple</h1>
<fm-upload name="file1" action="/lvt/VueAdmin/example/fm_upload" list-type="picture-card" multiple></fm-upload>
<fm-upload name="file1" action="/lvt/VueAdmin/example/fm_upload" list-type="picture-card" multiple :multiple-limit="1"></fm-upload>

<h1 class="mt-3">Default Value</h1>
<p>Upload trigger will hide when file num limit is reached</p>
<fm-upload name="file1" action="/lvt/VueAdmin/example/fm_upload" value='/images/img.jpg,/images/img.jpg'></fm-upload>

<h1 class="mt-3">Custom Trigger</h1>
<fm-upload name="file1" action="/lvt/VueAdmin/example/fm_upload">
    <el-button size="small" type="primary">Click to upload</el-button>
</fm-upload>

<h1 class="mt-3">Check Submits</h1>
<fm-form method="post" action="/lvt/VueAdmin/example/submit">
    {{ csrf_field() }}
    <fm-upload label="upload" name="file1" action="/lvt/VueAdmin/example/fm_upload" list-type="picture-card" multiple></fm-upload>
    <el-button class="pull-right" type="primary" native-type="submit">Check It Out</el-button>
</fm-form>

@endlvt_example