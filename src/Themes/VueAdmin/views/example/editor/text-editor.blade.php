@lvt_example

<h1 class="mt-3">Default</h1>
<div class="mt-3">
    <text-editor upload_url="/lvt/VueAdmin/example/img_upload"></text-editor>
</div>

<b-badge class="mt-3" v-b-toggle.default>Source Code</b-badge>
<b-collapse id="default" class="mt-2">
    <code-html>@php echo e( <<<'TXTDOC'
    <text-editor autosave="text" upload_url="/lvt/VueAdmin/example/img_upload"></text-editor>
TXTDOC
)@endphp</code-html>
</b-collapse>


<h1 class="mt-3">Height</h1>
<div class="mt-3">
    <text-editor upload_url="/lvt/VueAdmin/example/img_upload" min_height="300px" max_height="400px"></text-editor>
</div>

<b-badge class="mt-3" v-b-toggle.height>Source Code</b-badge>
<b-collapse id="height" class="mt-2">
    <code-html>@php echo e( <<<'DOC'
    <text-editor min_height="300px" max_height="400px"></text-editor>
DOC
)@endphp</code-html>
</b-collapse>


<h1 class="mt-3">AutoSave</h1>
<p class="mt-3">Restore lost work by selecting Restore last draft from the File menu</p>
<p class="mt-3">Editors with the same autosave prop will both changes the same saved content</p>
<div class="mt-3">
    <text-editor autosave="text" upload_url="/lvt/VueAdmin/example/img_upload">{!! <<<'DOC'
        <p align="center">test<font face="arial black,sans-serif">ijjfoaodfajofao<font size="5">asfdasf<strike>asdfasf<sub>asfsaf<i>adgasd<sup>asdfs</sup></i></sub></strike></font></font></p> <hr /> <p align="left"><font face="arial black,sans-serif"><font size="5"><strike><sub><i><sup>adf</sup></i></sub></strike></font></font></p> <table style="border-collapse: collapse; width: 100%;" border="1"> <tbody> <tr> <td style="width: 16.6667%;">&nbsp;</td> <td style="width: 16.6667%;">&nbsp;</td> <td style="width: 16.6667%;">&nbsp;</td> <td style="width: 16.6667%;">&nbsp;</td> <td style="width: 16.6667%;">&nbsp;</td> <td style="width: 16.6667%;">&nbsp;</td> </tr> <tr> <td style="width: 16.6667%;">&nbsp;</td> <td style="width: 16.6667%;">&nbsp;</td> <td style="width: 16.6667%;">&nbsp;</td> <td style="width: 16.6667%;">&nbsp;</td> <td style="width: 16.6667%;">&nbsp;</td> <td style="width: 16.6667%;">&nbsp;</td> </tr> </tbody> </table> <pre class="language-php"><code>&lt;?php exit(); </code></pre> <blockquote> <p align="left"><b>fasdfasf<i>fsadfdasgasf</i></b>asaasdfasfgasg</p> </blockquote> <hr /> <p align="right">dfafasfdasdfsadf</p>
DOC;
; !!}</text-editor>
</div>

<b-badge class="mt-3" v-b-toggle.autosave>Source Code</b-badge>
<b-collapse id="autosave" class="mt-2">
    <code-html>@php echo e( <<<'TXTDOC'
    <text-editor upload_url="/lvt/VueAdmin/example/img_upload">{!! <<<'DOC'
        <p align="center">test<font face="arial black,sans-serif">ijjfoaodfajofao<font size="5">asfdasf<strike>asdfasf<sub>asfsaf<i>adgasd<sup>asdfs</sup></i></sub></strike></font></font></p> <hr /> <p align="left"><font face="arial black,sans-serif"><font size="5"><strike><sub><i><sup>adf</sup></i></sub></strike></font></font></p> <table style="border-collapse: collapse; width: 100%;" border="1"> <tbody> <tr> <td style="width: 16.6667%;">&nbsp;</td> <td style="width: 16.6667%;">&nbsp;</td> <td style="width: 16.6667%;">&nbsp;</td> <td style="width: 16.6667%;">&nbsp;</td> <td style="width: 16.6667%;">&nbsp;</td> <td style="width: 16.6667%;">&nbsp;</td> </tr> <tr> <td style="width: 16.6667%;">&nbsp;</td> <td style="width: 16.6667%;">&nbsp;</td> <td style="width: 16.6667%;">&nbsp;</td> <td style="width: 16.6667%;">&nbsp;</td> <td style="width: 16.6667%;">&nbsp;</td> <td style="width: 16.6667%;">&nbsp;</td> </tr> </tbody> </table> <pre class="language-php"><code>&lt;?php exit(); </code></pre> <blockquote> <p align="left"><b>fasdfasf<i>fsadfdasgasf</i></b>asaasdfasfgasg</p> </blockquote> <hr /> <p align="right">dfafasfdasdfsadf</p>
DOC;
; !!}</text-editor>
TXTDOC
)@endphp</code-html>
</b-collapse>


<h1 class="mt-3">Check Submits</h1>
<fm-form method="post" action="/lvt/VueAdmin/example/submit">
    <text-editor name="input"></text-editor>
    {{ csrf_field() }}
    <el-button class="pull-right" type="primary" native-type="submit">Check It Out</el-button>
</fm-form>

@endlvt_example
