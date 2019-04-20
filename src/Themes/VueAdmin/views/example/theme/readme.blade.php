@example


<md-renderer>{!! <<<'DOC'
The motivation of this is to change layout with out change any blade templates.

Fortunately, Laravel has supported this by using a vue style `component` syntax.

Check this documents: [Components & Slots](https://laravel.com/docs/5.6/blade#components-and-slots)

Like this:

```php
Blade::component('layouts.vue-admin.main', 'example');
```

So if we want to change a theme, we can just alter the component alias registration.

For more details, see `app/Listeners/RouteMatchedThenBootTheme.php`
DOC;
; !!}</md-renderer>

@endexample