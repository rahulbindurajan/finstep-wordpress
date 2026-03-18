<?php
$pageTitle  = 'Contact Us';
$metaDesc   = 'Contact FinSteps Wealth in Thrissur, Kerala. Call +91 85929 33387 or email finstepswealth@gmail.com for mutual fund investment advice, SIP plans, and portfolio guidance.';
$metaKeys   = 'contact FinSteps Wealth, mutual fund advisor Thrissur, SIP investment Kerala, contact investment company Kerala, finstepswealth phone email address';
$ogType     = 'website';
$activePage = 'contact';
require __DIR__ . '/inc/header.php';
?>

<!-- ========================================
   PAGE HERO
   ======================================== -->
<section class="page-hero">
  <div class="page-hero-bg"></div>
  <div class="container">
    <div class="badge badge-white">&#128222; Get In Touch</div>
    <h1 class="page-hero-title">Contact FinSteps Wealth</h1>
    <p class="page-hero-sub">Have a question about investing? Need help choosing a fund? Our expert advisors are here to guide you at every step.</p>
  </div>
</section>

<!-- ========================================
   CONTACT MAIN
   ======================================== -->
<section class="section-padding" style="background:var(--off-white);">
  <div class="container">
    <div class="contact-grid">

      <!-- Left: Info -->
      <div class="contact-info reveal">
        <div class="badge">Reach Us</div>
        <h2 class="contact-info-title">We'd Love to Hear From You</h2>
        <p class="contact-info-desc">Whether you're a first-time investor or a seasoned professional, our team is available to guide you through your wealth management journey.</p>

        <div class="contact-details">
          <div class="contact-detail-item">
            <div class="detail-icon-wrap">&#128205;</div>
            <div>
              <div class="detail-label">Address</div>
              <div class="detail-value">Thrissur &mdash; 680564, Kerala</div>
            </div>
          </div>
          <div class="contact-detail-item">
            <div class="detail-icon-wrap">&#128222;</div>
            <div>
              <div class="detail-label">Mobile</div>
              <div class="detail-value"><a href="tel:+918592933387" style="color:inherit;">+91 85929 33387</a></div>
            </div>
          </div>
          <div class="contact-detail-item">
            <div class="detail-icon-wrap">&#128140;</div>
            <div>
              <div class="detail-label">Email</div>
              <div class="detail-value"><a href="mailto:finstepswealth@gmail.com" style="color:inherit;">finstepswealth@gmail.com</a></div>
            </div>
          </div>
        </div>

        <div class="contact-hours">
          <p class="hours-title">&#128336; Business Hours</p>
          <div class="hours-row"><span class="hours-day">Monday – Friday</span><span class="hours-time">9:00 AM – 6:00 PM</span></div>
          <div class="hours-row"><span class="hours-day">Saturday</span><span class="hours-time">10:00 AM – 2:00 PM</span></div>
          <div class="hours-row"><span class="hours-day">Sunday &amp; Holidays</span><span class="hours-time">Closed</span></div>
        </div>
      </div>

      <!-- Right: Form -->
      <div class="contact-form-wrap reveal reveal-delay-1">
        <h3 class="form-title">Send Us a Message</h3>
        <p class="form-subtitle">Our team typically responds within 1 business day.</p>

        <form id="contact-form" novalidate>
          <div class="form-row">
            <div class="form-group">
              <label class="form-label" for="cf-first">First Name *</label>
              <input class="form-input" type="text" id="cf-first" placeholder="Rahul" required>
            </div>
            <div class="form-group">
              <label class="form-label" for="cf-last">Last Name *</label>
              <input class="form-input" type="text" id="cf-last" placeholder="Gupta" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label class="form-label" for="cf-email">Email Address *</label>
              <input class="form-input" type="email" id="cf-email" placeholder="rahul@example.com" required>
            </div>
            <div class="form-group">
              <label class="form-label" for="cf-phone">Phone Number</label>
              <input class="form-input" type="tel" id="cf-phone" placeholder="+91 98765 43210">
            </div>
          </div>
          <div class="form-group">
            <label class="form-label" for="cf-subject">I'm Interested In</label>
            <select class="form-select" id="cf-subject">
              <option value="">Select a topic...</option>
              <option>Starting a New Investment</option>
              <option>SIP Plans</option>
              <option>Lump Sum Investment</option>
              <option>Portfolio Review</option>
              <option>Redemption / Withdrawal</option>
              <option>Tax Planning (ELSS)</option>
              <option>Other Query</option>
            </select>
          </div>
          <div class="form-group">
            <label class="form-label" for="cf-investment">Investment Amount (Optional)</label>
            <select class="form-select" id="cf-investment">
              <option value="">Select range...</option>
              <option>Less than &#8377;5,000/month</option>
              <option>&#8377;5,000 – &#8377;20,000/month</option>
              <option>&#8377;20,000 – &#8377;1 Lakh/month</option>
              <option>More than &#8377;1 Lakh/month</option>
              <option>One-time Lump Sum</option>
            </select>
          </div>
          <div class="form-group">
            <label class="form-label" for="cf-message">Your Message *</label>
            <textarea class="form-textarea" id="cf-message" placeholder="Tell us about your financial goals or any specific questions..." required></textarea>
          </div>
          <div class="form-checkbox-wrap">
            <input class="form-checkbox" type="checkbox" id="cf-consent" required>
            <label class="checkbox-label" for="cf-consent">
              I agree to the <a href="#">Privacy Policy</a> and consent to being contacted by FinSteps Wealth. Mutual fund investments are subject to market risks.
            </label>
          </div>
          <button type="submit" class="btn btn-primary btn-lg btn-submit">Send Message &rarr;</button>
        </form>
      </div>

    </div>
  </div>
</section>

<!-- ========================================
   MAP PLACEHOLDER
   ======================================== -->
<section class="map-section">
  <div class="container">
    <div class="map-wrap reveal">
      <div class="map-grid-bg"></div>
      <div class="map-overlay">
        <div class="map-pin">&#128205;</div>
        <p><strong style="color:var(--white)">FinSteps Wealth</strong></p>
        <p>Thrissur &mdash; 680564, Kerala</p>
        <p style="margin-top:14px;"><a href="https://maps.google.com" target="_blank" rel="noopener" class="btn btn-primary" style="display:inline-flex;margin-top:4px;">&#128506; Open in Maps</a></p>
      </div>
    </div>
  </div>
</section>

<!-- ========================================
   FAQ
   ======================================== -->
<section class="faq-section section-padding">
  <div class="container">
    <div class="text-center">
      <div class="badge">FAQ</div>
      <h2 class="section-title">Frequently Asked <span class="accent">Questions</span></h2>
      <p class="section-subtitle">Quick answers to the most common investor queries. Still have questions? Contact us directly.</p>
    </div>
    <div class="faq-grid">
      <div class="faq-item reveal">
        <div class="faq-q">How do I open an account with FinSteps Wealth? <span class="faq-arrow">&#9660;</span></div>
        <div class="faq-a">You can open an account online in under 10 minutes. Complete your KYC digitally with Aadhaar &amp; PAN, and start investing immediately. No paperwork required.</div>
      </div>
      <div class="faq-item reveal reveal-delay-1">
        <div class="faq-q">What is the minimum investment amount? <span class="faq-arrow">&#9660;</span></div>
        <div class="faq-a">You can start an SIP with as little as &#8377;500 per month. For lump sum investments, the minimum is &#8377;1,000 per fund. No upper limit applies.</div>
      </div>
      <div class="faq-item reveal">
        <div class="faq-q">Is my investment safe with FinSteps Wealth? <span class="faq-arrow">&#9660;</span></div>
        <div class="faq-a">We are SEBI-registered and AMFI-compliant. Your investments are held in segregated accounts with a SEBI-approved custodian. We do not have direct access to your funds.</div>
      </div>
      <div class="faq-item reveal reveal-delay-1">
        <div class="faq-q">How long does it take to withdraw my money? <span class="faq-arrow">&#9660;</span></div>
        <div class="faq-a">Equity fund redemptions are processed within 3 business days (T+3). Debt fund redemptions are typically processed within 1 business day (T+1).</div>
      </div>
      <div class="faq-item reveal">
        <div class="faq-q">Can I invest on behalf of my minor child? <span class="faq-arrow">&#9660;</span></div>
        <div class="faq-a">Yes. You can open a minor account for your child under your guardianship. The account will automatically convert to a regular account when the child turns 18.</div>
      </div>
      <div class="faq-item reveal reveal-delay-1">
        <div class="faq-q">What documents are required for KYC? <span class="faq-arrow">&#9660;</span></div>
        <div class="faq-a">You need a valid PAN card, Aadhaar card for address proof, a cancelled cheque or bank statement, and a photograph. All verification is done digitally — no physical submission needed.</div>
      </div>
    </div>
  </div>
</section>

<!-- ========================================
   CTA
   ======================================== -->
<section class="cta-section section-padding-sm">
  <div class="container">
    <div class="cta-inner reveal">
      <h2 class="cta-title">Still Have Questions?<br>Talk to an Expert.</h2>
      <p class="cta-desc">Schedule a free 30-minute consultation with one of our qualified financial advisors. No obligations, no sales pitch.</p>
      <div class="cta-actions">
        <a href="tel:+918592933387" class="btn btn-primary btn-lg">&#128222; Call Us Now</a>
        <a href="mailto:finstepswealth@gmail.com" class="btn btn-outline-white btn-lg">&#128140; Email Us</a>
      </div>
    </div>
  </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>
