  <!-- ============ FOOTER ============ -->
  <footer class="footer">
    <div class="container footer__grid">
      <div class="footer__brand">
        <img src="{{ asset('images/logo-footer.png') }}" alt="IASSW AIETS" onerror="this.style.display='none'">
        <p>Promoting social justice, human rights, education, ethical practice, and global collaboration in social work.
        </p>
      </div>
      <div>
        <h4>Quick Links</h4>
        <ul>
          <li><a href="#">Members</a></li>
          <li><a href="#">Global S W Docs</a></li>
          <li><a href="#">News</a></li>
          <li><a href="#">Regions</a></li>
          <li><a href="{{ url('/about') }}">About Us</a></li>
          <li><a href="{{ url('/about') }}#committees">Committees</a></li>
        </ul>
      </div>
      <div>
        <h4>Membership</h4>
        <ul>
          <li><a href="#">Become a Member</a></li>
          <li><a href="#">Member Benefits</a></li>
          <li><a href="#">Categories</a></li>
          <li><a href="#">Renew Membership</a></li>
        </ul>
      </div>
      <div>
        <h4>Resources</h4>
        <ul>
          <li><a href="#">Documents</a></li>
          <li><a href="#">Publications</a></li>
          <li><a href="#">Events</a></li>
          <li><a href="#">Reports</a></li>
          <li><a href="#">Ethics in Social Work</a></li>
        </ul>
      </div>
      <div>
        <h4>Contact Us</h4>
        <ul>
          <li>Rue Belliard 40, Brussels</li>
          <li><a href="mailto:secretariat@iassw-aiets.org">secretariat@iassw-aiets.org</a></li>
          <li><a href="tel:+3222303400">+32 2 230 34 00</a></li>
        </ul>
      </div>
    </div>
    <div class="container footer__bottom">
      <span>© {{ date('Y') }} IASSW AIETS. All Rights Reserved.</span>
      <span><a href="#">Privacy Policy</a><a href="#">Terms of Use</a></span>
    </div>
  </footer>

  <!-- ============ SIDE DRAWER (desktop hamburger) ============ -->
  <div class="drawer-overlay" id="drawerOverlay"></div>
  <aside class="drawer" id="drawer" aria-hidden="true" aria-label="Site menu">
    <div class="drawer__head"><strong>Menu</strong><button class="drawer__close" id="drawerClose"
        aria-label="Close menu">✕</button></div>
    <div class="drawer__body" id="drawerBody"></div>
    <a href="{{ url('/admin') }}" class="btn btn--login drawer__login">ADMIN / LOGIN</a>
  </aside>
