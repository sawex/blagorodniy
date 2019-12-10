/* global jQuery, google, mainState */
const Main = function () {
  // Header
  this.header = document.querySelector('.header');
  this.hambButton = document.querySelector('.hamburger');
  this.mobileMenu = document.querySelector('.header__mob-open-menu');

  /* Google Maps */
  this.mapWrapper = document.querySelector('.contacts__map');
  this.gMapsApiKey = mainState.googleMaps.apiKey;
  this.zoom = mainState.googleMaps.zoom;
  this.mapCenter = mainState.googleMaps.mapCenter;
  this.markers = mainState.googleMaps.markers;
};

Main.prototype.initStickyHeader = function() {
  if (!this.header) return;

  if (jQuery(window).scrollTop() >= 20) {
    this.header.classList.add('header__scrolling');
  }

  jQuery(window).scroll(() => {
    if (jQuery(window).scrollTop() >= 20) {
      this.header.classList.add('header__scrolling');
    } else {
      this.header.classList.remove('header__scrolling');
    }
  });
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
  new Gumshoe('.header__nav .header__nav-list .header__nav-link', {
    navClass: 'header__nav-list-item--active',
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

Main.prototype.initContactsCollapseButton = function() {
  document.querySelector('.header__contacts-toggle-btn').addEventListener('click', () => {
    document.querySelector('.header__contacts-list').classList.toggle('header__contacts-list--collapsed');
    document.querySelector('.header__contacts-toggle-btn').classList.toggle('header__contacts-toggle-btn--arrow-up');

    const stickyHeader = document.querySelector('.header__scrolling');

    if (!stickyHeader) return;

    if (!stickyHeader.style.minHeight || stickyHeader.style.minHeight === '66px') {
      stickyHeader.style.minHeight = '160px';
    } else {
      stickyHeader.style.minHeight = '66px';
    }
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
        breakpoint: 1200,
        settings: {
          prevArrow: jQuery('.activities .reports__gallery-nav-btn--prev'),
          nextArrow: jQuery('.activities .reports__gallery-nav-btn--next'),
          dots: false,
          autoplay: true,
          autoplaySpeed: 5000,
        }
      }
    ],
  });

  window.addEventListener('resize', () => {
    if (window.matchMedia('(max-width: 768px)')) {
      jQuery('.activities__wrapper--mobile').slick('refresh');
    }
  });
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
  this.initStickyHeader();
  this.initHamburgerMenu();
  this.scrollSpy();
  this.smoothAnchors();
  this.initContactsCollapseButton();
  this.initClipboardSaver();
  this.initActivitiesSlider();
  this.initMap();
};

document.addEventListener('DOMContentLoaded', () => {
  const m = new Main;
  m.init();
});
