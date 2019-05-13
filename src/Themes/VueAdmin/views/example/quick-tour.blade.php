@lvt_example


@php
    $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
    ];

    $data = [
        'CMCC' => [220, 182, 191, 134, 150, 120, 110, 125, 145, 122, 165, 122],
        'C0CC' => [220, 182, 125, 145, 122, 191, 34, 50, 120, 110, 165, 122],
        'CUCC' => [220, 182, 125, 15, 122, 191, 134, 150, 120, 110, 165, 122],
    ];
    $data['ref'] = ["13:00", "13:05", "13:10", "13:15", "13:20", "13:25", "13:30", "13:35", "13:40", "13:45", "13:50", "13:55"];

    $editor = <<<'DOC'
<p align="center">&nbsp;</p> <p align="center"><font size="4" face="arial black,sans-serif"><strong>I AM <em><font size="5" color="#FF0000" face="comic sans ms,sans-serif">HOT</font></em></strong></font></p> <p align="center">&nbsp;</p> <p align="center"><font size="4" face="arial black,sans-serif"><strong><em><font size="5" color="#FF0000" face="comic sans ms,sans-serif"><img src="/images/img.jpg" alt="" width="128" height="128" /></font></em></strong></font></p>
DOC;
    $json = <<<'DOC'
[
 {
  _id: "post 1",
  "author": "Bob",
  "content": "...",
  "page_views": 5
 },
 {
  "_id": "post 2",
  "page_views": 9
 },
]
DOC;
@endphp

<b-breadcrumb>
    <li class="breadcrumb-item"><a href="/lvt/VueAdmin/example/dashboard" target="_self" class="">Home</a></li>
    <li class="breadcrumb-item active"><span>Quick Tour</span></li>
</b-breadcrumb>

<el-row class="mt-3">
    <el-card shadow="hover">
        <div slot="header">
            <span>Chart</span>
        </div>

        <chart-line height="400px" smooth="false" x-name="xAxis" y-name="yAxis">@json($data)</chart-line>
    </el-card>
</el-row>

<el-row class="mt-3">
    <el-col :span="12">
        <el-card shadow="hover">
            <div slot="header">
                <span>Form</span>
            </div>

            <fm-form action="/lvt/VueAdmin/example/submit" method="post" size="small" rules='@json($rules)'>
                {{ csrf_field() }}
                <fm-input label="Name" name="name"></fm-input>
                <fm-input label="Email" name="email"></fm-input>
                <fm-radio label="Gender" checked="0">
                    <el-radio name="gender" label="0" border>Male</el-radio>
                    <el-radio name="gender" label="1" border>Female</el-radio>
                </fm-radio>
                <fm-date label="Birth" name="birth" type="datetime"></fm-date>
                <fm-select label="Hometown" name="hometown">
                    <el-option value="Washington" label="Washington">Washington</el-option>
                    <el-option value="Chicago" label="Chicago">Chicago</el-option>
                </fm-select>
                <fm-checkbox label="Hobbies">
                    <el-checkbox name="code" label="Code" border checked>Code</el-checkbox>
                    <el-checkbox name="eat" label="Eat" border>Eat</el-checkbox>
                </fm-checkbox>
                <fm-switch label="Remember Me" name="remember" on active-color="#13ce66" inactive-color="#ff4949"
                           active-text="Yes"
                           inactive-text="No"></fm-switch>
                <el-form-item label="Describe Yourself">
                    <text-editor name="describe" upload_url="/lvt/VueAdmin/example/img_upload">{!! $editor !!}</text-editor>
                </el-form-item>
                <el-form-item>
                    <el-button class="pull-right" type="primary" native-type="submit">Check It Out</el-button>
                </el-form-item>
            </fm-form>
        </el-card>
    </el-col>

    <el-col :span="11" :offset="1">
        <el-card shadow="hover">
            <div slot="header">
                <span>Notifications</span>
            </div>
            <el-button onclick="__notify(123)">Click Me</el-button>
            <el-button onclick="__confirm(123)">Click Me</el-button>
        </el-card>

        <el-card shadow="hover" class="mt-2">
            <div slot="header">
                <span>Upload</span>
            </div>

            <el-upload name="file1" action="/lvt/VueAdmin/example/upload" multiple drag
                       :headers="{'X-CSRF-TOKEN': '{{csrf_token()}}'}">
                <i class="el-icon-upload"></i>
                <div class="el-upload__text">Drop file here or <em>click to upload</em></div>

                <div class="el-upload__tip" slot="tip">jpg/png files with a size less than 500kb</div>
            </el-upload>
        </el-card>

        <el-card shadow="hover" class="mt-2">
            <div slot="header">
                <span>Code</span>
            </div>

            <code-json>{!! $json !!}</code-json>
        </el-card>

    </el-col>
</el-row>


@endlvt_example