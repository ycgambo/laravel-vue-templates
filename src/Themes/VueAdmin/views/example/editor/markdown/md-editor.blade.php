@lvt_example

<h1 class="mt-3">Default</h1>
<div class="mt-3">
    <md-editor></md-editor>
</div>

<b-badge class="mt-3" v-b-toggle.default>Source Code</b-badge>
<b-collapse id="default" class="mt-2">
    <code-html>@php echo e( <<<'DOC'
    <md-editor></md-editor>
DOC
)@endphp</code-html>
</b-collapse>


<h1 class="mt-3">Height</h1>
<div class="mt-3">
    <md-editor height="100px"></md-editor>
</div>

<b-badge class="mt-3" v-b-toggle.height>Source Code</b-badge>
<b-collapse id="height" class="mt-2">
    <code-html>@php echo e( <<<'DOC'
    <md-editor height="100px"></md-editor>
DOC
)@endphp</code-html>
</b-collapse>


<h1 class="mt-3">Contents</h1>
<div class="mt-3">
    <md-editor>{!! <<<'MDDOC'
# hello, This is Markdown Live Preview

----
## what is Markdown?
see [Wikipedia](http://en.wikipedia.org/wiki/Markdown)

> Markdown is a lightweight markup language, originally created by John Gruber and Aaron Swartz allowing people "to write using an easy-to-read, easy-to-write plain text format, then convert it to structurally valid XHTML (or HTML)".

----
## usage
1. Write markdown text in this textarea.
2. Click 'HTML Preview' button.

----
## markdown quick reference
# headers

*emphasis*

**strong**

* list

> block quote

    code (4 spaces indent)

```
code (3 grave)
```

`code (grave quoted)`

[links](http://wikipedia.org)

MDDOC;
; !!}</md-editor>
</div>

<b-badge class="mt-3" v-b-toggle.contents>Source Code</b-badge>
<b-collapse id="contents" class="mt-2">
    <code-html>@php echo e( <<<'DOC'
    <md-editor>{!! <<<'MDDOC'
# hello, This is Markdown Live Preview

----
## what is Markdown?
see [Wikipedia](http://en.wikipedia.org/wiki/Markdown)

> Markdown is a lightweight markup language, originally created by John Gruber and Aaron Swartz allowing people "to write using an easy-to-read, easy-to-write plain text format, then convert it to structurally valid XHTML (or HTML)".

----
## usage
1. Write markdown text in this textarea.
2. Click 'HTML Preview' button.

----
## markdown quick reference
# headers

*emphasis*

**strong**

* list

> block quote

    code (4 spaces indent)

```
code (3 grave)
```

`code (grave quoted)`

[links](http://wikipedia.org)

MDDOC;
; !!}</md-editor>
DOC
)@endphp</code-html>
</b-collapse>


<h1 class="mt-3">AutoSave</h1>
<p class="mt-3">Type something and refresh the window to see what happens</p>
<div class="mt-3">
    <md-editor autosave="md2"></md-editor>
</div>

<b-badge class="mt-3" v-b-toggle.autosave>Source Code</b-badge>
<b-collapse id="autosave" class="mt-2">
    <code-html>@php echo e( <<<'DOC'
    <md-editor autosave="md2"></md-editor>
DOC
)@endphp</code-html>
</b-collapse>


<h1 class="mt-3">Check Submits</h1>
<fm-form method="post" action="/lvt/VueAdmin/example/submit">
    <md-editor name="input"></md-editor>
    @csrf
    <el-button class="pull-right" type="primary" native-type="submit">Check It Out</el-button>
</fm-form>

@endlvt_example
