@lvt_example

<div class="mt-3">
    A Javascript <a href="https://www.npmjs.com/package/store">Store</a> helper library is registered.
</div>

<code-base>{!! <<<'DOC'
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