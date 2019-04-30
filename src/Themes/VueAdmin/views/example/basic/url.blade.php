@lvt_example

<div class="mt-3">
    A Javascript <a href="https://www.npmjs.com/package/url">Url</a> helper library is registered.
</div>


<code-base>{!! <<<'DOC'
    __url.resolve('http://example.com/', '/one')    // 'http://example.com/one'
    __url.resolve('http://example.com/one', '/two') // 'http://example.com/two'
    __url.resolve('/one/two/three', 'four')         // '/one/two/four'
    __url.resolve('/one/two/five?page=1', '?page=2') // '/one/two/five?page=2'
DOC;
; !!}</code-base>

@endlvt_example