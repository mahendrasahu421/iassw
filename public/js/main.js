(function () {
  'use strict';

  /* Sticky header shadow */
  var header = document.getElementById('header');
  function onScroll() { header.classList.toggle('scrolled', window.scrollY > 10); }
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  /* Mobile menu */
  var burger = document.getElementById('burger');
  var nav = document.getElementById('nav');
  function setMenu(open) {
    nav.classList.toggle('open', open);
    burger.setAttribute('aria-expanded', open);
    burger.textContent = open ? '✕' : '☰';
  }
  /* Desktop drawer: built from the main nav */
  var drawer = document.getElementById('drawer');
  var overlay = document.getElementById('drawerOverlay');
  var drawerBody = document.getElementById('drawerBody');
  document.querySelectorAll('.nav__list > .nav__item').forEach(function (li) {
    var d = document.createElement('details');
    var s = document.createElement('summary');
    s.textContent = li.querySelector(':scope > a').textContent;
    var ul = document.createElement('ul');
    li.querySelectorAll('.sub a').forEach(function (a) {
      var l = document.createElement('li'), n = document.createElement('a');
      n.href = a.getAttribute('href'); n.textContent = a.textContent; l.appendChild(n); ul.appendChild(l);
    });
    d.appendChild(s); d.appendChild(ul); drawerBody.appendChild(d);
  });
  function setDrawer(open) {
    drawer.classList.toggle('open', open);
    overlay.classList.toggle('open', open);
    drawer.setAttribute('aria-hidden', !open);
    burger.setAttribute('aria-expanded', open);
    document.body.style.overflow = open ? 'hidden' : '';
  }
  document.getElementById('drawerClose').addEventListener('click', function () { setDrawer(false); });
  overlay.addEventListener('click', function () { setDrawer(false); });

  burger.addEventListener('click', function () {
    if (window.innerWidth > 1100) setDrawer(!drawer.classList.contains('open'));
    else setMenu(!nav.classList.contains('open'));
  });

  /* Mobile sub-menu accordions */
  document.querySelectorAll('.has-sub > a').forEach(function (link) {
    link.addEventListener('click', function (e) {
      if (window.matchMedia('(max-width:1100px)').matches) {
        e.preventDefault();
        link.parentElement.classList.toggle('open');
      }
    });
  });

  /* Close menu on outside click / Escape / resize to desktop */
  document.addEventListener('click', function (e) {
    if (!nav.contains(e.target) && !burger.contains(e.target)) setMenu(false);
  });
  document.addEventListener('keydown', function (e) { if (e.key === 'Escape') { setMenu(false); setDrawer(false); } });
  window.addEventListener('resize', function () { if (window.innerWidth > 1100) setMenu(false); else setDrawer(false); });

  /* Scroll reveal (staggered per row of 3) */
  var items = document.querySelectorAll('.reveal');
  if ('IntersectionObserver' in window) {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (en) {
        if (!en.isIntersecting) return;
        var idx = Array.prototype.indexOf.call(en.target.parentElement.children, en.target);
        en.target.style.transitionDelay = (idx % 3) * 90 + 'ms';
        en.target.classList.add('in');
        io.unobserve(en.target);
      });
    }, { threshold: 0.12 });
    items.forEach(function (el) { io.observe(el); });
  } else {
    items.forEach(function (el) { el.classList.add('in'); });
  }

  /* Newsletter validation */
  var form = document.getElementById('newsletterForm');
  var email = document.getElementById('email');
  var msg = document.getElementById('formMsg');
  if (form) form.addEventListener('submit', function (e) {
    e.preventDefault();
    var ok = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value.trim());
    msg.className = 'form-msg' + (ok ? '' : ' error');
    msg.textContent = ok ? 'Thank you for subscribing!' : 'Please enter a valid email address.';
    if (ok) {
      // TODO: send email.value to your backend, e.g. fetch('/subscribe', { method:'POST', body: ... })
      form.reset();
    }
  });

  /* Count-up numbers (about page stats) */
  var counters = document.querySelectorAll('[data-count]');
  if (counters.length && 'IntersectionObserver' in window && !window.matchMedia('(prefers-reduced-motion:reduce)').matches) {
    var co = new IntersectionObserver(function (entries) {
      entries.forEach(function (en) {
        if (!en.isIntersecting) return;
        var el = en.target, end = +el.dataset.count, start = performance.now(), dur = 1400;
        (function tick(now) {
          var p = Math.min((now - start) / dur, 1);
          el.textContent = Math.round(end * (1 - Math.pow(1 - p, 3)));
          if (p < 1) requestAnimationFrame(tick);
        })(start);
        co.unobserve(el);
      });
    }, { threshold: 0.6 });
    counters.forEach(function (el) { el.textContent = '0'; co.observe(el); });
  }
})();
