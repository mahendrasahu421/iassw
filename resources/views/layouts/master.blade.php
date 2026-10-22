<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'IASSW AIETS – Advancing Global Social Work Excellence')</title>
  <meta name="description"
    content="@yield('meta_description', 'IASSW is the global voice of social work education, promoting social justice, human rights and ethical practice worldwide.')">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  @stack('styles')
</head>

<body>

  <!-- ============ HEADER ============ -->
  @include('layouts.header')

  <!-- ============ MAIN CONTENT ============ -->
  <main>
    @yield('content')
  </main>

  <!-- ============ FOOTER ============ -->
  @include('layouts.footer')

  <script src="{{ asset('js/main.js') }}"></script>
  @stack('scripts')
</body>

</html>
