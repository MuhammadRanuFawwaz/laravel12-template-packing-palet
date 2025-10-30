<!doctype html>
<html lang="en">

<head>
    <title>{{ $title ?? 'Packing Palet' }}</title>
    @include('components.head')
    @stack('style')
</head>

<body data-sidebar="dark">
    <div id="layout-wrapper">
        @include('components.topbar')
        {{-- Sidebar --}}
        @include('components.sidebar')

        {{-- Main Content --}}
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    {{ $slot ?? '' }}
                </div>
            </div>
            @include('components.rightbar')
            {{-- Footer --}}
            @include('components.footer')
        </div>
    </div>

    @include('components.scripts')
</body>

</html>
