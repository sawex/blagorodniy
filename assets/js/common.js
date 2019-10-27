/* global jQuery, google, mainState */
const Main = function () {
  // Header
  this.hambButton = document.querySelector('.hamburger');
  this.mobileMenu = document.querySelector('.header__mob-open-menu');

  /* Google Maps */
  this.mapWrapper = document.querySelector('.contacts__map');
  this.gMapsApiKey = mainState.googleMaps.apiKey;
  this.zoom = mainState.googleMaps.zoom;
  this.mapCenter = mainState.googleMaps.mapCenter;
  this.markers = mainState.googleMaps.markers;

  // Popups
  this.overlay = document.querySelector('.overlay');
  this.reportsViewer = document.querySelector('.popup--reports-viewer');
};

Main.prototype.initHamburgerMenu = function() {
  this.hambButton.addEventListener('click', () => {
    this.hambButton.classList.toggle('is-active');
    this.mobileMenu.classList.toggle('header__mob-open-menu--is-active');
  });
};

/**
 * Adds active classes to menu items on scroll
 *
 * @version 1.0.0
 * @package Maximumstart
 */
Main.prototype.scrollSpy = function() {
  window.addEventListener('scroll', () => {
    const sections = document.querySelectorAll('section[data-scrollspy-id]');
    const sectionsOffsets = {};

    sections.forEach((section) => {
      sectionsOffsets[section.dataset.scrollspyId] = section.offsetTop;
    });

    const scrollPosition = document.documentElement.scrollTop || document.body.scrollTop;

    for (const section in sectionsOffsets) {
      let currentSection = '';

      if (sectionsOffsets.hasOwnProperty(section) && sectionsOffsets[section] <= scrollPosition + 80) {
        currentSection = section;
      }

      if (currentSection) {
        const currentActiveEl = document.querySelector('.header__nav .header__nav-link--active');
        const newActiveEl = document.querySelector(`.header__nav .header__nav-link[href*=${currentSection}]`);

        if (currentActiveEl) {
          currentActiveEl.classList.remove('header__nav-link--active');
        }

        if (newActiveEl) {
          newActiveEl.classList.add('header__nav-link--active');
        }
      }
    }
  });
};

/**
 * Smooth scroll to an anchor target
 *
 * @version 1.0.2
 * @package Maximumstart
 */
Main.prototype.smoothAnchors = function() {
  document.querySelectorAll('a[href*="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      e.preventDefault();

      const pageUrl = new URL(document.URL);
      const url = new URL(anchor.href);
      const hash = url.hash;

      if (hash === '#') return;

      if (url.pathname === pageUrl.pathname) {
        const target = document.querySelector(hash);

        if (target) {
          target.scrollIntoView({
            behavior: 'smooth',
          });
        }
      } else {
        location = url.href;
      }
    });
  });
};

Main.prototype.initClipboardSaver = function() {
  if (typeof ClipboardJS !== 'function') return;

  const ttcBtns = document.querySelectorAll('.text-to-copy');
  const tooltip = document.querySelector('.clipboard-tooltip');

  // Tooltip showing on hover
  const followCursor = (e) => {
    const gap = 10;

    tooltip.style.cssText = `
      display: block;
      top: ${e.pageY + gap}px;
      left: ${e.pageX + gap}px;
    `;
  };

  ttcBtns.forEach((btn) => {
    btn.addEventListener('mouseover', () => {
      btn.addEventListener('mousemove', followCursor);
    });
  });

  ttcBtns.forEach((btn) => {
    btn.addEventListener('mouseout', () => {
      tooltip.style.display = 'none';
      btn.removeEventListener('mousemove', followCursor);
    });
  });

  // Saving to clipboard on click
  const clipboard = new ClipboardJS(ttcBtns);

  clipboard.on('success', function() {
    const tooltip = document.querySelector('.clipboard-tooltip');

    if (tooltip) {
      tooltip.classList.add('clipboard-tooltip--active');
      tooltip.innerText = 'Скопировано';

      setTimeout(() => {
        tooltip.classList.remove('clipboard-tooltip--active');
        tooltip.innerText = 'Нажмите, чтобы скопировать в буфер обмена';
      }, 2000);
    }
  });

  clipboard.on('error', function() {
    const tooltip = document.querySelector('.clipboard-tooltip');

    if (tooltip) {
      tooltip.classList.add('clipboard-tooltip--error');
      tooltip.innerText = 'Ошибка копирования';

      setTimeout(() => {
        tooltip.classList.remove('clipboard-tooltip--error');
        tooltip.innerText = 'Нажмите, чтобы скопировать в буфер обмена';
      }, 2000);
    }
  });
};

Main.prototype.initActivitiesSlider = function() {
  if (typeof jQuery !== 'function') return;

  jQuery('.activities__wrapper--mobile').slick({
    responsive: [
      {
        breakpoint: 99999,
        settings: 'unslick'
      },
      {
        breakpoint: 992,
        settings: {
          prevArrow: jQuery('.reports__gallery-nav-btn--prev'),
          nextArrow: jQuery('.reports__gallery-nav-btn--next'),
          dots: false,
          autoplay: true,
          autoplaySpeed: 5000,
        }
      }
    ]
  });

  window.addEventListener('resize', () => {
    if (window.matchMedia('(max-width: 992px)').matches) {
      jQuery('.activities__wrapper--mobile').slick('refresh')
    }
  });
};

Main.prototype.initReportsSlider = function() {
  if (typeof jQuery !== 'function') return;

  const prevBtn = document.querySelector('.reports .reports__gallery-nav-btn--prev');
  const nextBtn = document.querySelector('.reports .reports__gallery-nav-btn--next');

  const options = {
    arrows: false,
    dots: false,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 5000,
  };

  jQuery('.reports__gallery-row--top').slick({
    slidesToShow: 3,
    responsive: [
      {
        breakpoint: 992,
        slidesToShow: 2,
      },
      {
        breakpoint: 540,
        slidesToShow: 1,
      },
    ],
    ...options,
  });

  jQuery('.reports__gallery-row--bottom').slick({
    slidesToShow: 5,
    responsive: [
      {
        breakpoint: 992,
        slidesToShow: 3,
      },
      {
        breakpoint: 540,
        slidesToShow: 2,
      },
    ],
    ...options,
  });

  prevBtn.addEventListener('click', () => {
    jQuery('.reports__gallery-row--top').slick('slickPrev');
    jQuery('.reports__gallery-row--bottom').slick('slickPrev');
  });

  nextBtn.addEventListener('click', () => {
    jQuery('.reports__gallery-row--top').slick('slickNext');
    jQuery('.reports__gallery-row--bottom').slick('slickNext');
  });

  document.addEventListener('click', (e) => {
    const el = e.target;

    if (el.classList.contains('reports__gallery-img-box') || el.classList.contains('reports__gallery-img')) {
      this.overlay.classList.add('popup__active');
      this.reportsViewer.classList.add('popup__active');
    }
  });

  this.overlay.addEventListener('click', () => {
    this.overlay.classList.remove('popup__active');
    this.reportsViewer.classList.remove('popup__active');
  });

  if (document.querySelector('.popup__close-btn')) {
    document.querySelector('.popup__close-btn').addEventListener('click', () => {
      this.overlay.classList.remove('popup__active');
      this.reportsViewer.classList.remove('popup__active');
    });
  }
};

/**
 * Lazy load Google Maps initializing for best PageSpeed performance.
 * Gets some parameters from wp_localize_script().
 *
 * @version 1.0.1
 * @package Maximumstart
 *
 * */
Main.prototype.initMap = function() {
  if (!this.gMapsApiKey || !this.mapWrapper) return;

  window.initMap = () => {
    const map = new google.maps.Map(
      this.mapWrapper, {
        center: new google.maps.LatLng(this.mapCenter.latitude, this.mapCenter.longitude),
        zoom: this.zoom,
      }
    );

    if (this.markers.length) {
      this.markers.forEach((marker) => {
        new google.maps.Marker({
          position: new google.maps.LatLng(marker.latitude, marker.longitude),
          icon: marker.icon ? marker.icon : undefined,
          map,
        });
      });
    }
  };

  const renderMap = () => {

    if (window.scrollY > 1500) {

      const script = document.createElement('script');
      script.src = `https://maps.googleapis.com/maps/api/js?key=${this.gMapsApiKey}&callback=window.initMap`;
      script.async = true;
      script.defer = true;
      document.body.appendChild(script);

      window.removeEventListener('scroll', renderMap);
    }
  };

  window.addEventListener('scroll', renderMap);
};

Main.prototype.init = function () {
  this.initHamburgerMenu();
  this.scrollSpy();
  this.smoothAnchors();
  this.initClipboardSaver();
  this.initActivitiesSlider();
  this.initReportsSlider();
  this.initMap();
};

document.addEventListener('DOMContentLoaded', () => {
  const m = new Main;
  m.init();
});
