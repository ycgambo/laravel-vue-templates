@lvt_example

<div class="mt-3">
    A Javascript <a href="https://www.npmjs.com/package/store">Store</a> helper library is registered.
</div>

<code-base>{!! <<<'DOC'
// Store current user
store.set('user', { name:'Marcus' })

// Get current user
store.get('user')

// Remove current user
store.remove('user')

// Clear all keys
store.clearAll()

// Loop over all stored values
store.each(function(value, key) {
    console.log(key, '==', value)
})

store.set('foo', 'bar 1')
store.set('foo', 'bar 2')
store.getHistory('foo') == ['bar 1', 'bar 2']
DOC;
; !!}</code-base>

@endlvt_example