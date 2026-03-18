/* =========================================
   FinSteps Wealth — Main JS
   ========================================= */

document.addEventListener('DOMContentLoaded', () => {

  /* --- Sticky Navigation --- */
  const header = document.getElementById('site-header');
  if (header) {
    const onScroll = () => {
      if (window.scrollY > 40) {
        header.classList.add('scrolled');
        header.classList.remove('transparent');
      } else {
        header.classList.remove('scrolled');
        header.classList.add('transparent');
      }
    };
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }

  /* --- Mobile Nav Toggle --- */
  const hamburger = document.getElementById('nav-hamburger');
  const mobileNav  = document.getElementById('mobile-nav');
  const mobileClose = document.getElementById('mobile-nav-close');

  if (hamburger && mobileNav) {
    hamburger.addEventListener('click', () => mobileNav.classList.add('open'));
  }
  if (mobileClose && mobileNav) {
    mobileClose.addEventListener('click', () => mobileNav.classList.remove('open'));
  }
  if (mobileNav) {
    mobileNav.querySelectorAll('a').forEach(a => {
      a.addEventListener('click', () => mobileNav.classList.remove('open'));
    });
  }

  /* --- Scroll Reveal --- */
  const reveals = document.querySelectorAll('.reveal');
  if (reveals.length) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
    reveals.forEach(el => observer.observe(el));
  }

  /* --- Active Nav Link --- */
  const navLinks = document.querySelectorAll('.nav-links a, .mobile-nav a');
  const currentPath = window.location.pathname;
  navLinks.forEach(link => {
    const href = link.getAttribute('href') || '';
    if (
      href === currentPath ||
      (href !== '/' && currentPath.includes(href)) ||
      (href.includes('index') && (currentPath === '/' || currentPath.endsWith('index.php') || currentPath.endsWith('index.html')))
    ) {
      link.classList.add('active');
    }
  });

  /* --- Counter Animation --- */
  const counters = document.querySelectorAll('[data-count]');
  if (counters.length) {
    const countObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const el = entry.target;
          const target = parseFloat(el.dataset.count);
          const suffix = el.dataset.suffix || '';
          const prefix = el.dataset.prefix || '';
          const duration = 1800;
          const start = performance.now();
          const isDecimal = String(target).includes('.');
          const animate = (now) => {
            const elapsed = now - start;
            const progress = Math.min(elapsed / duration, 1);
            const eased = 1 - Math.pow(1 - progress, 3);
            const current = eased * target;
            el.textContent = prefix + (isDecimal ? current.toFixed(1) : Math.floor(current)) + suffix;
            if (progress < 1) requestAnimationFrame(animate);
          };
          requestAnimationFrame(animate);
          countObserver.unobserve(el);
        }
      });
    }, { threshold: 0.5 });
    counters.forEach(el => countObserver.observe(el));
  }

  /* --- FAQ Accordion --- */
  document.querySelectorAll('.faq-item').forEach(item => {
    item.addEventListener('click', () => {
      const isOpen = item.classList.contains('open');
      document.querySelectorAll('.faq-item.open').forEach(i => i.classList.remove('open'));
      if (!isOpen) item.classList.add('open');
    });
  });

  /* --- Contact Form --- */
  const contactForm = document.getElementById('contact-form');
  if (contactForm) {
    contactForm.addEventListener('submit', e => {
      e.preventDefault();
      const btn = contactForm.querySelector('.btn-submit');
      const originalText = btn.innerHTML;
      btn.innerHTML = '&#10003; Message Sent! We\'ll be in touch soon.';
      btn.style.background = '#27ae60';
      btn.disabled = true;
      setTimeout(() => {
        btn.innerHTML = originalText;
        btn.style.background = '';
        btn.disabled = false;
        contactForm.reset();
      }, 4000);
    });
  }

  /* --- Chart Bar Animation --- */
  const chartBars = document.querySelectorAll('.chart-bar');
  const heights = [45, 60, 38, 72, 55, 85, 68];
  chartBars.forEach((bar, i) => {
    bar.style.height = heights[i % heights.length] + '%';
  });

  /* --- SIP Calculator --- */
  const sipAmount = document.getElementById('sip-amount');
  const sipYears  = document.getElementById('sip-years');
  const sipRate   = document.getElementById('sip-rate');

  function formatINR(n) {
    if (n >= 1e7) return '&#8377;' + (n/1e7).toFixed(2) + ' Cr';
    if (n >= 1e5) return '&#8377;' + (n/1e5).toFixed(2) + ' L';
    return '&#8377;' + Math.round(n).toLocaleString('en-IN');
  }

  function calcSIP() {
    if (!sipAmount) return;
    const P  = parseFloat(sipAmount.value);
    const n  = parseFloat(sipYears.value) * 12;
    const r  = parseFloat(sipRate.value) / 100 / 12;
    const FV = P * (((Math.pow(1 + r, n) - 1) / r) * (1 + r));
    const invested = P * n;
    const returns  = FV - invested;

    document.getElementById('sip-amount-label').textContent = '&#8377;' + P.toLocaleString('en-IN');
    document.getElementById('sip-years-label').textContent  = sipYears.value + ' Years';
    document.getElementById('sip-rate-label').textContent   = sipRate.value + '%';
    document.getElementById('calc-invested').innerHTML      = formatINR(invested);
    document.getElementById('calc-returns').innerHTML       = formatINR(returns);
    document.getElementById('calc-total').innerHTML         = formatINR(FV);
  }

  if (sipAmount) {
    [sipAmount, sipYears, sipRate].forEach(el => el.addEventListener('input', calcSIP));
    calcSIP();
  }

  /* --- Range slider gradient track fill --- */
  document.querySelectorAll('.calc-range').forEach(range => {
    const update = () => {
      const min = range.min, max = range.max, val = range.value;
      const pct = ((val - min) / (max - min)) * 100;
      range.style.background = `linear-gradient(90deg, var(--green) ${pct}%, rgba(255,255,255,.15) ${pct}%)`;
    };
    range.addEventListener('input', update);
    update();
  });

});
