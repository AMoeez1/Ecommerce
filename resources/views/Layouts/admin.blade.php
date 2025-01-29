<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- BladeWind --}}
    <link href="{{ asset('vendor/bladewind/css/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('vendor/bladewind/css/bladewind-ui.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('vendor/bladewind/js/helpers.js') }}"></script>
</head>

<body class="bg-gradient-to-r from-[#f9f9f9] to-[#e0e0e0] font-sans">
    <div class="flex min-h-screen">
        @include('admin.components.sidebar')
        <div class="w-full">
            @yield('content')
        </div>
    </div>
</body>

</html>
