@example

   <h1>Default</h1>
    <el-button onclick="__confirm(123)">Click Me</el-button>

    <h1>Type</h1>
    <el-button type="success" onclick="__confirm(123, 'success')">Success</el-button>
    <el-button type="warning" onclick="__confirm(123, 'warning')">Warning</el-button>
    <el-button type="danger" onclick="__confirm(123, 'error')">Error</el-button>

    <h1>Callback</h1>
    <el-button onclick="__confirm(123, 'info', function(){__notify('Passed')})">Pass</el-button>
    <el-button onclick="__confirm(123, 'info', function(){}, function(){__notify('Failed')})">Fail</el-button>

@endexample