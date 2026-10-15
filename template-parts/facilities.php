<?php
/**
 * Template part for Section E: Facilities & Experiences
 *
 * @package LS_Haveli_Pushkar
 */

$theme_uri = get_template_directory_uri();
?>

<section class="section section-cream" id="facilities" aria-label="<?php esc_attr_e('Hotel Facilities and Guest Experiences', 'ls-haveli'); ?>">
  <div class="container">
    <div class="section-header">
      <span class="eyebrow"><?php esc_html_e('Hospitality & Amenities', 'ls-haveli'); ?></span>
      <h2 class="section-title"><?php esc_html_e('Curated Facilities & Experiences', 'ls-haveli'); ?></h2>
      <img src="<?php echo esc_url($theme_uri . '/assets/images/arch-divider.svg'); ?>" alt="" class="arch-divider" />
      <p class="section-subtitle">
        <?php esc_html_e('From rejuvenating swims in our courtyard pool to peaceful morning yoga and local desert excursions, we ensure a seamless Pushkar stay.', 'ls-haveli'); ?>
      </p>
    </div>

    <div class="facilities-grid">
      <!-- 1. Outdoor Pool -->
      <div class="facility-card">
        <div class="facility-icon-wrap">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 12h20M2 16h20M2 8h20"></path></svg>
        </div>
        <h3 class="facility-title"><?php esc_html_e('Outdoor Swimming Pool', 'ls-haveli'); ?></h3>
        <p class="facility-desc"><?php esc_html_e('Relax in our central courtyard pool surrounded by traditional Rajput stone arches and loungers.', 'ls-haveli'); ?></p>
      </div>

      <!-- 2. Rooftop Restaurant -->
      <div class="facility-card">
        <div class="facility-icon-wrap">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8h1a4 4 0 0 1 0 8h-1"></path><path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path></svg>
        </div>
        <h3 class="facility-title"><?php esc_html_e('Rooftop Restaurant', 'ls-haveli'); ?></h3>
        <p class="facility-desc"><?php esc_html_e('Savor flavorful Indian vegetarian cuisine with panoramic views of the sacred town and hills.', 'ls-haveli'); ?></p>
      </div>

      <!-- 3. Free Wi-Fi -->
      <div class="facility-card">
        <div class="facility-icon-wrap">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 12.55a11 11 0 0 1 14.08 0"></path><path d="M1.42 9a16 16 0 0 1 21.16 0"></path><path d="M8.53 16.11a6 6 0 0 1 6.95 0"></path><line x1="12" y1="20" x2="12.01" y2="20"></line></svg>
        </div>
        <h3 class="facility-title"><?php esc_html_e('Complimentary Wi-Fi', 'ls-haveli'); ?></h3>
        <p class="facility-desc"><?php esc_html_e('Stay connected with high-speed internet throughout guest rooms and public courtyard areas.', 'ls-haveli'); ?></p>
      </div>

      <!-- 4. Yoga & Wellness -->
      <div class="facility-card">
        <div class="facility-icon-wrap">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><path d="M8 12a4 4 0 0 1 8 0"></path></svg>
        </div>
        <h3 class="facility-title"><?php esc_html_e('Yoga & Meditation', 'ls-haveli'); ?></h3>
        <p class="facility-desc"><?php esc_html_e('Experience spiritual balance with morning yoga practices arranged in our serene courtyard.', 'ls-haveli'); ?></p>
      </div>

      <!-- 5. Pet-Friendly Stay -->
      <div class="facility-card">
        <div class="facility-icon-wrap">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="11" cy="4" r="2"></circle><circle cx="18" cy="8" r="2"></circle><circle cx="20" cy="16" r="2"></circle><path d="M9 10a5 5 0 0 0-5 5v3h10v-3a5 5 0 0 0-5-5z"></path></svg>
        </div>
        <h3 class="facility-title"><?php esc_html_e('Pet-Friendly Hospitality', 'ls-haveli'); ?></h3>
        <p class="facility-desc"><?php esc_html_e('We welcome your furry companions so the whole family can explore Pushkar together (prior intimation requested).', 'ls-haveli'); ?></p>
      </div>

      <!-- 6. Parking Assistance -->
      <div class="facility-card">
        <div class="facility-icon-wrap">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="3" width="15" height="13"></rect><polygon points="16 8 20 8 23 11 23 16 16 16 16 8"></polygon><circle cx="5.5" cy="18.5" r="2.5"></circle><circle cx="18.5" cy="18.5" r="2.5"></circle></svg>
        </div>
        <h3 class="facility-title"><?php esc_html_e('Parking Assistance', 'ls-haveli'); ?></h3>
        <p class="facility-desc"><?php esc_html_e('Convenient vehicle parking and arrival support near Gurudwara Road and Parikarma Marg.', 'ls-haveli'); ?></p>
      </div>

      <!-- 7. Pushkar Sightseeing -->
      <div class="facility-card">
        <div class="facility-icon-wrap">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polygon points="3 11 22 2 13 21 11 13 3 11"></polygon></svg>
        </div>
        <h3 class="facility-title"><?php esc_html_e('Sightseeing & Safaris', 'ls-haveli'); ?></h3>
        <p class="facility-desc"><?php esc_html_e('Guidance for camel safaris, desert sunset points, ghat rituals, and Pushkar heritage walks.', 'ls-haveli'); ?></p>
      </div>

      <!-- 8. Vehicle & Scooter Rental -->
      <div class="facility-card">
        <div class="facility-icon-wrap">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
        </div>
        <h3 class="facility-title"><?php esc_html_e('Rental Assistance', 'ls-haveli'); ?></h3>
        <p class="facility-desc"><?php esc_html_e('Assistance with bicycle or scooter rentals for effortlessly navigating Pushkar winding streets.', 'ls-haveli'); ?></p>
      </div>
    </div>
  </div>
</section>
