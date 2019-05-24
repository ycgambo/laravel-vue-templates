@lvt_example


@php
    $rules = [
        'name' => 'required|min:3',
        'email' => 'required|email',
    ];
@endphp


<h1 class="mt-3">General Usage</h1>
<div class="mt-3">
    <fm-form action="/lvt/VueAdmin/example/submit" method="post" size="small" rules='@json($rules)'>
        {{ csrf_field() }}
        <fm-input label="Name" name="name" tip="tips"></fm-input>
        <fm-date label="Birth" name="birth" type="datetime"></fm-date>
        <fm-radio label="Gender" checked="0">
            <el-radio name="gender" label="0" border>Male</el-radio>
            <el-radio name="gender" label="1" border>Female</el-radio>
        </fm-radio>
        <fm-select label="Hometown" name="hometown">
            <el-option value="Washington" label="Washington">Washington</el-option>
            <el-option value="Chicago" label="Chicago">Chicago</el-option>
        </fm-select>
        <fm-checkbox label="Hobbies">
            <el-checkbox name="code" label="Code" border checked>Code</el-checkbox>
            <el-checkbox name="eat" label="Eat" border>Eat</el-checkbox>
        </fm-checkbox>
        <fm-switch label="Remember Me" name="remember" on active-color="#13ce66" inactive-color="#ff4949" active-text="Yes"
                   inactive-text="No"></fm-switch>
        <el-form-item>
            <el-button class="pull-right" type="primary" native-type="submit">Check It Out</el-button>
        </el-form-item>
    </fm-form>
</div>

<b-badge class="mt-3" v-b-toggle.default>Source Code</b-badge>
<b-collapse id="default" class="mt-2"><code-html v-pre>@php echo e( <<<'DOC'
    <fm-form action="/lvt/VueAdmin/example/submit" method="post" size="small" rules='@json($rules)'>
        {{ csrf_field() }}
        <fm-input label="Name" name="name"></fm-input>
        <fm-date label="Birth" name="birth" type="datetime"></fm-date>
        <fm-radio label="Gender" checked="0">
            <el-radio name="gender" label="0" border>Male</el-radio>
            <el-radio name="gender" label="1" border>Female</el-radio>
        </fm-radio>
        <fm-select label="Hometown" name="hometown">
            <el-option value="Washington" label="Washington">Washington</el-option>
            <el-option value="Chicago" label="Chicago">Chicago</el-option>
        </fm-select>
        <fm-checkbox label="Hobbies">
            <el-checkbox name="code" label="Code" border checked>Code</el-checkbox>
            <el-checkbox name="eat" label="Eat" border>Eat</el-checkbox>
        </fm-checkbox>
        <fm-switch label="Remember Me" name="remember" on active-color="#13ce66" inactive-color="#ff4949" active-text="Yes"
                   inactive-text="No"></fm-switch>
        <el-form-item>
            <el-button class="pull-right" type="primary" native-type="submit">Check It Out</el-button>
        </el-form-item>
    </fm-form>
DOC
)@endphp</code-html></b-collapse>


<h1 class="mt-3">Rules</h1>
<md-renderer v-pre>{!! <<<'DOC'
Form rules check are implemented by `fm-input`.
DOC;
; !!}</md-renderer>
<div class="mt-3">
    <fm-form action="/lvt/VueAdmin/example/submit" method="post" size="small" rules='@json($rules)'>
        {{ csrf_field() }}
        <fm-input label="Name" name="name"></fm-input>
        <fm-input label="Name2" name="name2"></fm-input>
        <fm-input label="Email" name="email"></fm-input>
        <el-form-item>
            <el-button class="pull-right" type="primary" native-type="submit">Check It Out</el-button>
        </el-form-item>
    </fm-form>
</div>

<b-badge class="mt-3" v-b-toggle.rules>Source Code</b-badge>
<b-collapse id="rules" class="mt-2"><code-html v-pre>@php echo e( <<<'DOC'
    <fm-form action="/lvt/VueAdmin/example/submit" method="post" size="small" rules='@json($rules)'>
        {{ csrf_field() }}
        <fm-input label="Name" name="name"></fm-input>
        <fm-input label="Name2" name="name2"></fm-input>
        <fm-input label="Email" name="email"></fm-input>
        <el-form-item>
            <el-button class="pull-right" type="primary" native-type="submit">Check It Out</el-button>
        </el-form-item>
    </fm-form>
DOC
)@endphp</code-html><code-php>{!! <<<'DOC'
$rules = [
    'name' => 'required|min:3',
    'email' => 'required|email',
];
DOC;
; !!}</code-php></b-collapse>



<h1 class="mt-3">Label supports</h1>
<md-renderer v-pre>{!! <<<'DOC'
Tags that started with `fm-` prefix supports label syntax.

Editor and buttons don't support this yet still can use `el-form-item` explicitly.
DOC;
; !!}</md-renderer>
<div class="mt-3">
    <fm-form action="/lvt/VueAdmin/example/submit" method="post">
        {{ csrf_field() }}
        <fm-input label="Name" name="name"></fm-input>
        <fm-date label="Birth" name="birth" type="datetime"></fm-date>
        <fm-radio label="Gender" checked="0">
            <el-radio name="gender" label="0" border>Male</el-radio>
            <el-radio name="gender" label="1" border>Female</el-radio>
        </fm-radio>
        <fm-select label="Hometown" name="hometown">
            <el-option value="Washington" label="Washington">Washington</el-option>
            <el-option value="Chicago" label="Chicago">Chicago</el-option>
        </fm-select>
        <fm-checkbox label="Hobbies">
            <el-checkbox name="code" label="Code" border checked>Code</el-checkbox>
            <el-checkbox name="eat" label="Eat" border>Eat</el-checkbox>
        </fm-checkbox>
        <fm-switch label="Remember Me" name="remember" on active-color="#13ce66" inactive-color="#ff4949" active-text="Yes"
                   inactive-text="No"></fm-switch>
        <el-form-item>
            <el-button class="pull-right" type="primary" native-type="submit">Check It Out</el-button>
        </el-form-item>
    </fm-form>
</div>

<b-badge class="mt-3" v-b-toggle.label>Source Code</b-badge>
<b-collapse id="label" class="mt-2"><code-html v-pre>@php echo e( <<<'DOC'
    <fm-form action="/lvt/VueAdmin/example/submit" method="post">
        {{ csrf_field() }}
        <fm-input label="Name" name="name"></fm-input>
        <fm-date label="Birth" name="birth" type="datetime"></fm-date>
        <fm-radio label="Gender" checked="0">
            <el-radio name="gender" label="0" border>Male</el-radio>
            <el-radio name="gender" label="1" border>Female</el-radio>
        </fm-radio>
        <fm-select label="Hometown" name="hometown">
            <el-option value="Washington" label="Washington">Washington</el-option>
            <el-option value="Chicago" label="Chicago">Chicago</el-option>
        </fm-select>
        <fm-checkbox label="Hobbies">
            <el-checkbox name="code" label="Code" border checked>Code</el-checkbox>
            <el-checkbox name="eat" label="Eat" border>Eat</el-checkbox>
        </fm-checkbox>
        <fm-switch label="Remember Me" name="remember" on active-color="#13ce66" inactive-color="#ff4949" active-text="Yes"
                   inactive-text="No"></fm-switch>
        <el-form-item>
            <el-button class="pull-right" type="primary" native-type="submit">Check It Out</el-button>
        </el-form-item>
    </fm-form>
DOC
)@endphp</code-html></b-collapse>


<h1 class="mt-3">fm-form Attributes</h1>
<chart-table>
    [
    {"attribute":"method","description":"submit method","type":"string","options":"—","default":"post"},
    {"attribute":"action","description":"submit route","type":"string","options":"—","default":"—"},
    {"attribute":"enctype","description":"encrypt type","type":"string","options":"—","default":"application/x-www-form-urlencoded"},
    {"attribute":"size","description":"control the size of components in this form","type":"string","options":"large/small/mini","default":"—"},
    {"attribute":"labelPosition","description":"position of label","type":"string","options":"left/right/top","default":"right"},
    {"attribute":"labelWidth","description":"width of label.","type":"string","options":"—","default":"150px"},
    {"attribute":"rules","description":"check rules","type":"string","options":"—","default":"—"}
    ]
</chart-table>


@endlvt_example