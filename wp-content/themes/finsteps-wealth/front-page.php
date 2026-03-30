<?php get_header(); ?>

<!-- ========================================
   HERO
   ======================================== -->
<section class="hero">
  <div class="hero-bg-pattern"></div>
  <div class="hero-grid-lines"></div>
  <div class="container">
    <div class="hero-inner">

      <div class="hero-content">
        <div class="badge badge-white">&#10003;&nbsp; SEBI Registered &bull; Thrissur, Kerala</div>
        <h1 class="hero-tagline">
          Grow Your Wealth<br>
          <span class="highlight">Step by Step</span>
        </h1>
        <p class="hero-desc">
          FinSteps Wealth offers expert-managed mutual funds designed to create long-term financial security. Start investing with as little as &#8377;500/month and watch your money grow.
        </p>
        <div class="hero-actions">
          <a href="<?php echo esc_url( site_url('/contact.php') ); ?>" class="btn btn-primary btn-lg">Start Investing &rarr;</a>
          <a href="<?php echo esc_url( site_url('/about.php') ); ?>"   class="btn btn-outline-white btn-lg">Learn More</a>
        </div>
        <div class="hero-trust">
          <div class="trust-item">
            <div class="trust-num">&#8377;<span data-count="500" data-suffix="/mo">500/mo</span></div>
            <div class="trust-label">Start With</div>
          </div>
          <div class="trust-item">
            <div class="trust-num"><span data-count="12" data-suffix="+">12+</span></div>
            <div class="trust-label">Fund Categories</div>
          </div>
          <div class="trust-item">
            <div class="trust-num"><span data-count="100" data-suffix="% Digital">100% Digital</span></div>
            <div class="trust-label">Paperless KYC</div>
          </div>
          <div class="trust-item">
            <div class="trust-num">&#128737;</div>
            <div class="trust-label">SEBI Registered</div>
          </div>
        </div>
      </div>

      <!-- Returns Snapshot Card -->
      <div class="hero-visual">
        <div class="dashboard-card">
          <div class="dash-header">
            <span class="dash-title">&#128200;&nbsp; Fund Returns Snapshot</span>
            <span class="dash-badge">&#9650; Updated</span>
          </div>
          <div class="dash-funds" style="margin-top:8px;">
            <div class="dash-fund-row">
              <span class="fund-name">&#128200; Equity Growth</span>
              <span class="fund-return">+22.3% CAGR</span>
            </div>
            <div class="dash-fund-row">
              <span class="fund-name">&#9878; Balanced Advantage</span>
              <span class="fund-return">+14.7% CAGR</span>
            </div>
            <div class="dash-fund-row">
              <span class="fund-name">&#127968; Debt Income</span>
              <span class="fund-return">+8.1% CAGR</span>
            </div>
            <div class="dash-fund-row">
              <span class="fund-name">&#128181; Tax Saver ELSS</span>
              <span class="fund-return">+20.5% CAGR</span>
            </div>
          </div>
          <div class="calc-divider" style="margin:14px 0 12px;"></div>
          <div class="chart-bars">
            <div class="chart-bar"></div>
            <div class="chart-bar"></div>
            <div class="chart-bar"></div>
            <div class="chart-bar active"></div>
            <div class="chart-bar"></div>
            <div class="chart-bar active"></div>
            <div class="chart-bar"></div>
          </div>
          <div style="display:flex;justify-content:space-between;align-items:center;margin-top:14px;">
            <span style="font-size:.7rem;color:rgba(255,255,255,.35);">5-Year Average CAGR</span>
            <span style="font-size:1.2rem;font-weight:800;color:var(--green,#22c55e);">+18.4%</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ========================================
   TRUSTED BY / PARTNERS STRIP
   ======================================== -->
<div class="partners-strip">
  <div class="container">
    <p class="partners-label">Trusted &amp; Regulated By</p>
    <div class="partners-logos">
      <div class="partner-logo"><div class="partner-logo-icon">&#128737;</div>SEBI</div>
      <div class="partner-logo"><div class="partner-logo-icon">&#127881;</div>AMFI</div>
      <div class="partner-logo"><div class="partner-logo-icon">&#127942;</div>Morningstar</div>
      <div class="partner-logo"><div class="partner-logo-icon">&#11088;</div>CRISIL</div>
      <div class="partner-logo"><div class="partner-logo-icon">&#128203;</div>BSE StAR MF</div>
      <div class="partner-logo"><div class="partner-logo-icon">&#127968;</div>NSE NMF-II</div>
    </div>
  </div>
</div>

<!-- ========================================
   STATS STRIP
   ======================================== -->
<section class="stats-strip">
  <div class="container">
    <div class="stats-grid">
      <div class="stat-item reveal">
        <div class="stat-number">&#127919;</div>
        <div class="stat-desc">Goal-Based Planning</div>
      </div>
      <div class="stat-item reveal reveal-delay-1">
        <div class="stat-number"><span data-count="18" data-suffix=".4%">18.4%</span></div>
        <div class="stat-desc">Avg. 5-Year CAGR</div>
      </div>
      <div class="stat-item reveal reveal-delay-2">
        <div class="stat-number"><span data-count="12">12</span><span style="color:var(--green)">+</span></div>
        <div class="stat-desc">Fund Categories</div>
      </div>
      <div class="stat-item reveal reveal-delay-3">
        <div class="stat-number"><span data-count="98" data-suffix="%">98%</span></div>
        <div class="stat-desc">Investor Satisfaction</div>
      </div>
    </div>
  </div>
</section>

<!-- ========================================
   WHY CHOOSE US
   ======================================== -->
<section class="why-us section-padding">
  <div class="container">
    <div class="text-center">
      <div class="badge">Why FinSteps Wealth</div>
      <h2 class="section-title">Investing Made <span class="accent">Smarter</span></h2>
      <p class="section-subtitle">We combine deep market expertise with cutting-edge technology to deliver consistent, long-term returns.</p>
    </div>
    <div class="features-grid">
      <div class="feature-card reveal">
        <div class="feature-icon">&#128200;</div>
        <h3 class="feature-title">Expert Fund Management</h3>
        <p class="feature-desc">Our portfolio managers use research-driven, disciplined strategies to navigate diverse market cycles and deliver consistent long-term returns.</p>
      </div>
      <div class="feature-card reveal reveal-delay-1">
        <div class="feature-icon">&#128737;</div>
        <h3 class="feature-title">Regulated &amp; Transparent</h3>
        <p class="feature-desc">Fully registered with SEBI and AMFI. Complete transparency in fund disclosures, NAV reporting, and fee structures. No hidden charges.</p>
      </div>
      <div class="feature-card reveal reveal-delay-2">
        <div class="feature-icon">&#128187;</div>
        <h3 class="feature-title">Digital-First Platform</h3>
        <p class="feature-desc">Invest, track, and manage your portfolio seamlessly from your phone or desktop with our real-time, paperless dashboard.</p>
      </div>
      <div class="feature-card reveal">
        <div class="feature-icon">&#128176;</div>
        <h3 class="feature-title">SIP Starting &#8377;500</h3>
        <p class="feature-desc">Start your investment journey with minimal capital. Our flexible SIP plans are designed to make wealth-building accessible to everyone.</p>
      </div>
      <div class="feature-card reveal reveal-delay-1">
        <div class="feature-icon">&#128203;</div>
        <h3 class="feature-title">Personalised Portfolio</h3>
        <p class="feature-desc">Our advisors craft a custom investment plan aligned to your financial goals, risk appetite, and investment horizon.</p>
      </div>
      <div class="feature-card reveal reveal-delay-2">
        <div class="feature-icon">&#128222;</div>
        <h3 class="feature-title">Dedicated Support</h3>
        <p class="feature-desc">Access our expert financial advisors via phone, chat, or in-person — available Monday to Saturday for portfolio guidance.</p>
      </div>
    </div>
  </div>
</section>

<!-- ========================================
   OUR SERVICES
   ======================================== -->
<section class="services-section section-padding">
  <div class="container">
    <div class="text-center">
      <div class="badge">What We Offer</div>
      <h2 class="section-title">Comprehensive <span class="accent">Financial Services</span></h2>
      <p class="section-subtitle">Everything you need to build, protect, and grow your wealth — under one roof.</p>
    </div>
    <div class="services-grid">

      <div class="service-card reveal">
        <div class="service-icon">&#128200;</div>
        <h3 class="service-title">Personalised Portfolio Management</h3>
        <p class="service-desc">Custom-built investment portfolios aligned to your financial goals, risk profile, and time horizon — actively managed by our experts.</p>
      </div>

      <div class="service-card reveal reveal-delay-1">
        <div class="service-icon">&#128269;</div>
        <h3 class="service-title">Portfolio Review &amp; Audit</h3>
        <p class="service-desc">In-depth analysis of your existing investments to identify underperformers, overlaps, and opportunities to optimise returns.</p>
      </div>

      <div class="service-card reveal reveal-delay-2">
        <div class="service-icon">&#127774;</div>
        <h3 class="service-title">Retirement Plans &amp; Investments</h3>
        <p class="service-desc">Structured retirement strategies — NPS, pension funds, and SIPs — designed to ensure a financially independent post-retirement life.</p>
      </div>

      <div class="service-card reveal reveal-delay-3">
        <div class="service-icon">&#127891;</div>
        <h3 class="service-title">Child Education Plans</h3>
        <p class="service-desc">Dedicated investment plans that grow steadily to fund your child's higher education, no matter how costs rise over time.</p>
      </div>

      <div class="service-card reveal">
        <div class="service-icon">&#127919;</div>
        <h3 class="service-title">Goal-Based Investments</h3>
        <p class="service-desc">Whether it's a home, a business, or world travel — we build targeted investment roadmaps to hit every milestone on schedule.</p>
      </div>

      <div class="service-card reveal reveal-delay-1">
        <div class="service-icon">&#128196;</div>
        <h3 class="service-title">Taxation Services</h3>
        <p class="service-desc">Smart tax planning using ELSS, HRA, and Sec 80C instruments to legally minimise your tax outgo while maximising wealth creation.</p>
      </div>

      <div class="service-card reveal reveal-delay-2">
        <div class="service-icon">&#128737;</div>
        <h3 class="service-title">Risk Management &amp; Insurance</h3>
        <p class="service-desc">Comprehensive risk assessment and insurance advisory — life, health, and critical illness cover tailored to protect your family's future.</p>
      </div>

      <div class="service-card reveal reveal-delay-3">
        <div class="service-icon">&#127758;</div>
        <h3 class="service-title">NRI Investment Services</h3>
        <p class="service-desc">Dedicated investment solutions for Non-Resident Indians — NRE/NRO-compliant funds, repatriation advisory, and seamless remote portfolio management.</p>
      </div>

    </div>
  </div>
</section>

<!-- ========================================
   HOW IT WORKS
   ======================================== -->
<section class="how-section section-padding">
  <div class="container">
    <div class="text-center">
      <div class="badge">Simple Process</div>
      <h2 class="section-title">Start Investing in <span class="accent">4 Easy Steps</span></h2>
      <p class="section-subtitle">From KYC to your first investment — the entire process takes less than 10 minutes on our digital platform.</p>
    </div>
    <div class="steps-wrapper">
      <div class="step-item reveal">
        <div class="step-num-wrap">&#128100;</div>
        <h3 class="step-title">Create Account</h3>
        <p class="step-desc">Sign up with your mobile number and email. Completely free — takes 2 minutes.</p>
      </div>
      <div class="step-item reveal reveal-delay-1">
        <div class="step-num-wrap">&#128203;</div>
        <h3 class="step-title">Complete KYC</h3>
        <p class="step-desc">Verify your PAN &amp; Aadhaar digitally. No physical documents or branch visits needed.</p>
      </div>
      <div class="step-item reveal reveal-delay-2">
        <div class="step-num-wrap">&#128269;</div>
        <h3 class="step-title">Choose Your Fund</h3>
        <p class="step-desc">Explore 12+ fund categories. Our advisor tool recommends the best funds for your goals.</p>
      </div>
      <div class="step-item reveal reveal-delay-3">
        <div class="step-num-wrap">&#128200;</div>
        <h3 class="step-title">Start Growing</h3>
        <p class="step-desc">Make your first investment via UPI or net banking. Track performance in real time.</p>
      </div>
    </div>
  </div>
</section>

<!-- ========================================
   FUND CATEGORIES
   ======================================== -->
<section class="funds-section section-padding">
  <div class="container">
    <div class="text-center">
      <div class="badge">Our Funds</div>
      <h2 class="section-title">Funds for Every <span class="accent">Financial Goal</span></h2>
      <p class="section-subtitle">Whether you're planning retirement, a child's education, or pure wealth creation — we have the right fund for you.</p>
    </div>
    <div class="funds-grid">
      <div class="fund-card reveal">
        <div class="fund-card-top">
          <div class="fund-icon">&#128200;</div>
          <div class="fund-cat-name">Equity Growth Fund</div>
          <span class="fund-risk risk-high">High Risk</span>
        </div>
        <div class="fund-card-body">
          <div class="fund-return-row">
            <div><div class="return-label">3-Year Return</div><div class="return-val">+67.2%</div></div>
            <div><div class="return-label">5-Year CAGR</div><div class="return-val">+22.3%</div></div>
          </div>
          <p class="fund-desc">High-growth large &amp; mid-cap stocks. Ideal for investors with a 5+ year horizon seeking maximum wealth creation.</p>
          <a href="<?php echo esc_url( site_url('/contact.php') ); ?>" class="fund-link">Invest Now &#8594;</a>
        </div>
      </div>

      <div class="fund-card reveal reveal-delay-1">
        <div class="fund-card-top">
          <div class="fund-icon">&#9878;</div>
          <div class="fund-cat-name">Balanced Advantage Fund</div>
          <span class="fund-risk risk-medium">Moderate Risk</span>
        </div>
        <div class="fund-card-body">
          <div class="fund-return-row">
            <div><div class="return-label">3-Year Return</div><div class="return-val">+38.5%</div></div>
            <div><div class="return-label">5-Year CAGR</div><div class="return-val">+14.7%</div></div>
          </div>
          <p class="fund-desc">Dynamically rebalances equity and debt. Perfect for stable growth with managed volatility across market conditions.</p>
          <a href="<?php echo esc_url( site_url('/contact.php') ); ?>" class="fund-link">Invest Now &#8594;</a>
        </div>
      </div>

      <div class="fund-card reveal reveal-delay-2">
        <div class="fund-card-top">
          <div class="fund-icon">&#127968;</div>
          <div class="fund-cat-name">Debt Income Fund</div>
          <span class="fund-risk risk-low">Low Risk</span>
        </div>
        <div class="fund-card-body">
          <div class="fund-return-row">
            <div><div class="return-label">3-Year Return</div><div class="return-val">+22.8%</div></div>
            <div><div class="return-label">5-Year CAGR</div><div class="return-val">+8.1%</div></div>
          </div>
          <p class="fund-desc">High-quality bonds and government securities. Best for conservative investors seeking steady, predictable income.</p>
          <a href="<?php echo esc_url( site_url('/contact.php') ); ?>" class="fund-link">Invest Now &#8594;</a>
        </div>
      </div>

      <div class="fund-card reveal">
        <div class="fund-card-top">
          <div class="fund-icon">&#128269;</div>
          <div class="fund-cat-name">Nifty 50 Index Fund</div>
          <span class="fund-risk risk-medium">Moderate Risk</span>
        </div>
        <div class="fund-card-body">
          <div class="fund-return-row">
            <div><div class="return-label">3-Year Return</div><div class="return-val">+52.4%</div></div>
            <div><div class="return-label">5-Year CAGR</div><div class="return-val">+18.6%</div></div>
          </div>
          <p class="fund-desc">Low-cost passive fund tracking the Nifty 50 index. Market-linked returns without active management premiums.</p>
          <a href="<?php echo esc_url( site_url('/contact.php') ); ?>" class="fund-link">Invest Now &#8594;</a>
        </div>
      </div>

      <div class="fund-card reveal reveal-delay-1">
        <div class="fund-card-top">
          <div class="fund-icon">&#128181;</div>
          <div class="fund-cat-name">Tax Saver ELSS Fund</div>
          <span class="fund-risk risk-high">High Risk</span>
        </div>
        <div class="fund-card-body">
          <div class="fund-return-row">
            <div><div class="return-label">3-Year Return</div><div class="return-val">+61.9%</div></div>
            <div><div class="return-label">5-Year CAGR</div><div class="return-val">+20.5%</div></div>
          </div>
          <p class="fund-desc">Save up to &#8377;46,800 in taxes under Sec 80C. 3-year lock-in with equity-level growth potential.</p>
          <a href="<?php echo esc_url( site_url('/contact.php') ); ?>" class="fund-link">Invest Now &#8594;</a>
        </div>
      </div>

      <div class="fund-card reveal reveal-delay-2">
        <div class="fund-card-top">
          <div class="fund-icon">&#127758;</div>
          <div class="fund-cat-name">Global Opportunities Fund</div>
          <span class="fund-risk risk-high">High Risk</span>
        </div>
        <div class="fund-card-body">
          <div class="fund-return-row">
            <div><div class="return-label">3-Year Return</div><div class="return-val">+44.1%</div></div>
            <div><div class="return-label">5-Year CAGR</div><div class="return-val">+16.2%</div></div>
          </div>
          <p class="fund-desc">Invest in leading global companies across the US, Europe, and Asia for diversified international exposure.</p>
          <a href="<?php echo esc_url( site_url('/contact.php') ); ?>" class="fund-link">Invest Now &#8594;</a>
        </div>
      </div>
    </div>

    <div style="text-align:center;margin-top:40px;">
      <a href="<?php echo esc_url( site_url('/contact.php') ); ?>" class="btn btn-outline-navy btn-lg">View All Funds &rarr;</a>
    </div>
  </div>
</section>

<!-- ========================================
   SIP CALCULATOR
   ======================================== -->
<section class="calculator-section section-padding">
  <div class="container">
    <div class="calc-grid">
      <div class="calc-content reveal">
        <div class="badge badge-white">SIP Calculator</div>
        <h2 class="calc-title">See How Your Money <span>Grows Over Time</span></h2>
        <p class="calc-desc">The power of compounding can turn small monthly investments into life-changing wealth. Use our calculator to visualise your financial future.</p>
        <div class="calc-bullets">
          <div class="calc-bullet"><div class="calc-bullet-dot">&#10003;</div> Start with as little as &#8377;500/month</div>
          <div class="calc-bullet"><div class="calc-bullet-dot">&#10003;</div> Avg. 18.4% CAGR on equity funds</div>
          <div class="calc-bullet"><div class="calc-bullet-dot">&#10003;</div> Tax benefits under Sec 80C via ELSS</div>
          <div class="calc-bullet"><div class="calc-bullet-dot">&#10003;</div> Fully flexible — pause or increase anytime</div>
        </div>
        <a href="<?php echo esc_url( site_url('/contact.php') ); ?>" class="btn btn-primary btn-lg">Start Your SIP Today &rarr;</a>
      </div>

      <div class="calc-card reveal reveal-delay-1">
        <p class="calc-card-title">&#128200;&nbsp; SIP Returns Estimator</p>

        <div class="calc-field">
          <div class="calc-label">Monthly Investment <span id="sip-amount-label">&#8377;10,000</span></div>
          <input class="calc-range" type="range" id="sip-amount" min="500" max="100000" step="500" value="10000">
        </div>
        <div class="calc-field">
          <div class="calc-label">Duration <span id="sip-years-label">10 Years</span></div>
          <input class="calc-range" type="range" id="sip-years" min="1" max="30" step="1" value="10">
        </div>
        <div class="calc-field">
          <div class="calc-label">Expected Return <span id="sip-rate-label">18%</span></div>
          <input class="calc-range" type="range" id="sip-rate" min="6" max="30" step="0.5" value="18">
        </div>

        <div class="calc-divider"></div>
        <div style="display:flex;flex-direction:column;gap:10px;">
          <div class="calc-result">
            <span class="calc-result-label">Amount Invested</span>
            <span class="calc-result-val" style="font-size:1.1rem;color:#fff;" id="calc-invested">—</span>
          </div>
          <div class="calc-result">
            <span class="calc-result-label">Estimated Returns</span>
            <span class="calc-result-val" style="font-size:1.1rem;" id="calc-returns">—</span>
          </div>
          <div class="calc-divider"></div>
          <div class="calc-result">
            <span class="calc-result-label" style="font-weight:700;color:#fff;">Total Value</span>
            <span class="calc-result-val" id="calc-total">—</span>
          </div>
        </div>
        <p style="font-size:.7rem;color:rgba(255,255,255,.8);margin-top:16px;">*Estimated values. Actual returns may vary. Past performance is not indicative of future results.</p>
      </div>
    </div>
  </div>
</section>

<!-- ========================================
   TESTIMONIALS
   ======================================== -->
<section class="testimonials section-padding">
  <div class="container">
    <div class="text-center">
      <div class="badge badge-white">Investor Stories</div>
      <h2 class="section-title section-title-white">Trusted by <span style="color:var(--green)">2.4 Lakh+</span> Investors</h2>
      <p class="section-subtitle section-subtitle-white">Here's what our long-term investors have to say about their FinSteps Wealth experience.</p>
    </div>
    <div class="testimonials-grid">
      <div class="testi-card reveal">
        <div class="testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        <p class="testi-text">"Started with a small SIP 8 years ago and my corpus has grown 4x. The team is transparent, professional, and always available to answer questions."</p>
        <div class="testi-author">
          <div class="testi-avatar">RK</div>
          <div>
            <div class="testi-name">Rajesh Kumar</div>
            <div class="testi-role">Software Engineer, Bengaluru &bull; 8 yrs investor</div>
          </div>
        </div>
      </div>
      <div class="testi-card reveal reveal-delay-1">
        <div class="testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        <p class="testi-text">"FinSteps Wealth helped me plan my daughter's education fund. Their advisors were patient, knowledgeable, and truly had my family's best interest in mind."</p>
        <div class="testi-author">
          <div class="testi-avatar">PM</div>
          <div>
            <div class="testi-name">Priya Mehta</div>
            <div class="testi-role">School Principal, Thrissur &bull; 6 yrs investor</div>
          </div>
        </div>
      </div>
      <div class="testi-card reveal reveal-delay-2">
        <div class="testi-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        <p class="testi-text">"The digital platform is super smooth and monthly statements are crystal clear. Best mutual fund experience I've had in 12 years of investing."</p>
        <div class="testi-author">
          <div class="testi-avatar">AS</div>
          <div>
            <div class="testi-name">Arun Sharma</div>
            <div class="testi-role">Business Owner, Delhi &bull; 12 yrs investor</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ========================================
   AWARDS STRIP
   ======================================== -->
<div class="awards-strip">
  <div class="container">
    <div class="awards-inner">
      <div class="award-item">
        <span class="award-icon">&#127942;</span>
        <div>
          <span class="award-name">Morningstar India</span>
          Best Consistent Performer 2023
        </div>
      </div>
      <div class="award-item">
        <span class="award-icon">&#11088;</span>
        <div>
          <span class="award-name">CRISIL Rank 1</span>
          Equity Fund Category 2022–23
        </div>
      </div>
      <div class="award-item">
        <span class="award-icon">&#127881;</span>
        <div>
          <span class="award-name">ET Wealth</span>
          Top AMC of the Year 2023
        </div>
      </div>
      <div class="award-item">
        <span class="award-icon">&#128737;</span>
        <div>
          <span class="award-name">SEBI Registered</span>
          Regulated &amp; Compliant
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ========================================
   LATEST NEWS
   ======================================== -->
<section class="news-section section-padding">
  <div class="container">
    <div class="text-center">
      <div class="badge">Insights</div>
      <h2 class="section-title">Market Insights &amp; <span class="accent">Fund Updates</span></h2>
      <p class="section-subtitle">Stay informed with our latest research, market commentary, and fund performance updates.</p>
    </div>
    <div class="news-grid">
      <div class="news-card reveal">
        <div class="news-card-img">&#128202;<span class="news-tag">Market Update</span></div>
        <div class="news-card-body">
          <div class="news-date">March 15, 2026</div>
          <h3 class="news-title">Nifty 50 Crosses 24,000 — What It Means for Your Mutual Fund Portfolio</h3>
          <p class="news-excerpt">The benchmark index hit a new milestone this week. Here's our fund manager's perspective on what to expect next and how our portfolios are positioned.</p>
          <a href="#" class="news-link">Read More &#8594;</a>
        </div>
      </div>
      <div class="news-card reveal reveal-delay-1">
        <div class="news-card-img">&#128181;<span class="news-tag">Tax Planning</span></div>
        <div class="news-card-body">
          <div class="news-date">March 10, 2026</div>
          <h3 class="news-title">Last Chance to Save Tax: Everything You Need to Know About ELSS Before March 31</h3>
          <p class="news-excerpt">Invest in our Tax Saver ELSS before March 31 to claim deductions up to &#8377;1.5 lakh under Section 80C. Step-by-step guide inside.</p>
          <a href="#" class="news-link">Read More &#8594;</a>
        </div>
      </div>
      <div class="news-card reveal reveal-delay-2">
        <div class="news-card-img">&#127758;<span class="news-tag">Global Markets</span></div>
        <div class="news-card-body">
          <div class="news-date">March 05, 2026</div>
          <h3 class="news-title">Is Now a Good Time to Add International Funds to Your Portfolio?</h3>
          <p class="news-excerpt">With the US Fed signalling rate cuts and European markets rebounding, our CIO shares an outlook on global fund opportunities for Indian investors.</p>
          <a href="#" class="news-link">Read More &#8594;</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ========================================
   NEWSLETTER
   ======================================== -->
<div class="newsletter-section">
  <div class="container">
    <div class="newsletter-inner">
      <div class="newsletter-text">
        <h3 class="newsletter-title">&#128140;&nbsp; Get Weekly Market Insights</h3>
        <p class="newsletter-sub">Join 50,000+ subscribers. No spam — just actionable investment ideas, every Monday.</p>
      </div>
      <form class="newsletter-form" onsubmit="event.preventDefault(); this.querySelector('input').value=''; this.querySelector('button').textContent='Subscribed ✓';">
        <input class="newsletter-input" type="email" placeholder="Enter your email address" required>
        <button type="submit" class="btn btn-primary">Subscribe</button>
      </form>
    </div>
  </div>
</div>

<!-- ========================================
   CTA
   ======================================== -->
<section class="cta-section section-padding">
  <div class="container">
    <div class="cta-inner reveal">
      <div class="badge badge-white">Limited Time Offer</div>
      <h2 class="cta-title">Begin Your Wealth Journey<br>Today — Zero Fees for 1 Year</h2>
      <p class="cta-desc">Open a FinSteps Wealth account with zero account opening charges and get your first year of advisory services absolutely free.</p>
      <div class="cta-actions">
        <a href="<?php echo esc_url( site_url('/contact.php') ); ?>" class="btn btn-primary btn-lg">Open Free Account</a>
        <a href="<?php echo esc_url( site_url('/about.php') ); ?>"   class="btn btn-outline-white btn-lg">Learn More About Us</a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
