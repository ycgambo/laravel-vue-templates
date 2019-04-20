@example

   <b-jumbotron>
        <template slot="header">
            Welcome, man
        </template>
        <template slot="lead">
            Vue components in <code>ONE</code> tag. Easy to design UI in Laravel blade template.
        </template>
        <hr>
        <p> Just pick a tag and put data in it, we'll handle the render stuff. </p>
        <b-btn variant="outline-primary"
               href="https://github.com/ycgambo/laravel-vue-templates/blob/master/resources/views/example/dashboard.blade.php">
            Page Source
        </b-btn>
        <b-btn variant="outline-primary" href="https://github.com/ycgambo/laravel-vue-templates/issues">New Issue
        </b-btn>
    </b-jumbotron>

    <el-row class="mt-3 text-center">
        <b-btn v-b-toggle.collapse1 variant="primary" size="lg">What's Included</b-btn>

        <b-btn variant="success" size="lg" class="ml-4" href="/example/quick-tour">Quick Tour</b-btn>
    </el-row>

    <b-collapse id="collapse1" class="mt-4">
        <b-card-group deck>
            <b-card header="<b>Globally included</b>">
                <b-list-group flush>
                    <b-list-group-item>Vue</b-list-group-item>
                    <b-list-group-item>jQuery</b-list-group-item>
                    <b-list-group-item>Lodash</b-list-group-item>
                    <b-list-group-item>Axios</b-list-group-item>
                </b-list-group>
            </b-card>

            <b-card header="<b>UI Libraries</b>">
                <b-list-group flush>
                    <b-list-group-item>Bootstrap</b-list-group-item>
                    <b-list-group-item>Font-awesome</b-list-group-item>
                    <b-list-group-item>Popper</b-list-group-item>
                    <b-list-group-item>Element UI</b-list-group-item>
                    <b-list-group-item>BootstrapVue</b-list-group-item>
                </b-list-group>
            </b-card>

            <b-card header="<b>Components</b>">
                <b-list-group flush>
                    <b-list-group-item>Echart</b-list-group-item>
                    <b-list-group-item>Tinymce</b-list-group-item>
                    <b-list-group-item>CodeMirror</b-list-group-item>
                    <b-list-group-item>SimpleMDE</b-list-group-item>
                </b-list-group>
            </b-card>
        </b-card-group>
    </b-collapse>


@endexample