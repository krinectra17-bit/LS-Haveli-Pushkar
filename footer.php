<?php
/**
 * The template for displaying the footer
 *
 * @package LS_Haveli_Pushkar
 */

$theme_uri = get_template_directory_uri();
$whatsapp  = ls_haveli_get_whatsapp_number();
$phone     = ls_haveli_get_phone();
$email     = ls_haveli_get_email();
$address   = ls_haveli_get_address();
$floating_wa_url = ls_haveli_get_whatsapp_url();
?>
</main><!-- #main-content -->

<!-- Site Footer -->
<footer class="site-footer" id="colophon">
  <div class="container">
    <div class="footer-top-grid">
      <!-- Col 1: Brand & Philosophy -->
      <div class="footer-brand-col">
        <img src="<?php echo esc_url($theme_uri . '/assets/images/logo-light.svg'); ?>" alt="L S Haveli" class="footer-logo" width="220" height="42" />
        <p class="footer-brand-desc">
          <?php esc_html_e('A peaceful heritage boutique sanctuary situated along Parikarma Marg in Pushkar, Rajasthan. Featuring an outdoor courtyard swimming pool, authentic rooftop vegetarian dining, and attentive Rajasthani hospitality moments from the holy lake.', 'ls-haveli'); ?>
        </p>
        <div style="display: flex; gap: 12px;">
          <a href="<?php echo esc_url($floating_wa_url); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp btn-sm">
            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
            <?php esc_html_e('Chat on WhatsApp', 'ls-haveli'); ?>
          </a>
        </div>
      </div>

      <!-- Col 2: The Haveli -->
      <div>
        <h4 class="footer-col-title"><?php esc_html_e('The Haveli', 'ls-haveli'); ?></h4>
        <ul class="footer-links-list">
          <li><a href="#about" class="footer-link"><?php esc_html_e('About the Property', 'ls-haveli'); ?></a></li>
          <li><a href="#stay" class="footer-link"><?php esc_html_e('Deluxe Double Room', 'ls-haveli'); ?></a></li>
          <li><a href="#stay" class="footer-link"><?php esc_html_e('Deluxe King Room', 'ls-haveli'); ?></a></li>
          <li><a href="#stay" class="footer-link"><?php esc_html_e('Luxury Double Room', 'ls-haveli'); ?></a></li>
          <li><a href="#pool" class="footer-link"><?php esc_html_e('Courtyard Pool & Garden', 'ls-haveli'); ?></a></li>
          <li><a href="#dining" class="footer-link"><?php esc_html_e('Rooftop Indian Restaurant', 'ls-haveli'); ?></a></li>
          <li><a href="#gallery" class="footer-link"><?php esc_html_e('Photo Gallery', 'ls-haveli'); ?></a></li>
        </ul>
      </div>

      <!-- Col 3: Sacred Pushkar -->
      <div>
        <h4 class="footer-col-title"><?php esc_html_e('Explore Pushkar', 'ls-haveli'); ?></h4>
        <ul class="footer-links-list">
          <li><a href="#pushkar" class="footer-link"><?php esc_html_e('Pushkar Lake & Ghats', 'ls-haveli'); ?></a></li>
          <li><a href="#pushkar" class="footer-link"><?php esc_html_e('Jagatpita Brahma Temple', 'ls-haveli'); ?></a></li>
          <li><a href="#pushkar" class="footer-link"><?php esc_html_e('Historic Varaha Temple', 'ls-haveli'); ?></a></li>
          <li><a href="#pushkar" class="footer-link"><?php esc_html_e('Old Rangji Temple', 'ls-haveli'); ?></a></li>
          <li><a href="#pushkar" class="footer-link"><?php esc_html_e('Desert Sunset Point', 'ls-haveli'); ?></a></li>
          <li><a href="#facilities" class="footer-link"><?php esc_html_e('Sightseeing Assistance', 'ls-haveli'); ?></a></li>
        </ul>
      </div>

      <!-- Col 4: Property Contact -->
      <div>
        <h4 class="footer-col-title"><?php esc_html_e('Contact & Location', 'ls-haveli'); ?></h4>
        <div class="footer-contact-item">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
          <span><?php echo esc_html($address); ?></span>
        </div>
        <div class="footer-contact-item">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
          <a href="<?php echo esc_url('tel:' . preg_replace('/[^0-9+]/', '', $phone)); ?>" class="footer-link"><?php echo esc_html($phone); ?></a>
        </div>
        <div class="footer-contact-item">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
          <a href="<?php echo esc_url('mailto:' . $email); ?>" class="footer-link"><?php echo esc_html($email); ?></a>
        </div>
      </div>
    </div>

    <!-- Bottom Bar -->
    <div class="footer-bottom-bar">
      <div>
        &copy; <?php echo date('Y'); ?> <?php esc_html_e('L S Haveli Pushkar. All rights reserved. Direct enquiries powered via WhatsApp.', 'ls-haveli'); ?>
      </div>
      <div style="display: flex; align-items: center; gap: 16px;">
        <span style="font-size: 0.76rem; color: #756F65;"><?php esc_html_e('Pushkar, Rajasthan 305022', 'ls-haveli'); ?></span>
        <button type="button" class="back-to-top-btn" aria-label="<?php esc_attr_e('Back to top', 'ls-haveli'); ?>">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="18 15 12 9 6 15"></polyline></svg>
        </button>
      </div>
    </div>
  </div>
</footer>

<!-- Floating WhatsApp Button -->
<a 
  href="<?php echo esc_url($floating_wa_url); ?>" 
  target="_blank" 
  rel="noopener noreferrer" 
  class="floating-whatsapp-btn" 
  aria-label="<?php esc_attr_e('Chat directly with L S Haveli reservations on WhatsApp', 'ls-haveli'); ?>"
>
  <div class="floating-whatsapp-pulse"></div>
  <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
    <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path>
  </svg>
  <span class="floating-whatsapp-tooltip"><?php esc_html_e('Enquire on WhatsApp', 'ls-haveli'); ?></span>
</a>

<!-- Interactive Lightbox Modal -->
<div class="lightbox-modal" id="lightboxModal" role="dialog" aria-modal="true" aria-label="<?php esc_attr_e('Haveli Image Lightbox', 'ls-haveli'); ?>" aria-hidden="true">
  <button type="button" class="lightbox-btn lightbox-close" aria-label="<?php esc_attr_e('Close lightbox', 'ls-haveli'); ?>">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
  </button>
  
  <button type="button" class="lightbox-btn lightbox-prev" aria-label="<?php esc_attr_e('Previous photograph', 'ls-haveli'); ?>">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="15 18 9 12 15 6"></polyline></svg>
  </button>

  <div class="lightbox-content">
    <div class="lightbox-image-wrap">
      <img src="" alt="" class="lightbox-img" />
    </div>
    <div class="lightbox-caption">
      <div class="lightbox-caption-text"></div>
      <div class="lightbox-counter"></div>
    </div>
  </div>

  <button type="button" class="lightbox-btn lightbox-next" aria-label="<?php esc_attr_e('Next photograph', 'ls-haveli'); ?>">
    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"></polyline></svg>
  </button>
</div>

<!-- Direct WhatsApp Room Booking Modal -->
<div class="booking-modal" id="bookingModal" role="dialog" aria-modal="true" aria-labelledby="bookingModalTitle" aria-hidden="true">
  <div class="booking-modal-card">
    <button type="button" class="booking-modal-close" aria-label="<?php esc_attr_e('Close booking dialog', 'ls-haveli'); ?>">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
    </button>

    <div class="booking-modal-header">
      <span class="eyebrow"><?php esc_html_e('Direct WhatsApp Enquiry', 'ls-haveli'); ?></span>
      <h3 class="booking-modal-title" id="bookingModalTitle"><?php esc_html_e('Plan Your Stay at L S Haveli', 'ls-haveli'); ?></h3>
      <p class="booking-modal-subtitle">
        <?php esc_html_e('Complete your travel dates below to generate your direct enquiry for hotel management.', 'ls-haveli'); ?>
      </p>
    </div>

    <form id="whatsappBookingForm" novalidate>
      <div class="modal-form-grid">
        <!-- Guest Name -->
        <div class="form-group modal-form-full">
          <label for="modalGuestName" class="form-label">
            <?php esc_html_e('Full Name', 'ls-haveli'); ?> <span class="required">*</span>
          </label>
          <input type="text" id="modalGuestName" class="form-control" placeholder="<?php esc_attr_e('Enter your full name', 'ls-haveli'); ?>" required />
          <span class="form-error-msg"><?php esc_html_e('Please enter your full name.', 'ls-haveli'); ?></span>
        </div>

        <!-- Check-in Date -->
        <div class="form-group">
          <label for="modalCheckIn" class="form-label">
            <?php esc_html_e('Check-in Date', 'ls-haveli'); ?> <span class="required">*</span>
          </label>
          <input type="date" id="modalCheckIn" class="form-control" required />
          <span class="form-error-msg"><?php esc_html_e('Select a valid check-in date.', 'ls-haveli'); ?></span>
        </div>

        <!-- Check-out Date -->
        <div class="form-group">
          <label for="modalCheckOut" class="form-label">
            <?php esc_html_e('Check-out Date', 'ls-haveli'); ?> <span class="required">*</span>
          </label>
          <input type="date" id="modalCheckOut" class="form-control" required />
          <span class="form-error-msg"><?php esc_html_e('Check-out must be after check-in.', 'ls-haveli'); ?></span>
        </div>

        <!-- Adults -->
        <div class="form-group">
          <label for="modalAdults" class="form-label"><?php esc_html_e('Adults', 'ls-haveli'); ?></label>
          <select id="modalAdults" class="form-control">
            <option value="1">1 Adult</option>
            <option value="2" selected>2 Adults</option>
            <option value="3">3 Adults</option>
            <option value="4+">4+ Adults</option>
          </select>
        </div>

        <!-- Children -->
        <div class="form-group">
          <label for="modalChildren" class="form-label"><?php esc_html_e('Children', 'ls-haveli'); ?></label>
          <select id="modalChildren" class="form-control">
            <option value="0" selected>0 Children</option>
            <option value="1">1 Child</option>
            <option value="2">2 Children</option>
            <option value="3+">3+ Children</option>
          </select>
        </div>

        <!-- Rooms -->
        <div class="form-group">
          <label for="modalRooms" class="form-label"><?php esc_html_e('Number of Rooms', 'ls-haveli'); ?></label>
          <select id="modalRooms" class="form-control">
            <option value="1" selected>1 Room</option>
            <option value="2">2 Rooms</option>
            <option value="3">3 Rooms</option>
            <option value="4+">4+ Rooms</option>
          </select>
        </div>

        <!-- Room Category -->
        <div class="form-group">
          <label for="modalPreferredRoom" class="form-label"><?php esc_html_e('Preferred Room', 'ls-haveli'); ?></label>
          <select id="modalPreferredRoom" class="form-control">
            <option value="Deluxe Double Room" selected>Deluxe Double Room</option>
            <option value="Deluxe King Room">Deluxe King Room</option>
            <option value="Luxury Double Room">Luxury Double Room</option>
            <option value="Any Available Room">Any Available Room</option>
          </select>
        </div>

        <!-- Additional Message -->
        <div class="form-group modal-form-full">
          <label for="modalMessage" class="form-label"><?php esc_html_e('Special Requests / Message', 'ls-haveli'); ?></label>
          <textarea id="modalMessage" class="form-control" placeholder="<?php esc_attr_e('Estimated arrival time, dietary requirements, or questions...', 'ls-haveli'); ?>"></textarea>
        </div>
      </div>

      <div style="margin-top: 24px;">
        <button type="submit" class="btn btn-whatsapp" style="width: 100%;">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
          <?php esc_html_e('Generate & Send WhatsApp Enquiry', 'ls-haveli'); ?>
        </button>
      </div>

      <p class="modal-disclaimer">
        <?php esc_html_e('Submitting this enquiry generates a structured WhatsApp message to hotel management. Room confirmation and applicable seasonal rates will be confirmed directly by the property.', 'ls-haveli'); ?>
      </p>
    </form>
  </div>
</div>

<!-- Structured Data JSON-LD for Search Engines -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Hotel",
  "name": "L S Haveli",
  "description": "Heritage-style boutique hotel in Pushkar, Rajasthan, featuring an outdoor courtyard pool, rooftop vegetarian dining, and close proximity to Pushkar Lake.",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Near Badi Puliya / High Bridge, Gurudwara Road, Parikarma Marg",
    "addressLocality": "Pushkar",
    "addressRegion": "Rajasthan",
    "postalCode": "305022",
    "addressCountry": "IN"
  },
  "amenityFeature": [
    { "@type": "LocationFeatureSpecification", "name": "Outdoor Swimming Pool", "value": true },
    { "@type": "LocationFeatureSpecification", "name": "Rooftop Restaurant", "value": true },
    { "@type": "LocationFeatureSpecification", "name": "Free Wi-Fi", "value": true },
    { "@type": "LocationFeatureSpecification", "name": "Air Conditioning", "value": true },
    { "@type": "LocationFeatureSpecification", "name": "Pet-Friendly", "value": true }
  ]
}
</script>

<?php wp_footer(); ?>
</body>
</html>
