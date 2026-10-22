<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title', 'Admin Dashboard') – IASSW Control Panel</title>
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #f8fafc;
      font-family: 'Inter', system-ui, -apple-system, sans-serif;
    }
    .sidebar-collapse {
      transition: all 0.2s ease;
    }
  </style>
  @stack('styles')
</head>
<body class="d-flex flex-column min-vh-100">

  <!-- Admin Topbar Header -->
  @include('backend.layouts.header')

  <div class="container-fluid flex-grow-1">
    <div class="row">
      <!-- Admin Sidebar -->
      @include('backend.layouts.sidebar')

      <!-- Admin Main Content Area -->
      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4 py-4">
        @yield('content')
      </main>
    </div>
  </div>

  <!-- Admin Footer -->
  @include('backend.layouts.footer')

  <!-- Bootstrap 5 JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  @stack('scripts')
</body>
</html>
