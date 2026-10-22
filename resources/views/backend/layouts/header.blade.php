<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-3 py-2 sticky-top shadow-sm">
  <div class="container-fluid">
    <button class="btn btn-outline-light d-md-none me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#adminSidebar">
      ☰
    </button>
    <a class="navbar-brand fw-bold d-flex align-items-center gap-2" href="{{ url('/admin') }}">
      <span class="badge bg-warning text-dark px-2 py-1">ADMIN</span>
      <span>IASSW Control Panel</span>
    </a>
    
    <div class="ms-auto d-flex align-items-center gap-3">
      <a href="{{ url('/') }}" target="_blank" class="btn btn-sm btn-outline-info d-none d-sm-inline-flex align-items-center gap-1">
        <span>🌐 View Website</span>
      </a>
      <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="adminDropdown" data-bs-toggle="dropdown" aria-expanded="false">
          <span class="rounded-circle bg-secondary d-inline-flex justify-content-center align-items-center text-white me-2" style="width: 32px; height: 32px;">A</span>
          <span class="d-none d-sm-inline">Administrator</span>
        </a>
        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="adminDropdown">
          <li><a class="dropdown-item" href="#">Profile Settings</a></li>
          <li><a class="dropdown-item" href="#">Activity Logs</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item text-danger" href="#">Logout</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>
