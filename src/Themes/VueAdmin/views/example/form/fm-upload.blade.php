@lvt_example

@section('js')
    <script>
      window.callback = function (response, file, fileList) {
        if (response.url) {
          return ({
            name: file.name,
            uid: file.uid,
            url: response.url,
          })
        }
      }
      __destructor = () => {
        window.callback = undefined
      }
    </script>
@endsection

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

<h1 class="mt-3">Custom Callback</h1>
<fm-upload name="file1" action="/lvt/VueAdmin/example/fm_upload" callback="callback"></fm-upload>

<b-badge class="mt-3" v-b-toggle.callback>Source Code</b-badge>
<b-collapse id="callback" class="mt-2"><code-html>@php echo e( <<<'DOC'
<fm-upload name="file1" action="/lvt/VueAdmin/example/fm_upload" callback="callback">
    <el-button size="small" type="primary">Click to upload</el-button>
</fm-upload>

@section('js')
    <script>
      window.callback = function (response, file, fileList) {
        if (response.url) {
          return ({
            name: file.name,
            uid: file.uid,
            url: response.url,
          })
        }
      }
      __destructor = () => {
        window.callback = undefined
      }
    </script>
@endsection
DOC
)@endphp</code-html></b-collapse>

<h1 class="mt-3">Check Submits</h1>
<fm-form method="post" action="/lvt/VueAdmin/example/submit">
    {{ csrf_field() }}
    <fm-upload label="upload" name="file1" action="/lvt/VueAdmin/example/fm_upload" list-type="picture-card" multiple></fm-upload>
    <el-button class="pull-right" type="primary" native-type="submit">Check It Out</el-button>
</fm-form>

@endlvt_example