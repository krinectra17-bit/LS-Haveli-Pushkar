<?php
/**
 * Template part for the Quick Booking Strip
 *
 * @package LS_Haveli_Pushkar
 */
?>

<div class="booking-strip-wrapper" id="booking-strip">
  <div class="container">
    <form class="booking-strip-card" id="quickBookingForm" aria-label="<?php esc_attr_e('Quick room enquiry', 'ls-haveli'); ?>">
      <!-- Check In -->
      <div class="booking-field-group">
        <label for="quickCheckIn" class="booking-field-label">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
            <line x1="16" y1="2" x2="16" y2="6"></line>
            <line x1="8" y1="2" x2="8" y2="6"></line>
            <line x1="3" y1="10" x2="21" y2="10"></line>
          </svg>
          <?php esc_html_e('Check In', 'ls-haveli'); ?>
        </label>
        <input type="date" id="quickCheckIn" name="check_in" class="booking-input" required />
      </div>

      <!-- Check Out -->
      <div class="booking-field-group">
        <label for="quickCheckOut" class="booking-field-label">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
            <line x1="16" y1="2" x2="16" y2="6"></line>
            <line x1="8" y1="2" x2="8" y2="6"></line>
            <line x1="3" y1="10" x2="21" y2="10"></line>
          </svg>
          <?php esc_html_e('Check Out', 'ls-haveli'); ?>
        </label>
        <input type="date" id="quickCheckOut" name="check_out" class="booking-input" required />
      </div>

      <!-- Guests -->
      <div class="booking-field-group">
        <label for="quickAdults" class="booking-field-label">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
            <circle cx="9" cy="7" r="4"></circle>
            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
          </svg>
          <?php esc_html_e('Adults', 'ls-haveli'); ?>
        </label>
        <select id="quickAdults" name="adults" class="booking-select">
          <option value="1">1 Adult</option>
          <option value="2" selected>2 Adults</option>
          <option value="3">3 Adults</option>
          <option value="4+">4+ Adults</option>
        </select>
      </div>

      <!-- Preferred Room -->
      <div class="booking-field-group">
        <label for="quickRoom" class="booking-field-label">
          <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
          </svg>
          <?php esc_html_e('Room Category', 'ls-haveli'); ?>
        </label>
        <select id="quickRoom" name="preferred_room" class="booking-select">
          <option value="Deluxe Double Room" selected>Deluxe Double Room</option>
          <option value="Deluxe King Room">Deluxe King Room</option>
          <option value="Luxury Double Room">Luxury Double Room</option>
        </select>
      </div>

      <!-- Action Button -->
      <button type="submit" class="btn btn-primary">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
          <circle cx="11" cy="11" r="8"></circle>
          <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
        </svg>
        <?php esc_html_e('Check Availability', 'ls-haveli'); ?>
      </button>
    </form>
  </div>
</div>
