@lvt_example

@section('title')
    load
@endsection

@section('js')
    <script>
        !(function () {
            duplicate = 1;
            __destructor = () => {
                duplicate = null
                console.log('cleaned up')
            }
        })()
    </script>
@endsection

<div class="mt-3">
    A Javascript Load helper library is registered to asynchronously load page.
</div>

<div class="mt-3">
    By providing the second param menu_id to manually refresh the active sidebar menu
</div>

<code-base>{!! <<<'DOC'
__load('/users')
__load('/users?page=2', '/users')
DOC;
; !!}</code-base>

@endlvt_example