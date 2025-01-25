<html>
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography"></script>
		<script src="https://unpkg.com/unlazy@0.11.3/dist/unlazy.with-hashing.iife.js" defer init></script>
  </head>
  <body>
    <div class="bg-gray-50 min-h-screen">
      <div class="sticky top-0 z-50">
        @include('components.navbar')

      </div>
        <div class="">
            @yield('content')
        </div>
        @include('components.footer')
    </div>
  </body>
</html>