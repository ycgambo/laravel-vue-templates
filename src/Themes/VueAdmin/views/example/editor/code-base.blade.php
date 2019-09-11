@lvt_example

   <h1 class="mt-3">Default</h1>
    <code-base>{!! <<<'DOC'
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
; !!}</code-base>

    <h1 class="mt-3">Dark</h1>
    <code-base dark>{!! <<<'DOC'
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
; !!}</code-base>

    <h1 class="mt-3">Readonly</h1>
    <code-base readonly>{!! <<<'DOC'
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
; !!}</code-base>

    <h1 class="mt-3">Size</h1>
    <code-base dark width="300px" height="200px">{!! <<<'DOC'
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
; !!}</code-base>

    <h1 class="mt-3">Disable Infinity</h1>
    <p>By giving a height and set infinity to false.</p>
    <p>Specifies the amount of lines that are rendered above and below the part of the document that's currently
        scrolled into view. This affects the amount of updates needed when scrolling, and the amount of work that such
        an update does. You should usually leave it at its default, 10. Can be set to Infinity to make sure the whole
        document is always rendered, and thus the browser's text search works on it. This will have bad effects on
        performance of big documents.</p>
    <p>Try search 'xxx' which lays in the end of these codes.</p>
    <code-base height="200px" infinity="false">{!! <<<'DOC'
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
  "page_views"xxxx: 8
 }
]
DOC;
; !!}</code-base>

@endlvt_example