@lvt_example


<h1 class="mt-3">Load</h1>


<md-renderer v-pre>{!! <<<'DOC'
A Javascript Load helper is registered to asynchronously load page.

By providing the second param menu_id to manually refresh the active sidebar menu
DOC;
; !!}</md-renderer>

<code-base>{!! <<<'DOC'
__load('/users')
__load('/users?page=2', '/users')
DOC;
; !!}</code-base>

<md-renderer v-pre>{!! <<<'DOC'
Since the new page are loaded without page redirect, there are few things we may need to known.

For javascript section of a blade file, when a new page is requested, the `__destructor` of current page will be executed to clean things up.

```
!(function () {
    var i = setInterval(() => {
        console.log(123)
    }, 500)
    __destructor = () => {
        clearInterval(i)
    }
})()
```

Page css is not allowed because it's hard to undo the effects once it's loaded asynchronously.

You should load all the css files you may need on the base page and change page style by using javascript.

DOC;
; !!}</md-renderer>


<h1 class="mt-3">Url</h1>
<md-renderer v-pre>{!! <<<'DOC'
A Javascript [Url](https://www.npmjs.com/package/url) helper library is registered.

Additionally, a `__url.param` function helps when dealing with param repalcement.
DOC;
; !!}</md-renderer>

<code-base v-pre>{!! <<<'DOC'
    __url.resolve('http://example.com/', '/one')    // 'http://example.com/one'
    __url.resolve('http://example.com/one', '/two') // 'http://example.com/two'
    __url.resolve('/one/two/three', 'four')         // '/one/two/four'
    __url.resolve('/one/two/five?page=1', '?page=2') // '/one/two/five?page=2'
    __url.param('/one/two/five?page=1&key=abc', 'page=2') // '/one/two/five?key=abc&page=2'
DOC;
; !!}</code-base>


<h1 class="mt-3">Store</h1>
<md-renderer v-pre>{!! <<<'DOC'
A Javascript [Store](https://www.npmjs.com/package/store) helper library is registered.
DOC;
; !!}</md-renderer>

<div class="mt-3">
</div>

<code-base v-pre>{!! <<<'DOC'
// Store current user
__store.set('user', { name:'Marcus' })

// Get current user
__store.get('user')

// Remove current user
__store.remove('user')

// Clear all keys
__store.clearAll()

// Loop over all stored values
__store.each(function(value, key) {
    console.log(key, '==', value)
})

__store.set('foo', 'bar 1')
__store.set('foo', 'bar 2')
__store.getHistory('foo') == ['bar 1', 'bar 2']
DOC;
; !!}</code-base>

@endlvt_example