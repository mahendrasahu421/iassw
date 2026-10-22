@extends('layouts.master')

@section('title', 'IASSW AIETS – Advancing Global Social Work Excellence')

@section('content')
    <!-- ============ HERO ============ -->
    <section class="hero">
      <div class="container hero__content">
        <h1 class="hero__title">Advancing Global<br><span>Social Work Excellence</span></h1>
        <p class="hero__text">IASSW AIETS is a global community committed to promoting social justice, human rights,
          ethical practice, education, and the dignity of people worldwide through collaboration and professional
          development.</p>
        <div class="hero__actions">
          <a href="#about" class="btn btn--gold">About IASSW</a>
          <a href="#resources" class="btn btn--white">Explore Our Work</a>
        </div>
      </div>
    </section>

    <!-- ============ ABOUT ============ -->
    <section class="container about-wrap" id="about">
      <div class="about reveal">
        <div class="about__intro">
          <h2>ABOUT IASSW</h2>
          <p>IASSW is the global voice of social work education. We promote excellence in social work education,
            strengthen institutions, and advance research, practice and policy for social justice worldwide.</p>
          <a href="{{ url('/about') }}" class="btn btn--navy">Learn More About Us &nbsp;→</a>
        </div>
        <div class="about__pillars">
          <div class="pillar">
            <svg viewBox="0 0 48 48" fill="none" stroke="#f4a724" stroke-width="2.2" stroke-linecap="round"
              stroke-linejoin="round">
              <circle cx="24" cy="12" r="5" />
              <circle cx="10" cy="20" r="4" />
              <circle cx="38" cy="20" r="4" />
              <path d="M14 40v-6a10 10 0 0 1 20 0v6M2 36v-3a8 8 0 0 1 8-8M46 36v-3a8 8 0 0 0-8-8" />
            </svg>
            <h3>Global Leadership</h3>
            <p>Shaping the future of social work education</p>
          </div>
          <div class="pillar">
            <svg viewBox="0 0 48 48" fill="none" stroke="#f4a724" stroke-width="2.2" stroke-linecap="round"
              stroke-linejoin="round">
              <path d="M17 31c-4-3-6-6-6-11a13 13 0 0 1 26 0c0 5-2 8-6 11v4H17z" />
              <path d="M18 40h12M20 44h8M24 20v8M20 24h8" />
            </svg>
            <h3>Knowledge &amp; Innovation</h3>
            <p>Advancing research and evidence-based practice</p>
          </div>
          <div class="pillar">
            <svg viewBox="0 0 48 48" fill="none" stroke="#f4a724" stroke-width="2.2" stroke-linecap="round"
              stroke-linejoin="round">
              <circle cx="24" cy="24" r="6" />
              <path d="M6 24h12M30 24h12M24 6v12M24 30v12" opacity=".0" />
              <circle cx="9" cy="10" r="4" />
              <circle cx="39" cy="10" r="4" />
              <circle cx="9" cy="38" r="4" />
              <circle cx="39" cy="38" r="4" />
              <path d="M12 13l8 7M36 13l-8 7M12 35l8-7M36 35l-8-7" />
            </svg>
            <h3>Collaboration</h3>
            <p>Building partnerships across borders</p>
          </div>
          <div class="pillar">
            <svg viewBox="0 0 48 48" fill="none" stroke="#f4a724" stroke-width="2.2" stroke-linecap="round"
              stroke-linejoin="round">
              <path d="M24 42S6 31 6 18a9 9 0 0 1 18-3 9 9 0 0 1 18 3c0 13-18 24-18 24z" />
              <path d="M16 24h16M24 17v14" opacity=".0" />
            </svg>
            <h3>Social Impact</h3>
            <p>Advancing equity, inclusion and human rights</p>
          </div>
        </div>
        <div class="about__image"><img src="{{ asset('images/about-global.svg') }}" alt="Hands holding a globe" loading="lazy"></div>
      </div>
    </section>

    <!-- ============ NEWS ============ -->
    <section class="container section" id="news">
      <div class="section__head reveal">
        <div>
          <span class="eyebrow">LATEST NEWS &amp; ANNOUNCEMENTS</span>
          <h2 class="section__title">Stay informed, Make an Impact</h2>
          <p class="section__lead">Stay informed with the latest IASSW updates, announcements and global social work
            developments.</p>
        </div>
        <a href="#" class="btn btn--outline">View All →</a>
      </div>

      <div class="grid grid--3">
        <article class="card reveal">
          <div class="card__media"><img src="{{ asset('images/news-1.svg') }}" alt="" loading="lazy"><span
              class="tag tag--gold">EVENT</span></div>
          <h3 class="card__title">Global Conference 2026 Announced</h3>
          <p class="card__text">Read the latest update from IASSW AIETS and explore news, resources and opportunities
            for educators and practitioners worldwide.</p>
          <div class="card__meta"><span>Aug 08, 2026</span><a href="#">Read More →</a></div>
        </article>
        <article class="card reveal">
          <div class="card__media"><img src="{{ asset('images/news-2.svg') }}" alt="" loading="lazy"><span
              class="tag tag--blue">DOCUMENT</span></div>
          <h3 class="card__title">New Global Social Work Documents Released</h3>
          <p class="card__text">Read the latest update from IASSW AIETS and explore news, resources and opportunities
            for educators and practitioners worldwide.</p>
          <div class="card__meta"><span>Aug 08, 2026</span><a href="#">Read More →</a></div>
        </article>
        <article class="card reveal">
          <div class="card__media"><img src="{{ asset('images/news-3.svg') }}" alt="" loading="lazy"><span
              class="tag tag--blue">WEBINAR</span></div>
          <h3 class="card__title">Regional Webinar on Ethical Practice</h3>
          <p class="card__text">Read the latest update from IASSW AIETS and explore news, resources and opportunities
            for educators and practitioners worldwide.</p>
          <div class="card__meta"><span>Aug 08, 2026</span><a href="#">Read More →</a></div>
        </article>
      </div>
    </section>

    <!-- ============ EVENTS ============ -->
    <section class="container section" id="events">
      <div class="section__head reveal">
        <div>
          <span class="eyebrow eyebrow--navy">UPCOMING EVENTS</span>
          <h2 class="section__title">Learn | Connect | Collaborate</h2>
          <p class="section__lead">Explore our upcoming events, conferences, webinars and programs designed to inspire,
            educate and create global impact</p>
        </div>
        <a href="#" class="btn btn--outline">View All →</a>
      </div>

      <div class="grid grid--3">
        <article class="card card--event reveal">
          <div class="card__media"><img src="{{ asset('images/event-1.svg') }}" alt="" loading="lazy"></div>
          <div class="event">
            <div class="event__date"><small>SEP</small><strong>17–19</strong></div>
            <div>
              <h3>IASSW Asia-Pacific Conference 2026</h3>
              <p class="event__loc"><svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor"
                  stroke-width="2">
                  <path d="M12 22s7-6.5 7-12a7 7 0 0 0-14 0c0 5.5 7 12 7 12z" />
                  <circle cx="12" cy="10" r="2.5" />
                </svg>Kuala Lumpur, Malaysia</p>
            </div>
          </div>
        </article>
        <article class="card card--event reveal">
          <div class="card__media"><img src="{{ asset('images/event-2.svg') }}" alt="" loading="lazy"></div>
          <div class="event">
            <div class="event__date"><small>MAR</small><strong>2027</strong></div>
            <div>
              <h3>World Social Work Day 2027</h3>
              <p class="event__loc"><svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor"
                  stroke-width="2">
                  <path d="M12 22s7-6.5 7-12a7 7 0 0 0-14 0c0 5.5 7 12 7 12z" />
                  <circle cx="12" cy="10" r="2.5" />
                </svg>16 March 2027</p>
            </div>
          </div>
        </article>
        <article class="card card--event reveal">
          <div class="card__media"><img src="{{ asset('images/event-3.svg') }}" alt="" loading="lazy"></div>
          <div class="event">
            <div class="event__date"><small>JUN</small><strong>2027</strong></div>
            <div>
              <h3>IASSW Europe Regional Conference 2027</h3>
              <p class="event__loc"><svg viewBox="0 0 24 24" width="15" height="15" fill="none" stroke="currentColor"
                  stroke-width="2">
                  <path d="M12 22s7-6.5 7-12a7 7 0 0 0-14 0c0 5.5 7 12 7 12z" />
                  <circle cx="12" cy="10" r="2.5" />
                </svg>Barcelona, Spain</p>
            </div>
          </div>
        </article>
      </div>
    </section>

    <!-- ============ RESOURCES ============ -->
    <section class="rs" id="resources">
      <div class="container">
        <header class="rs__head reveal">
          <h2 class="rs__title">Knowledge &amp; Resources</h2>
          <p class="rs__lead">Discover research, publications, documents and professional learning resources.</p>
        </header>

        <div class="rs__grid">
          <a href="#" class="rcard reveal" data-tone="gold">
            <span class="rcard__num">01</span>
            <span class="rcard__icon"><svg viewBox="0 0 24 24"><circle cx="10" cy="10" r="6"/><path d="M15 15l6 6M10 7v6M7 10h6"/></svg></span>
            <h3>Research &amp; Scholarship</h3>
            <p>Explore research, evidence and publications</p>
            <span class="rcard__link">Explore</span>
          </a>
          <a href="#" class="rcard reveal" data-tone="blue">
            <span class="rcard__num">02</span>
            <span class="rcard__icon"><svg viewBox="0 0 24 24"><path d="M6 3h8l4 4v14H6z"/><path d="M14 3v4h4M9 12h6M9 16h6"/></svg></span>
            <h3>IASSW Global Documents</h3>
            <p>Policies, reports and key documents</p>
            <span class="rcard__link">Explore</span>
          </a>
          <a href="#" class="rcard reveal" data-tone="gold">
            <span class="rcard__num">03</span>
            <span class="rcard__icon"><svg viewBox="0 0 24 24"><path d="M2 9l10-5 10 5-10 5z"/><path d="M6 11.5V16c0 1.5 3 3 6 3s6-1.5 6-3v-4.5M22 9v6"/></svg></span>
            <h3>Education &amp; Training</h3>
            <p>Learning resources for social work education</p>
            <span class="rcard__link">Explore</span>
          </a>
          <a href="#" class="rcard reveal" data-tone="blue">
            <span class="rcard__num">04</span>
            <span class="rcard__icon"><svg viewBox="0 0 24 24"><path d="M4 5a2 2 0 0 1 2-2h13v16H6a2 2 0 0 0-2 2z"/><path d="M4 21V5M8 7h7M8 11h5"/></svg></span>
            <h3>Publications</h3>
            <p>Books, journals and reports</p>
            <span class="rcard__link">Explore</span>
          </a>
          <a href="#" class="rcard reveal" data-tone="gold">
            <span class="rcard__num">05</span>
            <span class="rcard__icon"><svg viewBox="0 0 24 24"><rect x="3" y="5" width="18" height="14"/><path d="M10 9.5v5l4.500-2.500z"/></svg></span>
            <h3>Webinars &amp; Multimedia</h3>
            <p>Talks, recordings and presentations</p>
            <span class="rcard__link">Explore</span>
          </a>
          <a href="#" class="rcard reveal" data-tone="blue">
            <span class="rcard__num">06</span>
            <span class="rcard__icon"><svg viewBox="0 0 24 24"><circle cx="8" cy="8" r="3"/><circle cx="17" cy="9" r="2.5"/><path d="M2 20c0-3.5 2.7-6 6-6s6 2.5 6 6M15 14.5c3 0 6 1.5 6 5"/></svg></span>
            <h3>Special Interest Groups</h3>
            <p>Connect around shared professional interests</p>
            <span class="rcard__link">Explore</span>
          </a>
        </div>

        <div class="rs__cta reveal"><a href="#" class="btn btn--navy">Browse All Resources &nbsp;→</a></div>
      </div>
    </section>

    <!-- ============ NEWSLETTER ============ -->
    <section class="newsletter">
      <div class="container newsletter__inner">
        <div class="newsletter__text">
          <span class="newsletter__eyebrow">STAY CONNECTED</span>
          <h2>Get the latest Updates</h2>
          <p>Subscribe to our Newsletter for news, events , resources and opportunities delivered straight to your
            inbox.</p>
        </div>
        <form class="newsletter__form" id="newsletterForm" novalidate>
          <input type="email" id="email" placeholder="Enter your email address" aria-label="Email address" required>
          <button type="submit" class="btn btn--gold">Subscribe</button>
          <p class="form-msg" id="formMsg" role="status"></p>
        </form>
        <div class="follow">
          <h3>Follow us IASSW</h3>
          <div class="follow__icons">
            <a href="#" aria-label="Facebook"><svg viewBox="0 0 24 24" fill="#fff">
                <path d="M14 8h3V4h-3a4 4 0 0 0-4 4v2H7v4h3v8h4v-8h3l1-4h-4V8z" />
              </svg></a>
            <a href="#" aria-label="LinkedIn"><svg viewBox="0 0 24 24" fill="#fff">
                <path
                  d="M5 9h3v10H5zM6.5 4a1.8 1.8 0 1 1 0 3.6 1.8 1.8 0 0 1 0-3.6zM10 9h3v1.4c.5-.9 1.6-1.6 3.1-1.6 3 0 3.9 1.9 3.9 4.6V19h-3v-5c0-1.3-.3-2.3-1.7-2.3-1.5 0-2.3 1-2.3 2.4V19h-3z" />
              </svg></a>
            <a href="#" aria-label="RSS"><svg viewBox="0 0 24 24" fill="#fff">
                <circle cx="6" cy="18" r="2" />
                <path d="M4 4v3a13 13 0 0 1 13 13h3A16 16 0 0 0 4 4zm0 6v3a7 7 0 0 1 7 7h3a10 10 0 0 0-10-10z" />
              </svg></a>
            <a href="#" aria-label="X"><svg viewBox="0 0 24 24" fill="#fff">
                <path
                  d="M17.5 4h3l-6.6 7.5L21.700 20h-6l-4.700-6-5.300 6H2.700l7-8L2.300 4h6.200l4.200 5.500zM16.400 18.300h1.700L7.700 5.600H5.900z" />
              </svg></a>
          </div>
        </div>
      </div>
    </section>
@endsection
