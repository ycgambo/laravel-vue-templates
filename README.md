
# Laravel Vue Templates

A Laravel admin template to generate dynamic Vue tags in blades. Focus on data, not render.


## Why

Though Laravel Blade and Vue are handy, we can not use them both(unless we use Vue as a library).

This leaves us two options to develop a admin site:

1. use laravel as an api server and deploy another vue application
2. use laravel blade engine with jquery and get ride of vue

Option 1 is good if you are a full stack developer.
Option 2 is not a wonderful choice for complex admin pages.

So, thanks to the vue-admin project, I warped it so to fit backend developer's habits.

It deals with these painful stuff:
1. menus (generate menu tree, detect current menu)
2. async page loading(load new blade into page content with no redirect)
3. vue plugins (write vue tags in blade)


## Examples



