@lvt_example

<h1 class="mt-3">Click</h1>
<el-upload name="file1" action="/lvt/VueAdmin/example//upload" multiple :headers="{'X-CSRF-TOKEN': '{{csrf_token()}}'}">
    <el-button size="small" type="primary">Click to upload</el-button>

    <div slot="tip" class="el-upload__tip">jpg/png files with a size less than 500kb</div>
</el-upload>

<h1 class="mt-3">Drag</h1>
<el-upload name="file1" action="/lvt/VueAdmin/example//upload" multiple drag :headers="{'X-CSRF-TOKEN': '{{csrf_token()}}'}">
    <i class="el-icon-upload"></i>
    <div class="el-upload__text">Drop file here or <em>click to upload</em></div>

    <div class="el-upload__tip" slot="tip">jpg/png files with a size less than 500kb</div>
</el-upload>

@endlvt_example