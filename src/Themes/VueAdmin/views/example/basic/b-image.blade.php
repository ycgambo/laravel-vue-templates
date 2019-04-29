@lvt_example

<div class="mt-3">
    The BootstrapVue <a href="https://bootstrap-vue.js.org/docs/components/image">Image</a> component is fully supported.'
</div>

<div class="mt-3">
    <h5>Small image with <code>fluid</code>:</h5>
    <b-img src="https://picsum.photos/300/150/?image=41" fluid alt="Fluid image"></b-img>
    <h5>Small image with <code>fluid-grow</code>:</h5>
    <b-img src="https://picsum.photos/300/150/?image=41" fluid-grow alt="Fluid-Grow image"></b-img>
</div>

<div class="mt-3">
    <b-container fluid class="p-4 mt-3 bg-dark">
        <b-row>
            <b-col>
                <b-img thumbnail fluid src="https://picsum.photos/250/250/?image=54" alt="Thumbnail"></b-img>
            </b-col>
            <b-col>
                <b-img thumbnail fluid src="https://picsum.photos/250/250/?image=58" alt="Thumbnail"></b-img>
            </b-col>
            <b-col>
                <b-img thumbnail fluid src="https://picsum.photos/250/250/?image=59" alt="Thumbnail"></b-img>
            </b-col>
        </b-row>
    </b-container>
</div>

<div class="mt-3">
    <b-img v-bind="{ blank: true, width: 75, height: 75, class: 'm1' }" alt="Transparent image"></b-img>
    <b-img v-bind="{ blank: true, width: 75, height: 75, class: 'm1' }" blank-color="#777" alt="HEX shorthand color image (#777)"></b-img>
    <b-img v-bind="{ blank: true, width: 75, height: 75, class: 'm1' }" blank-color="red" alt="Named color image (red)"></b-img>
    <b-img v-bind="{ blank: true, width: 75, height: 75, class: 'm1' }" blank-color="black" alt="Named color image (black)"></b-img>
    <b-img v-bind="{ blank: true, width: 75, height: 75, class: 'm1' }" blank-color="#338833" alt="HEX color image"></b-img>
    <b-img v-bind="{ blank: true, width: 75, height: 75, class: 'm1' }" blank-color="rgba(128, 255, 255, 0.5)" alt="RGBa color image"></b-img>
    <b-img v-bind="{ blank: true, width: 75, height: 75, class: 'm1' }" blank-color="#88f" alt="HEX shorthand color (#88f)"></b-img>
</div>

@endlvt_example