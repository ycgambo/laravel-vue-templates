@lvt_example

<h1 class="mt-3">Steps</h1>
<el-steps simple>
    <el-step title="步骤 1" status="success"></el-step>
    <el-step title="步骤 2" status="process"></el-step>
    <el-step title="步骤 3"></el-step>
</el-steps>


<h1 class="mt-3">Icon</h1>
<el-steps :active="1" simple>
    <el-step title="步骤 1" icon="el-icon-edit"></el-step>
    <el-step title="步骤 2" icon="el-icon-upload"></el-step>
    <el-step title="步骤 3" icon="el-icon-picture"></el-step>
</el-steps>


<h1 class="mt-3">Description</h1>
<el-steps :active="1">
    <el-step title="步骤 1" description="这是一段很长很长很长的描述性文字"></el-step>
    <el-step title="步骤 2" description="这是一段很长很长很长的描述性文字"></el-step>
    <el-step title="步骤 3" description="这段就没那么长了"></el-step>
</el-steps>


<h1 class="mt-3">Vertical</h1>
<div style="height: 300px;">
    <el-steps direction="vertical" :active="1">
        <el-step title="步骤 1"></el-step>
        <el-step title="步骤 2"></el-step>
        <el-step title="步骤 3" description="这是一段很长很长很长的描述性文字"></el-step>
    </el-steps>
</div>

@endlvt_example