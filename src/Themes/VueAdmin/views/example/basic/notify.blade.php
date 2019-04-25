@lvt_example

   <h1>Default</h1>
    <el-button onclick="__notify(123)">Click Me</el-button>

    <h1>Title</h1>
    <el-button onclick="__notify(123, 'title')">Title</el-button>

    <h1>Type</h1>
    <el-button type="success" onclick="__notify(123, 'title', 'success')">Success</el-button>
    <el-button type="warning" onclick="__notify(123, 'title', 'warning')">Warning</el-button>
    <el-button type="danger" onclick="__notify(123, 'title', 'error')">Error</el-button>

    <h1>Duration</h1>
    <el-button onclick="__notify(123, 'title', 'success', 500)">Duration</el-button>
    <el-button onclick="__notify(123, 'title', 'success', 0)">No Auto Close</el-button>

@endlvt_example