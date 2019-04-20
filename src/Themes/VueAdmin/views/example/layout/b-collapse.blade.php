@example

   <div>
        <b-btn v-b-toggle.collapse1 variant="primary">Toggle Collapse</b-btn>
        <b-collapse id="collapse1" class="mt-2">
            <b-card>
                <p class="card-text">Collapse contents Here</p>
                <b-btn v-b-toggle.collapse1_inner size="sm">Toggle Inner Collapse</b-btn>
                <b-collapse id=collapse1_inner class="mt-2">
                    <b-card>Hello!</b-card>
                </b-collapse>
            </b-card>
        </b-collapse>
    </div>

    <div class="mt-3">
        <!-- Single button triggers two b-collapse components -->
        <b-btn v-b-toggle.collapse2.collapse3 variant="primary">Toggle Both Collapse A and B</b-btn>

        <!-- elements to collapse -->
        <b-collapse id="collapse2" class="mt-2">
            <b-card>
                I am collapsable content A!
            </b-card>
        </b-collapse>
        <b-collapse id="collapse3" class="mt-2">
            <b-card>
                I am collapsable content B!
            </b-card>
        </b-collapse>
    </div>

@endexample