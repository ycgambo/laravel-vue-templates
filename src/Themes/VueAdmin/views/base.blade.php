@_lvt_example
@slot('header')
    {{-- commonly used css --}}
    @yield('header') {{-- expose for subpages --}}
@endslot

@slot('title')
    {{--{{ $title }} --}}{{-- expose title for subpages --}}
    title
@endslot

{{ $slot }}

@slot('footer')
    {{-- page footer, commonly used js --}}
    @yield('js') {{-- expose for subpages --}}
@endslot

@end_lvt_example
