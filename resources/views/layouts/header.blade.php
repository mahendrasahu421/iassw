  <!-- ============ HEADER ============ -->
  <header class="header" id="header">
    <div class="topbar">
      <div class="container topbar__inner">
        <div class="topbar__social">
          <a href="#" aria-label="Facebook">f</a><a href="#" aria-label="LinkedIn">in</a><a href="#"
            aria-label="RSS">RSS</a><a href="#" aria-label="X">X</a>
        </div>
        <nav class="topbar__links" aria-label="Utility">
          <a href="#">Join E-Learning</a><span>|</span>
          <a href="#">Executive Board Members</a><span>|</span>
          <a href="#">Podcasts</a><span>|</span>
          <a href="#">Contact Us</a>
        </nav>
      </div>
    </div>

    <div class="navbar">
      <div class="container navbar__inner">
        <a href="{{ url('/') }}" class="logo">
          <img src="{{ asset('images/logo.svg') }}" alt="IASSW AIETS"
            onerror="this.style.display='none';this.nextElementSibling.style.display='block'">
          <span class="logo__text">IASSW<br>AIETS</span>
        </a>

        <nav class="nav" id="nav" aria-label="Main">
          <ul class="nav__list">
            <li class="nav__item has-sub {{ Request::is('about') ? 'active' : '' }}">
              <a href="{{ url('/about') }}">About Us</a>
              <ul class="sub">
                <li><a href="{{ url('/about') }}">Who We Are</a></li>
                <li><a href="#">Our History</a></li>
                <li><a href="#">IASSW Presidents</a></li>
                <li><a href="#">Governance &amp; Leadership Interest</a></li>
                <li><a href="#">IASSW Secretariat</a></li>
                <li><a href="#">Committees, Taskforces &amp; SIGs</a></li>
                <li><a href="#">Global Representation</a></li>
                <li><a href="#">Statements &amp; Positions</a></li>
              </ul>
            </li>
            <li class="nav__item has-sub"><a href="#">Members</a>
              <ul class="sub">
                <li><a href="#">Why Join IASSW?</a></li>
                <li><a href="#">Membership Categories</a></li>
                <li><a href="#">Join or Renew Membership</a></li>
                <li><a href="#">Member Recognition, Awards &amp; ...</a></li>
                <li><a href="#">Membership FAQs</a></li>
              </ul>
            </li>
            <li class="nav__item has-sub"><a href="#">Regions</a>
              <ul class="sub">
                <li><a href="#">IASSW Regions — Overview</a></li>
                <li><a href="#">Africa — ASSWA</a></li>
                <li><a href="#">Asia-Pacific — APASWE</a></li>
                <li><a href="#">Europe — EASSW</a></li>
                <li><a href="#">Latin America — ALAEITS</a></li>
                <li><a href="#">North America — NACASSW</a></li>
              </ul>
            </li>
            <li class="nav__item has-sub"><a href="#">News and Events</a>
              <ul class="sub">
                <li><a href="#">IASSW News &amp; Announcements</a></li>
                <li><a href="#">President's Update</a></li>
                <li><a href="#">IASSW in the News</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">Conferences</a></li>
                <li><a href="#">World Social Work Day</a></li>
              </ul>
            </li>
            <li class="nav__item has-sub"><a href="#">Research and Projects</a>
              <ul class="sub">
                <li><a href="#">IASSW Funded Projects</a></li>
                <li><a href="#">Other Projects</a></li>
              </ul>
            </li>
            <li class="nav__item has-sub"><a href="#">SIGs</a>
              <ul class="sub">
                <li><a href="#">Overview</a></li>
                <li><a href="#">Indigenous Knowledge Systems...</a></li>
                <li><a href="#">Digital Transformation in Social...</a></li>
                <li><a href="#">Climate Justice and Eco-Social...</a></li>
                <li><a href="#">Migration, Displacement,...</a></li>
                <li><a href="#">Ageing, Care, and ....</a></li>
                <li><a href="#">Mental Health and Self-Care...</a></li>
                <li><a href="#">Gender Equality, Women and Girls</a></li>
                <li><a href="#">Gender and Sexual Diversity</a></li>
                <li><a href="#">Social Innovation and ....</a></li>
              </ul>
            </li>
            <li class="nav__item has-sub"><a href="#">Resources</a>
              <ul class="sub">
                <li><a href="#">Search Resources</a></li>
                <li><a href="#">Browse Resources</a></li>
                <li><a href="#">Contribute a Resource</a></li>
              </ul>
            </li>
            <li class="nav__item has-sub"><a href="#">Partnerships</a>
              <ul class="sub">
                <li><a href="#">Our Partners</a></li>
                <li><a href="#">Global Partnerships</a></li>
                <li><a href="#">IASSW at United Nations</a></li>
              </ul>
            </li>
          </ul>
          <a href="{{ url('/admin') }}" class="btn btn--login nav__login">ADMIN / LOGIN</a>
        </nav>

        <button class="burger" id="burger" aria-label="Toggle menu" aria-expanded="false" aria-controls="nav">☰</button>
      </div>
    </div>
  </header>
