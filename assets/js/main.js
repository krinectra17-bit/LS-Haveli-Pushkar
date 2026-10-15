/**
 * L S HAVELI — PUSHKAR
 * Frontend Scripts & Interactions
 * Includes WhatsApp Booking System, Lightbox, Mobile Navigation, and Customizer Integration
 */

(function () {
  'use strict';

  // --- Configuration & Defaults ---
  const Config = window.LSHaveliConfig || {
    // Configurable WhatsApp Number (can be overridden via WordPress Customizer)
    whatsappNumber: '919829000000',
    hotelPhone: '+91 98290 00000',
    hotelEmail: 'info@lshavelipushkar.com',
    hotelAddress: 'Near Badi Puliya / High Bridge, Gurudwara Road, Parikarma Marg, Pushkar, Rajasthan 305022, India'
  };

  // --- DOM Elements ---
  const header = document.querySelector('.site-header');
  const mobileToggle = document.querySelector('.mobile-nav-toggle');
  const mobileDrawer = document.querySelector('.mobile-nav-drawer');
  const mobileBackdrop = document.querySelector('.mobile-nav-backdrop');
  const mobileLinks = document.querySelectorAll('.mobile-nav-link');
  
  const bookingModal = document.querySelector('#bookingModal');
  const bookingModalCloses = document.querySelectorAll('.booking-modal-close, .modal-close-trigger');
  const bookingTriggers = document.querySelectorAll('.open-booking-modal');
  const roomEnquiryBtns = document.querySelectorAll('.btn-room-enquiry');
  
  const bookingForm = document.querySelector('#whatsappBookingForm');
  const quickBookingForm = document.querySelector('#quickBookingForm');
  
  const lightboxModal = document.querySelector('#lightboxModal');
  const lightboxImg = document.querySelector('.lightbox-img');
  const lightboxCaption = document.querySelector('.lightbox-caption-text');
  const lightboxCounter = document.querySelector('.lightbox-counter');
  const lightboxClose = document.querySelector('.lightbox-close');
  const lightboxPrev = document.querySelector('.lightbox-prev');
  const lightboxNext = document.querySelector('.lightbox-next');
  const galleryItems = document.querySelectorAll('.gallery-item');
  const filterBtns = document.querySelectorAll('.gallery-filter-btn');

  const backToTopBtn = document.querySelector('.back-to-top-btn');

  // --- 1. Sticky Header Transition ---
  function handleHeaderScroll() {
    if (!header) return;
    const scrollY = window.pageYOffset || document.documentElement.scrollTop;
    if (scrollY > 50) {
      header.classList.add('scrolled');
      header.classList.remove('transparent');
    } else {
      header.classList.remove('scrolled');
      header.classList.add('transparent');
    }
  }

  window.addEventListener('scroll', handleHeaderScroll, { passive: true });
  handleHeaderScroll();

  // --- 2. Mobile Navigation Drawer ---
  function openMobileNav() {
    if (!mobileDrawer || !mobileToggle) return;
    mobileDrawer.classList.add('open');
    if (mobileBackdrop) mobileBackdrop.classList.add('open');
    mobileToggle.classList.add('open');
    mobileToggle.setAttribute('aria-expanded', 'true');
    document.body.style.overflow = 'hidden';
  }

  function closeMobileNav() {
    if (!mobileDrawer || !mobileToggle) return;
    mobileDrawer.classList.remove('open');
    if (mobileBackdrop) mobileBackdrop.classList.remove('open');
    mobileToggle.classList.remove('open');
    mobileToggle.setAttribute('aria-expanded', 'false');
    document.body.style.overflow = '';
  }

  if (mobileToggle) {
    mobileToggle.addEventListener('click', function (e) {
      e.stopPropagation();
      const isOpen = mobileDrawer.classList.contains('open');
      if (isOpen) {
        closeMobileNav();
      } else {
        openMobileNav();
      }
    });
  }

  if (mobileBackdrop) {
    mobileBackdrop.addEventListener('click', closeMobileNav);
  }

  mobileLinks.forEach(link => {
    link.addEventListener('click', closeMobileNav);
  });

  // --- 3. WhatsApp Booking System ---
  function openBookingModal(preferredRoom = '') {
    if (!bookingModal) return;
    bookingModal.classList.add('active');
    bookingModal.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';

    // Auto-select preferred room if supplied
    const roomSelect = document.querySelector('#modalPreferredRoom');
    if (roomSelect && preferredRoom) {
      for (let i = 0; i < roomSelect.options.length; i++) {
        if (roomSelect.options[i].text.toLowerCase().includes(preferredRoom.toLowerCase()) || 
            roomSelect.options[i].value.toLowerCase().includes(preferredRoom.toLowerCase())) {
          roomSelect.selectedIndex = i;
          break;
        }
      }
    }

    // Set initial date defaults
    setDefaultDates('#modalCheckIn', '#modalCheckOut');
  }

  function closeBookingModal() {
    if (!bookingModal) return;
    bookingModal.classList.remove('active');
    bookingModal.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
  }

  bookingTriggers.forEach(btn => {
    btn.addEventListener('click', function (e) {
      e.preventDefault();
      openBookingModal();
    });
  });

  roomEnquiryBtns.forEach(btn => {
    btn.addEventListener('click', function (e) {
      e.preventDefault();
      const roomName = this.getAttribute('data-room-name') || '';
      openBookingModal(roomName);
    });
  });

  bookingModalCloses.forEach(btn => {
    btn.addEventListener('click', closeBookingModal);
  });

  if (bookingModal) {
    bookingModal.addEventListener('click', function (e) {
      if (e.target === bookingModal) {
        closeBookingModal();
      }
    });
  }

  // --- Date Initialization & Helpers ---
  function formatDateYYYYMMDD(date) {
    const y = date.getFullYear();
    const m = String(date.getMonth() + 1).padStart(2, '0');
    const d = String(date.getDate()).padStart(2, '0');
    return `${y}-${m}-${d}`;
  }

  function setDefaultDates(checkInSelector, checkOutSelector) {
    const inEl = document.querySelector(checkInSelector);
    const outEl = document.querySelector(checkOutSelector);
    if (!inEl || !outEl) return;

    const today = new Date();
    const tomorrow = new Date(today);
    tomorrow.setDate(tomorrow.getDate() + 1);

    const minDateStr = formatDateYYYYMMDD(today);
    inEl.min = minDateStr;
    outEl.min = formatDateYYYYMMDD(tomorrow);

    if (!inEl.value) inEl.value = minDateStr;
    if (!outEl.value) outEl.value = formatDateYYYYMMDD(tomorrow);
  }

  // Set default dates on quick booking strip
  setDefaultDates('#quickCheckIn', '#quickCheckOut');

  // Sync min checkout date when checkin changes
  function attachDateChangeSync(checkInSelector, checkOutSelector) {
    const inEl = document.querySelector(checkInSelector);
    const outEl = document.querySelector(checkOutSelector);
    if (!inEl || !outEl) return;

    inEl.addEventListener('change', function () {
      if (inEl.value) {
        const selectedIn = new Date(inEl.value);
        const nextDay = new Date(selectedIn);
        nextDay.setDate(nextDay.getDate() + 1);
        const minOutStr = formatDateYYYYMMDD(nextDay);
        outEl.min = minOutStr;

        if (outEl.value && new Date(outEl.value) <= selectedIn) {
          outEl.value = minOutStr;
        }
      }
    });
  }

  attachDateChangeSync('#modalCheckIn', '#modalCheckOut');
  attachDateChangeSync('#quickCheckIn', '#quickCheckOut');

  // --- Build WhatsApp Booking URL ---
  function generateWhatsAppBookingUrl(params) {
    const number = Config.whatsappNumber.replace(/[^0-9]/g, '');

    const message = [
      'Hello L S Haveli,',
      '',
      'I would like to enquire about a stay.',
      '',
      `Guest Name: ${params.guestName || 'Not specified'}`,
      `Check-in: ${params.checkIn || 'To be decided'}`,
      `Check-out: ${params.checkOut || 'To be decided'}`,
      `Adults: ${params.adults || '1'}`,
      `Children: ${params.children || '0'}`,
      `Rooms: ${params.rooms || '1'}`,
      `Preferred Room: ${params.roomCategory || 'Any Available'}`,
      '',
      `Additional Message: ${params.message ? params.message : 'Please share available options and tariffs.'}`,
      '',
      'Please share the availability and applicable rates.',
      '',
      'Thank you.'
    ].join('\n');

    return `https://wa.me/${number}?text=${encodeURIComponent(message)}`;
  }

  // --- Validate and Handle Modal Form Submission ---
  if (bookingForm) {
    bookingForm.addEventListener('submit', function (e) {
      e.preventDefault();

      const nameInput = document.querySelector('#modalGuestName');
      const checkInInput = document.querySelector('#modalCheckIn');
      const checkOutInput = document.querySelector('#modalCheckOut');
      const adultsSelect = document.querySelector('#modalAdults');
      const childrenSelect = document.querySelector('#modalChildren');
      const roomsSelect = document.querySelector('#modalRooms');
      const roomSelect = document.querySelector('#modalPreferredRoom');
      const messageInput = document.querySelector('#modalMessage');

      let isValid = true;

      // Validate Guest Name
      const nameGroup = nameInput.closest('.form-group');
      if (!nameInput.value.trim()) {
        nameGroup.classList.add('has-error');
        isValid = false;
      } else {
        nameGroup.classList.remove('has-error');
      }

      // Validate Dates
      const checkInGroup = checkInInput.closest('.form-group');
      const checkOutGroup = checkOutInput.closest('.form-group');
      const checkInDate = new Date(checkInInput.value);
      const checkOutDate = new Date(checkOutInput.value);

      if (!checkInInput.value) {
        checkInGroup.classList.add('has-error');
        isValid = false;
      } else {
        checkInGroup.classList.remove('has-error');
      }

      if (!checkOutInput.value || checkOutDate <= checkInDate) {
        checkOutGroup.classList.add('has-error');
        isValid = false;
      } else {
        checkOutGroup.classList.remove('has-error');
      }

      if (!isValid) return;

      const params = {
        guestName: nameInput.value.trim(),
        checkIn: checkInInput.value,
        checkOut: checkOutInput.value,
        adults: adultsSelect ? adultsSelect.value : '2',
        children: childrenSelect ? childrenSelect.value : '0',
        rooms: roomsSelect ? roomsSelect.value : '1',
        roomCategory: roomSelect ? roomSelect.value : 'Deluxe Double Room',
        message: messageInput ? messageInput.value.trim() : ''
      };

      const waUrl = generateWhatsAppBookingUrl(params);
      closeBookingModal();
      window.open(waUrl, '_blank', 'noopener,noreferrer');
    });
  }

  // --- Handle Quick Booking Strip Form ---
  if (quickBookingForm) {
    quickBookingForm.addEventListener('submit', function (e) {
      e.preventDefault();

      const inVal = document.querySelector('#quickCheckIn').value;
      const outVal = document.querySelector('#quickCheckOut').value;
      const adultsVal = document.querySelector('#quickAdults').value;
      const roomVal = document.querySelector('#quickRoom').value;

      // Open modal with prefilled values
      openBookingModal(roomVal);

      if (inVal) document.querySelector('#modalCheckIn').value = inVal;
      if (outVal) document.querySelector('#modalCheckOut').value = outVal;
      if (adultsVal) document.querySelector('#modalAdults').value = adultsVal;
      if (roomVal) document.querySelector('#modalPreferredRoom').value = roomVal;

      // Focus on Guest Name
      const nameField = document.querySelector('#modalGuestName');
      if (nameField) nameField.focus();
    });
  }

  // --- 4. Interactive Photo Gallery & Lightbox ---
  let galleryData = [];
  let currentLightboxIndex = 0;

  function initGallery() {
    galleryData = [];
    galleryItems.forEach((item, index) => {
      const img = item.querySelector('img');
      const title = item.getAttribute('data-title') || (img ? img.alt : `Haveli Photo ${index + 1}`);
      const category = item.getAttribute('data-category') || 'haveli';
      const src = img ? img.currentSrc || img.src : '';

      galleryData.push({
        src: src,
        title: title,
        category: category,
        element: item
      });

      item.addEventListener('click', function () {
        openLightbox(index);
      });
    });
  }

  function openLightbox(index) {
    if (!lightboxModal || !galleryData[index]) return;
    currentLightboxIndex = index;
    updateLightboxContent();
    lightboxModal.classList.add('active');
    lightboxModal.setAttribute('aria-hidden', 'false');
    document.body.style.overflow = 'hidden';
  }

  function closeLightbox() {
    if (!lightboxModal) return;
    lightboxModal.classList.remove('active');
    lightboxModal.setAttribute('aria-hidden', 'true');
    document.body.style.overflow = '';
  }

  function updateLightboxContent() {
    const item = galleryData[currentLightboxIndex];
    if (!item) return;

    if (lightboxImg) {
      lightboxImg.src = item.src;
      lightboxImg.alt = item.title;
    }
    if (lightboxCaption) {
      lightboxCaption.textContent = item.title;
    }
    if (lightboxCounter) {
      lightboxCounter.textContent = `${currentLightboxIndex + 1} / ${galleryData.length}`;
    }
  }

  function nextLightbox() {
    currentLightboxIndex = (currentLightboxIndex + 1) % galleryData.length;
    updateLightboxContent();
  }

  function prevLightbox() {
    currentLightboxIndex = (currentLightboxIndex - 1 + galleryData.length) % galleryData.length;
    updateLightboxContent();
  }

  if (lightboxClose) lightboxClose.addEventListener('click', closeLightbox);
  if (lightboxNext) lightboxNext.addEventListener('click', nextLightbox);
  if (lightboxPrev) lightboxPrev.addEventListener('click', prevLightbox);

  if (lightboxModal) {
    lightboxModal.addEventListener('click', function (e) {
      if (e.target === lightboxModal) {
        closeLightbox();
      }
    });
  }

  // Gallery Category Filtering
  filterBtns.forEach(btn => {
    btn.addEventListener('click', function () {
      filterBtns.forEach(b => b.classList.remove('active'));
      this.classList.add('active');

      const filter = this.getAttribute('data-filter');

      galleryItems.forEach(item => {
        const itemCategory = item.getAttribute('data-category');
        if (filter === 'all' || itemCategory === filter) {
          item.style.display = '';
        } else {
          item.style.display = 'none';
        }
      });
    });
  });

  // Keyboard navigation for Lightbox & Modal
  document.addEventListener('keydown', function (e) {
    if (lightboxModal && lightboxModal.classList.contains('active')) {
      if (e.key === 'Escape') closeLightbox();
      if (e.key === 'ArrowRight') nextLightbox();
      if (e.key === 'ArrowLeft') prevLightbox();
    } else if (bookingModal && bookingModal.classList.contains('active')) {
      if (e.key === 'Escape') closeBookingModal();
    } else if (mobileDrawer && mobileDrawer.classList.contains('open')) {
      if (e.key === 'Escape') closeMobileNav();
    }
  });

  // Touch Swipe for Mobile Lightbox
  let touchStartX = 0;
  let touchEndX = 0;

  if (lightboxModal) {
    lightboxModal.addEventListener('touchstart', function (e) {
      touchStartX = e.changedTouches[0].screenX;
    }, { passive: true });

    lightboxModal.addEventListener('touchend', function (e) {
      touchEndX = e.changedTouches[0].screenX;
      handleLightboxSwipe();
    }, { passive: true });
  }

  function handleLightboxSwipe() {
    const threshold = 40;
    if (touchEndX < touchStartX - threshold) {
      nextLightbox(); // Swiped left -> next
    } else if (touchEndX > touchStartX + threshold) {
      prevLightbox(); // Swiped right -> prev
    }
  }

  // --- 5. Back to Top Smooth Scroll ---
  if (backToTopBtn) {
    backToTopBtn.addEventListener('click', function (e) {
      e.preventDefault();
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  }

  // Initialize Gallery
  initGallery();

})();
