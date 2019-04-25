@lvt_example

   <div>
        <b-card title="Card Title"
                img-src="https://picsum.photos/600/300/?image=25"
                img-alt="Image"
                img-top
                tag="article"
                style="max-width: 20rem;"
                class="mb-2">
            <p class="card-text">
                Some quick example text to build on the card title and make up the bulk of the card's content.
            </p>
            <b-button href="#" variant="primary">Go somewhere</b-button>
        </b-card>
    </div>

    <h1 class="mt-3">Columns</h1>
    <div>
        <b-card-group columns>
            <b-card title="Card title that wraps to a new line"
                    img-src="https://placekitten.com/g/400/450"
                    img-fluid
                    img-alt="image"
                    img-top>
                <p class="card-text">
                    This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit
                    longer.
                </p>
            </b-card>
            <b-card header="Quote">
                <blockquote class="blockquote mb-0">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                    <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                </blockquote>
            </b-card>
            <b-card title="Title"
                    img-src="https://placekitten.com/500/350"
                    img-fluid
                    img-alt="image"
                    img-top>
                <p class="card-text">
                    This card has supporting text below as a natural lead-in to additional content.
                </p>
                <small class="text-muted">Last updated 3 mins ago</small>
            </b-card>
            <b-card bg-variant="primary"
                    text-variant="white">
                <blockquote class="card-blockquote">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.
                    </p>
                    <footer>
                        <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                    </footer>
                </blockquote>
            </b-card>
            <b-card title="Title">
                <p class="card-text">
                    This card has supporting text below as a natural lead-in to additional content.
                </p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </b-card>
            <b-card img-src="https://picsum.photos/400/400/?image=41"
                    img-fluid
                    img-alt="image"
                    overlay>
            </b-card>
            <b-card img-src="https://picsum.photos/400/200/?image=41"
                    img-fluid
                    img-alt="image"
                    img-top>
                <p class="card-text">
                    This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content
                    than the first.
                </p>
                <div slot="footer">
                    <small class="text-muted">Footer Text</small>
                </div>
            </b-card>
        </b-card-group>
    </div>


    <h1 class="mt-3">Background</h1>
    <div>
        <b-card-group deck
                      class="mb-3">
            <b-card bg-variant="primary"
                    text-variant="white"
                    header="Primary"
                    class="text-center">
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </b-card>
            <b-card bg-variant="secondary"
                    text-variant="white"
                    header="Secondary"
                    class="text-center">
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </b-card>
            <b-card bg-variant="success"
                    text-variant="white"
                    header="Success"
                    class="text-center">
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </b-card>
        </b-card-group>
        <b-card-group deck
                      class="mb-3">
            <b-card bg-variant="info"
                    text-variant="white"
                    header="Info"
                    class="text-center">
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </b-card>
            <b-card bg-variant="warning"
                    text-variant="white"
                    header="Warning"
                    class="text-center">
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </b-card>
            <b-card bg-variant="danger"
                    text-variant="white"
                    header="Danger"
                    class="text-center">
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </b-card>
        </b-card-group>
        <b-card-group deck
                      class="mb-3">
            <b-card bg-variant="light"
                    header="Light"
                    class="text-center">
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </b-card>
            <b-card bg-variant="dark"
                    header="Dark"
                    text-variant="white"
                    class="text-center">
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </b-card>
            <b-card header="Default"
                    class="text-center">
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </b-card>
        </b-card-group>
    </div>

    <h1 class="mt-3">Bordered</h1>
    <div>
        <b-card-group deck class="mb-3">
            <b-card border-variant="primary"
                    header="Primary"
                    header-bg-variant="primary"
                    header-text-variant="white"
                    align="center">
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </b-card>
            <b-card border-variant="secondary"
                    header="Secondary"
                    header-border-variant="secondary"
                    align="center">
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </b-card>
            <b-card border-variant="success"
                    header="Success"
                    align="center">
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </b-card>
        </b-card-group>
        <b-card-group deck class="mb-3">
            <b-card border-variant="info"
                    header="Info"
                    align="center">
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </b-card>
            <b-card border-variant="warning"
                    header="Warning"
                    header-bg-variant="transparent"
                    align="center">
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </b-card>
            <b-card border-variant="danger"
                    header="Danger"
                    header-border-variant="danger"
                    header-text-variant="danger"
                    align="center">
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </b-card>
        </b-card-group>
        <b-card-group deck class="mb-3">
            <b-card border-variant="light"
                    header="Light"
                    class="text-center">
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </b-card>
            <b-card border-variant="dark"
                    header="Dark"
                    align="center">
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </b-card>
        </b-card-group>
    </div>


@endlvt_example