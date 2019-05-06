@lvt_example

@php
    $path = \Illuminate\Support\Facades\URL::current();
    $page = request()->get('page', 1);
    $users = new \Illuminate\Pagination\LengthAwarePaginator(array_fill(0, 50, 1), 50, 5, $page,['path' => $path]);
@endphp

<md-renderer v-pre>{!! <<<'DOC'
A paginate method is provided to replace the default laravel bootstrap 4 pagination link style.

```php
    VueAdmin::create($namespace, 'example')->with('menus', $menus)->paginate()->boot();
```

If you want to use the default bootstrap 4 pagination style simultaneously, use `links('pagination::bootstrap-4')`.
DOC;
; !!}</md-renderer>

<h1 class="mt-3">Default</h1>
<div class="mt-3">
    {{ $users->links() }}
</div>

<p class="mt-3">This line is generated by default paginater</p>
<div class="mt-3">
    {{ $users->links('pagination::bootstrap-4') }}
</div>

<b-badge class="mt-3" v-b-toggle.default>Source Code</b-badge>
<b-collapse id="default" class="mt-2"><code-php v-pre>@php echo e( <<<'DOC'
    {{ $users->links() }}
    {{ $users->links('pagination::bootstrap-4') }}
DOC
)@endphp</code-php><p class="mt-3">The `lvt` prefix is the namespace that VueAdmin registered</p></b-collapse>

@endlvt_example