@lvt_example

<div class="mt-3">
    The BootstrapVue <a href="https://bootstrap-vue.js.org/docs/components/image">Image</a> component is fully supported.'
</div>

<h1 class="mt-3">Fluid</h1>
<div class="mt-3">
    <b-img src="https://picsum.photos/300/150/?image=41" fluid alt="Fluid image"></b-img>
</div>
<div class="mt-3">
    <b-img src="https://picsum.photos/300/150/?image=41" fluid-grow alt="Fluid-Grow image"></b-img>
</div>

<b-badge class="mt-3" v-b-toggle.fluid>Source Code</b-badge>
<b-collapse id="fluid" class="mt-2"><code-html>@php echo e( <<<'DOC'
    <b-img src="https://picsum.photos/300/150/?image=41" fluid alt="Fluid image"></b-img>
    <b-img src="https://picsum.photos/300/150/?image=41" fluid-grow alt="Fluid-Grow image"></b-img>
DOC
)@endphp</code-html></b-collapse>


<h1 class="mt-3">Thumbnail</h1>
<div class="mt-3">
    <b-img thumbnail fluid src="https://picsum.photos/250/250/?image=54" alt="Thumbnail"></b-img>
    <b-img thumbnail fluid src="https://picsum.photos/250/250/?image=58" alt="Thumbnail"></b-img>
    <b-img thumbnail fluid src="https://picsum.photos/250/250/?image=59" alt="Thumbnail"></b-img>
</div>

<b-badge class="mt-3" v-b-toggle.thumbnail>Source Code</b-badge>
<b-collapse id="thumbnail" class="mt-2"><code-html>@php echo e( <<<'DOC'
    <b-img thumbnail fluid src="https://picsum.photos/250/250/?image=54" alt="Thumbnail"></b-img>
    <b-img thumbnail fluid src="https://picsum.photos/250/250/?image=58" alt="Thumbnail"></b-img>
    <b-img thumbnail fluid src="https://picsum.photos/250/250/?image=59" alt="Thumbnail"></b-img>
DOC
)@endphp</code-html></b-collapse>


<h1 class="mt-3">With v-bind</h1>
<div class="mt-3">
    <b-img v-bind="{ blank: true, width: 75, height: 75, class: 'm1' }" alt="Transparent image"></b-img>
    <b-img v-bind="{ blank: true, width: 75, height: 75, class: 'm1' }" blank-color="#777" alt="HEX shorthand color image (#777)"></b-img>
    <b-img v-bind="{ blank: true, width: 75, height: 75, class: 'm1' }" blank-color="red" alt="Named color image (red)"></b-img>
    <b-img v-bind="{ blank: true, width: 75, height: 75, class: 'm1' }" blank-color="black" alt="Named color image (black)"></b-img>
    <b-img v-bind="{ blank: true, width: 75, height: 75, class: 'm1' }" blank-color="#338833" alt="HEX color image"></b-img>
    <b-img v-bind="{ blank: true, width: 75, height: 75, class: 'm1' }" blank-color="rgba(128, 255, 255, 0.5)" alt="RGBa color image"></b-img>
    <b-img v-bind="{ blank: true, width: 75, height: 75, class: 'm1' }" blank-color="#88f" alt="HEX shorthand color (#88f)"></b-img>
</div>

<b-badge class="mt-3" v-b-toggle.bind>Source Code</b-badge>
<b-collapse id="bind" class="mt-2"><code-html>@php echo e( <<<'DOC'
    <b-img v-bind="{ blank: true, width: 75, height: 75, class: 'm1' }" alt="Transparent image"></b-img>
    <b-img v-bind="{ blank: true, width: 75, height: 75, class: 'm1' }" blank-color="#777" alt="HEX shorthand color image (#777)"></b-img>
    <b-img v-bind="{ blank: true, width: 75, height: 75, class: 'm1' }" blank-color="red" alt="Named color image (red)"></b-img>
    <b-img v-bind="{ blank: true, width: 75, height: 75, class: 'm1' }" blank-color="black" alt="Named color image (black)"></b-img>
    <b-img v-bind="{ blank: true, width: 75, height: 75, class: 'm1' }" blank-color="#338833" alt="HEX color image"></b-img>
    <b-img v-bind="{ blank: true, width: 75, height: 75, class: 'm1' }" blank-color="rgba(128, 255, 255, 0.5)" alt="RGBa color image"></b-img>
    <b-img v-bind="{ blank: true, width: 75, height: 75, class: 'm1' }" blank-color="#88f" alt="HEX shorthand color (#88f)"></b-img>
DOC
)@endphp</code-html></b-collapse>


@endlvt_example