@extends('backend.layouts.master')

@section('title', 'Dashboard Overview')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-2 pb-3 mb-4 border-bottom">
  <div>
    <h1 class="h2 mb-0 fw-bold">Admin Dashboard</h1>
    <p class="text-muted small mb-0">Welcome back! Manage users, events, news, and publications from here.</p>
  </div>
  <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group me-2">
      <a href="{{ url('/') }}" target="_blank" class="btn btn-sm btn-outline-primary">Visit Website</a>
      <button type="button" class="btn btn-sm btn-primary">+ Add New Item</button>
    </div>
  </div>
</div>

<!-- Stats Counter Cards -->
<div class="row g-3 mb-4">
  <div class="col-sm-6 col-xl-3">
    <div class="card border-0 shadow-sm rounded-3">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center">
          <div>
            <h6 class="text-muted text-uppercase mb-2 small fw-semibold">Total Members</h6>
            <h3 class="mb-0 fw-bold text-dark">542</h3>
            <small class="text-success fw-medium">↑ 12% this month</small>
          </div>
          <div class="p-3 bg-primary bg-opacity-10 rounded-circle text-primary fs-3">
            👥
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-xl-3">
    <div class="card border-0 shadow-sm rounded-3">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center">
          <div>
            <h6 class="text-muted text-uppercase mb-2 small fw-semibold">Published News</h6>
            <h3 class="mb-0 fw-bold text-dark">38</h3>
            <small class="text-primary fw-medium">Active posts</small>
          </div>
          <div class="p-3 bg-info bg-opacity-10 rounded-circle text-info fs-3">
            📰
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-xl-3">
    <div class="card border-0 shadow-sm rounded-3">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center">
          <div>
            <h6 class="text-muted text-uppercase mb-2 small fw-semibold">Upcoming Events</h6>
            <h3 class="mb-0 fw-bold text-dark">6</h3>
            <small class="text-warning fw-medium">Next: Asia-Pacific 2026</small>
          </div>
          <div class="p-3 bg-warning bg-opacity-10 rounded-circle text-warning fs-3">
            📅
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="col-sm-6 col-xl-3">
    <div class="card border-0 shadow-sm rounded-3">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-center">
          <div>
            <h6 class="text-muted text-uppercase mb-2 small fw-semibold">Resources</h6>
            <h3 class="mb-0 fw-bold text-dark">124</h3>
            <small class="text-success fw-medium">Documents &amp; PDFs</small>
          </div>
          <div class="p-3 bg-success bg-opacity-10 rounded-circle text-success fs-3">
            📁
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Recent Content Table -->
<div class="card border-0 shadow-sm rounded-3 mb-4">
  <div class="card-header bg-white py-3 border-0">
    <h5 class="mb-0 fw-bold">Recent News &amp; Events</h5>
  </div>
  <div class="table-responsive">
    <table class="table table-hover align-middle mb-0">
      <thead class="table-light">
        <tr>
          <th>Title</th>
          <th>Category</th>
          <th>Author / Source</th>
          <th>Date</th>
          <th>Status</th>
          <th class="text-end">Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="fw-semibold">Global Conference 2026 Announced</td>
          <td><span class="badge bg-warning text-dark">Event</span></td>
          <td>Admin</td>
          <td>Aug 08, 2026</td>
          <td><span class="badge bg-success">Published</span></td>
          <td class="text-end">
            <button class="btn btn-sm btn-outline-secondary">Edit</button>
          </td>
        </tr>
        <tr>
          <td class="fw-semibold">New Global Social Work Documents Released</td>
          <td><span class="badge bg-info text-dark">Document</span></td>
          <td>Admin</td>
          <td>Aug 08, 2026</td>
          <td><span class="badge bg-success">Published</span></td>
          <td class="text-end">
            <button class="btn btn-sm btn-outline-secondary">Edit</button>
          </td>
        </tr>
        <tr>
          <td class="fw-semibold">Regional Webinar on Ethical Practice</td>
          <td><span class="badge bg-primary">Webinar</span></td>
          <td>Committee</td>
          <td>Aug 08, 2026</td>
          <td><span class="badge bg-success">Published</span></td>
          <td class="text-end">
            <button class="btn btn-sm btn-outline-secondary">Edit</button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
@endsection
