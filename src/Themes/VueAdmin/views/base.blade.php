@_lvt_example

@section('header')
    {{-- page css are not dynamic loaded, because there's no way to clean it up once loaded, and it will affect other pages --}}
    {{-- commonly used css --}}
@endsection

@section('title')
    @yield('title') {{-- expose title for subpages --}}
@endsection

{{ $slot }}

@section('import')
    {{-- commonly used js --}}
@endsection

@section('js')
    {{-- these section will be dynamic loaded, and you can use __destructor to clean things up before load another page --}}
    @yield('js') {{-- expose for subpages --}}
@endsection

@end_lvt_example
