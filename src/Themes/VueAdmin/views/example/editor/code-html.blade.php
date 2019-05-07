@lvt_example

<h1 class="mt-3">Light</h1>
<code-html v-pre>@php echo e( <<<'DOC'
<html style="color: green">
  <!-- this is a comment -->
  <head>
    <title>Mixed HTML Example</title>
    <style>
      h1 {font-family: comic sans; color: #f0f;}
      div {background: yellow !important;}
      body {
        max-width: 50em;
        margin: 1em 2em 1em 5em;
      }
    </style>
  </head>
  <body>
    <h1>Mixed HTML Example</h1>
    <script>
      function jsFunc(arg1, arg2) {
        if (arg1 && arg2) document.body.innerHTML = "achoo";
      }
    </script>
  </body>
</html>
DOC
)@endphp</code-html>

<h1 class="mt-3">Dark</h1>
<code-html dark v-pre>@php echo e( <<<'DOC'
<html style="color: green">
  <!-- this is a comment -->
  <head>
    <title>Mixed HTML Example</title>
    <style>
      h1 {font-family: comic sans; color: #f0f;}
      div {background: yellow !important;}
      body {
        max-width: 50em;
        margin: 1em 2em 1em 5em;
      }
    </style>
  </head>
  <body>
    <h1>Mixed HTML Example</h1>
    <script>
      function jsFunc(arg1, arg2) {
        if (arg1 && arg2) document.body.innerHTML = "achoo";
      }
    </script>
  </body>
</html>
DOC
)@endphp</code-html>

@endlvt_example