<div class="col-md-3 col-lg-2 p-0 bg-white border-end shadow-sm min-vh-100 sidebar-collapse collapse d-md-block" id="adminSidebar">
  <div class="position-sticky pt-3">
    <div class="px-3 pb-2 text-uppercase text-muted fw-bold small">Navigation</div>
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link {{ Request::is('admin') ? 'active bg-primary text-white rounded mx-2' : 'text-dark' }} py-2 px-3 fw-medium" href="{{ url('/admin') }}">
          📊 Dashboard
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark py-2 px-3 fw-medium" href="#">
          👥 Members Management
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark py-2 px-3 fw-medium" href="#">
          📰 News &amp; Announcements
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark py-2 px-3 fw-medium" href="#">
          📅 Events &amp; Conferences
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark py-2 px-3 fw-medium" href="#">
          📁 Knowledge &amp; Resources
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark py-2 px-3 fw-medium" href="#">
          ✉️ Newsletter Subscribers
        </a>
      </li>
    </ul>

    <hr class="mx-3 my-3 text-muted">

    <div class="px-3 pb-2 text-uppercase text-muted fw-bold small">System</div>
    <ul class="nav flex-column">
      <li class="nav-item">
        <a class="nav-link text-dark py-2 px-3 fw-medium" href="#">
          ⚙️ General Settings
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark py-2 px-3 fw-medium" href="{{ url('/') }}" target="_blank">
          🔗 Public Website
        </a>
      </li>
    </ul>
  </div>
</div>
