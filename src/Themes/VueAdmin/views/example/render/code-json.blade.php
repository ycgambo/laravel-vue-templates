@lvt_example

   <h1 class="mt-3">Light</h1>
    <code-json name="code">{!! <<<'DOC'
[
 {
  _id: "post 1",
  "author": "Bob",
  "content": "...",
  "page_views": 5
 },
 {
  "_id": "post 2",
  "author": "Bob",
  "content": "...",
  "page_views": 9
 },
 {
  "_id": "post 3",
  "author": "Bob",
  "content": "...",
  "page_views": 8
 }
]
DOC;
; !!}</code-json>

    <h1 class="mt-3">Dark</h1>
    <code-json name="code" dark>{!! <<<'DOC'
[
 {
  _id: "post 1",
  "author": "Bob",
  "content": "...",
  "page_views": 5
 },
 {
  "_id": "post 2",
  "author": "Bob",
  "content": "...",
  "page_views": 9
 },
 {
  "_id": "post 3",
  "author": "Bob",
  "content": "...",
  "page_views": 8
 }
]
DOC;
; !!}</code-json>

@endlvt_example