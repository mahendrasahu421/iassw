@extends('layouts.master')

@section('title', 'About Us – IASSW AIETS')
@section('meta_description', 'About IASSW – the global voice for social work education, committed to excellence, social justice and global collaboration.')

@push('styles')
  <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush

@section('content')
    <svg width="0" height="0" style="position:absolute" aria-hidden="true">
      <symbol id="i-cap" viewBox="0 0 24 24">
        <path d="M2 9l10-5 10 5-10 5z" />
        <path d="M6 11.5V16c0 1.5 3 3 6 3s6-1.5 6-3v-4.5" />
      </symbol>
      <symbol id="i-people" viewBox="0 0 24 24">
        <circle cx="8" cy="8" r="3" />
        <circle cx="17" cy="9" r="2.5" />
        <path d="M2 20c0-3.5 2.7-6 6-6s6 2.5 6 6M15 14.5c3 0 6 1.5 6 5" />
      </symbol>
      <symbol id="i-book" viewBox="0 0 24 24">
        <path d="M4 5a2 2 0 0 1 2-2h13v16H6a2 2 0 0 0-2 2z" />
        <path d="M4 21V5M8 7h7" />
      </symbol>
      <symbol id="i-leaf" viewBox="0 0 24 24">
        <path d="M20 4C9 4 4 9 4 15a5 5 0 0 0 5 5c6 0 11-5 11-16z" />
        <path d="M4 20c3-6 7-9 11-11" />
      </symbol>
      <symbol id="i-scale" viewBox="0 0 24 24">
        <path d="M12 3v18M6 21h12M4 7h16" />
        <path d="M4 7l-2.5 7a3 3 0 0 0 5 0zM20 7l-2.5 7a3 3 0 0 0 5 0z" />
      </symbol>
      <symbol id="i-globe" viewBox="0 0 24 24">
        <circle cx="12" cy="12" r="9" />
        <path d="M3 12h18M12 3c3 3 3 15 0 18M12 3c-3 3-3 15 0 18" />
      </symbol>
      <symbol id="i-plus" viewBox="0 0 24 24">
        <circle cx="12" cy="12" r="9" />
        <path d="M12 8v8M8 12h8" />
      </symbol>
      <symbol id="i-doc" viewBox="0 0 24 24">
        <path d="M6 3h8l4 4v14H6z" />
        <path d="M14 3v4h4M9 12h6M9 16h6" />
      </symbol>
      <symbol id="i-down" viewBox="0 0 24 24">
        <path d="M12 4v11M7 11l5 5 5-5M5 20h14" />
      </symbol>
      <symbol id="i-building" viewBox="0 0 48 48">
        <path d="M6 42h36M10 42V18l14-8 14 8v24M18 42V30h12v12M16 22h4M28 22h4" />
      </symbol>
      <symbol id="i-pin" viewBox="0 0 48 48">
        <path d="M24 44S10 32 10 20a14 14 0 0 1 28 0c0 12-14 24-14 24z" />
        <circle cx="24" cy="20" r="5" />
      </symbol>
      <symbol id="i-eye" viewBox="0 0 48 48">
        <path d="M3 24s8-14 21-14 21 14 21 14-8 14-21 14S3 24 3 24z" />
        <circle cx="24" cy="24" r="6" />
      </symbol>
    </svg>

    <!-- ============ HERO ============ -->
    <section class="hero hero--about">
      <div class="container hero__content">
        <h1 class="hero__title">About IASSW</h1>
        <p class="hero__text">IASSW is the global voice for social work education, committed to excellence in education,
          social justice and global collaboration.</p>
      </div>
    </section>

    <!-- ============ WHO WE ARE ============ -->
    <section class="container who">
      <div class="panel who__text reveal">
        <span class="kicker">WHO WE ARE</span>
        <h2>A Global Voice for Social Work</h2>
        <p>The International Association of Schools of Social Work (IASSW) is a worldwide network of social work
          educational institutions, individuals and organizations. We connect and strengthen schools, educators,
          researchers and practitioners to advance knowledge, build capacity and promote social justice globally.</p>
      </div>
      <div class="who__img reveal"><img src="{{ asset('images/who.svg') }}" alt="Hands holding a globe" loading="lazy"></div>
      <div class="panel download reveal">
        <span class="kicker">DOWNLOAD</span>
        <ul>
          <li><a href="#"><i class="ico"><svg><use href="#i-doc" /></svg></i><span>IASSW Overview</span><svg class="dl"><use href="#i-down" /></svg></a></li>
          <li><a href="#"><i class="ico"><svg><use href="#i-doc" /></svg></i><span>Strategic Plan</span><svg class="dl"><use href="#i-down" /></svg></a></li>
          <li><a href="#"><i class="ico"><svg><use href="#i-doc" /></svg></i><span>Annual Report</span><svg class="dl"><use href="#i-down" /></svg></a></li>
          <li><a href="#"><i class="ico"><svg><use href="#i-doc" /></svg></i><span>Brochure</span><svg class="dl"><use href="#i-down" /></svg></a></li>
          <li><a href="#"><i class="ico"><svg><use href="#i-doc" /></svg></i><span>Annual Report</span><svg class="dl"><use href="#i-down" /></svg></a></li>
          <li><a href="#"><i class="ico"><svg><use href="#i-doc" /></svg></i><span>Brochure</span><svg class="dl"><use href="#i-down" /></svg></a></li>
        </ul>
      </div>
    </section>

    <!-- ============ STATS ============ -->
    <section class="container stats-wrap">
      <div class="stats reveal">
        <div class="stat"><svg class="stat__ico"><use href="#i-building" /></svg><strong>~<span data-count="500">500</span></strong><span>Member Institutions</span></div>
        <div class="stat"><svg class="stat__ico"><use href="#i-globe" /></svg><strong><span data-count="100">100</span>+</strong><span>Countries</span></div>
        <div class="stat"><svg class="stat__ico"><use href="#i-pin" /></svg><strong><span data-count="5">5</span></strong><span>Global Regions</span></div>
        <div class="stat"><svg class="stat__ico"><use href="#i-people" /></svg><strong>Thousands</strong><span>of Educators &amp; Practitioners</span></div>
        <div class="stat"><svg class="stat__ico"><use href="#i-eye" /></svg><strong>One Vision</strong><span>Stronger Social Work Education for All</span></div>
      </div>
    </section>

    <!-- ============ PRESIDENT ============ -->
    <section class="container feature feature--president reveal" id="presidents">
      <div class="feature__img"><img src="{{ asset('images/president.svg') }}" alt="Antoinette Lombard" loading="lazy"></div>
      <div class="feature__body">
        <h2>President of IASSW</h2>
        <p class="person"><strong>Antoinette Lombard</strong><br><a href="mailto:antoinette.lombard@up.ac.za">antoinette.lombard@up.ac.za</a></p>
        <p>Position within Board of Directors and Terms of Serving: President, (2024 to 2028.)</p>
        <p>Affiliation and Position (other than IASSW): (Degrees): Professor in Social Work, University of Pretoria, South Africa</p>
        <a href="#" class="btn btn--navy">View full Profile</a>
      </div>
    </section>

    <!-- ============ GOVERNANCE ============ -->
    <section class="container feature feature--rev reveal" id="governance">
      <div class="feature__body">
        <h2>Governance &amp; Leadership</h2>
        <p>IASSW is guided by a dedicated leadership team and a robust governance structure that ensures transparency,
          accountability and strategic direction. Our leadership works collaboratively to advance the organisation’s
          mission, strengthen international partnerships and support the development of social work education, research
          and practice. Through effective governance, IASSW brings together leaders and representatives from different
          regions to promote collaboration, shared responsibility and meaningful global engagement. This structure helps
          ensure that the organisation remains responsive to the evolving needs of the social work profession and the
          communities it serves.</p>
        <a href="#" class="btn btn--navy">Learn More</a>
      </div>
      <div class="feature__img"><img src="{{ asset('images/governance.svg') }}" alt="Boardroom" loading="lazy"></div>
    </section>

    <!-- ============ SECRETARIAT ============ -->
    <section class="container secretariat reveal" id="secretariat">
      <div class="secretariat__text">
        <h2>IASSW Secretariat</h2>
        <p>The IASSW Secretariat provides essential operational and administrative support to the organisation, helping
          coordinate activities, programmes and communications across its global network.</p>
        <p>The Secretariat works closely with the leadership, members, committees and regional representatives to ensure
          effective coordination and smooth implementation of IASSW initiatives. It also supports communication,
          membership engagement, meetings, events and day-to-day organisational activities.</p>
        <a href="#" class="btn btn--navy">Learn More</a>
      </div>
      <div class="secretariat__img"><img src="{{ asset('images/secretariat.svg') }}" alt="Secretariat team at work" loading="lazy"></div>
      <ul class="secretariat__list">
        <li>
          <h3>Coordination</h3>
          <p>Supporting IASSW activities, meetings and programmes.</p>
        </li>
        <li>
          <h3>Member Support</h3>
          <p>Facilitating communication and engagement with members.</p>
        </li>
        <li>
          <h3>Global Operations</h3>
          <p>Connecting leadership, committees and regional representatives.</p>
        </li>
      </ul>
    </section>

    <!-- ============ COMMITTEES ============ -->
    <section class="committees" id="committees">
      <div class="container">
        <h2 class="committees__title reveal">Committees, Taskforces &amp; Special Interest Groups</h2>
        <p class="committees__lead reveal">IASSW’s committees, taskforces and Special Interest Groups (SIGs) bring
          together experts and members to work on key issues, drive innovation and support the profession’s development.
        </p>
        <div class="committees__grid">
          <a href="#" class="ccard reveal"><svg><use href="#i-cap" /></svg>
            <h3>Academic Affairs Committee</h3>
            <p>Supports key academic and educational priorities within IASSW.</p>
          </a>
          <a href="#" class="ccard reveal"><svg><use href="#i-people" /></svg>
            <h3>Gender &amp; Diversity Taskforce</h3>
            <p>Promotes attention to gender equality, diversity, inclusion and related social justice issues.</p>
          </a>
          <a href="#" class="ccard reveal"><svg><use href="#i-book" /></svg>
            <h3>Research &amp; Publications</h3>
            <p>Supports research collaboration, knowledge sharing and publications.</p>
          </a>
          <a href="#" class="ccard reveal"><svg><use href="#i-leaf" /></svg>
            <h3>Climate Justice Taskforce</h3>
            <p>Addresses climate change, sustainability, disasters and environmental justice in social work.</p>
          </a>
          <a href="#" class="ccard reveal"><svg><use href="#i-scale" /></svg>
            <h3>Ethics &amp; Standards Committee</h3>
            <p>Focuses on ethical principles and standards related to social work education and practice.</p>
          </a>
          <a href="#" class="ccard reveal"><svg><use href="#i-people" /></svg>
            <h3>Special Interest Groups (SIGs)</h3>
            <p>Connects members around shared academic, professional and social work interests.</p>
          </a>
          <a href="#" class="ccard reveal"><svg><use href="#i-globe" /></svg>
            <h3>Global South Taskforce</h3>
            <p>Supports perspectives, collaboration and priorities relevant to the Global South.</p>
          </a>
          <a href="#" class="ccard reveal"><svg><use href="#i-plus" /></svg>
            <h3>And More</h3>
            <p>Explore additional IASSW committees, taskforces and groups.</p>
          </a>
        </div>
        <div class="committees__cta"><a href="#" class="btn btn--navy">Learn More</a></div>
      </div>
    </section>

    <!-- ============ REPRESENTATION + STATEMENTS ============ -->
    <section class="container bottom">
      <div class="rep reveal" id="representation">
        <div class="rep__text">
          <h2>Global Representation</h2>
          <ul>
            <li><i style="background:#1a8ca6"></i>Africa (ASSWA)</li>
            <li><i style="background:#058cd9"></i>Asia-Pacific (APASWE)</li>
            <li><i style="background:#7530f5"></i>Europe (EASSW)</li>
            <li><i style="background:#fc4c05"></i>Latin America (ALAEITS)</li>
            <li><i style="background:#fea809"></i>North America (NACASSW)</li>
          </ul>
        </div>
        <img class="rep__map" src="{{ asset('images/map.svg') }}" alt="World map of IASSW regions" loading="lazy">
        <p class="rep__note">Active in <strong>100+</strong> countries through our member institutions and partners.</p>
      </div>

      <div class="stmt reveal" id="statements">
        <h2>Statements &amp; Positions</h2>
        <ul>
          <li><a href="#"><i class="ico"><svg><use href="#i-doc" /></svg></i>Social Work and Human Rights</a></li>
          <li><a href="#"><i class="ico"><svg><use href="#i-doc" /></svg></i>Climate Justice and Sustainability</a></li>
          <li><a href="#"><i class="ico"><svg><use href="#i-doc" /></svg></i>Ethics in Social Work Education</a></li>
          <li><a href="#"><i class="ico"><svg><use href="#i-doc" /></svg></i>Global Solidarity and Peace</a></li>
        </ul>
      </div>
    </section>
@endsection
