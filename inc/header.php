<?php
/* ===================================================
   Shared Header — FinSteps Wealth
   =================================================== */
$base       = '/finsteps';
$assetBase  = $base . '/wp-content/themes/finsteps-wealth/assets';
$activePage = $activePage ?? 'home';

/* --- SEO defaults (override in each page file) --- */
$pageTitle   = $pageTitle  ?? 'FinSteps Wealth';
$metaDesc    = $metaDesc   ?? 'FinSteps Wealth is a SEBI-registered mutual fund company based in Thrissur, Kerala. Start investing from ₹500/month with expert-managed funds for long-term wealth creation.';
$metaKeys    = $metaKeys   ?? 'mutual fund, mutual fund Kerala, SIP investment, SEBI registered fund, wealth management Thrissur, best mutual fund India, equity fund, debt fund, ELSS tax saving, FinSteps Wealth';
$ogType      = $ogType     ?? 'website';
$ogImage     = $ogImage    ?? 'http://localhost' . $base . '/wp-content/themes/finsteps-wealth/assets/images/og-image.jpg';

/* --- Canonical URL --- */
$protocol  = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$canonical = $protocol . '://' . ($_SERVER['HTTP_HOST'] ?? 'localhost') . strtok($_SERVER['REQUEST_URI'] ?? '/', '?');

/* --- Full SEO title --- */
$seoTitle = ($activePage === 'home')
  ? 'FinSteps Wealth | Mutual Fund Investments | Thrissur, Kerala'
  : $pageTitle . ' | FinSteps Wealth — Mutual Fund Company, Kerala';

/* --- JSON-LD: Organization (all pages) --- */
$orgSchema = [
  '@context'    => 'https://schema.org',
  '@type'       => 'FinancialService',
  'name'        => 'FinSteps Wealth',
  'description' => 'SEBI-registered mutual fund company in Kerala offering expert-managed investment funds.',
  'url'         => 'http://localhost' . $base . '/',
  'logo'        => 'http://localhost' . $base . '/favicon.svg',
  'telephone'   => '+918592933387',
  'email'       => 'finstepswealth@gmail.com',
  'address'     => [
    '@type'           => 'PostalAddress',
    'streetAddress'   => 'Thrissur',
    'addressLocality' => 'Thrissur',
    'addressRegion'   => 'Kerala',
    'postalCode'      => '680564',
    'addressCountry'  => 'IN',
  ],
  'areaServed'       => 'IN',
  'currenciesAccepted' => 'INR',
  'sameAs' => [
    'https://www.facebook.com/finstepswealth',
    'https://www.linkedin.com/company/finstepswealth',
  ],
];

/* --- JSON-LD: WebSite (home only) --- */
$websiteSchema = ($activePage === 'home') ? [
  '@context' => 'https://schema.org',
  '@type'    => 'WebSite',
  'name'     => 'FinSteps Wealth',
  'url'      => 'http://localhost' . $base . '/',
  'potentialAction' => [
    '@type'       => 'SearchAction',
    'target'      => 'http://localhost' . $base . '/?s={search_term_string}',
    'query-input' => 'required name=search_term_string',
  ],
] : null;

/* --- JSON-LD: ContactPage --- */
$contactSchema = ($activePage === 'contact') ? [
  '@context' => 'https://schema.org',
  '@type'    => 'ContactPage',
  'name'     => 'Contact FinSteps Wealth',
  'url'      => 'http://localhost' . $base . '/contact.php',
  'description' => 'Contact FinSteps Wealth for mutual fund investment guidance, SIP plans, and portfolio advisory services.',
] : null;

/* --- JSON-LD: AboutPage --- */
$aboutSchema = ($activePage === 'about') ? [
  '@context' => 'https://schema.org',
  '@type'    => 'AboutPage',
  'name'     => 'About FinSteps Wealth',
  'url'      => 'http://localhost' . $base . '/about.php',
  'description' => 'Learn about FinSteps Wealth — our values, investment philosophy, and mission to make wealth creation accessible to every Indian.',
] : null;
?>
<!DOCTYPE html>
<html lang="en-IN" prefix="og: https://ogp.me/ns#">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- ===== Primary SEO ===== -->
  <title><?php echo htmlspecialchars($seoTitle); ?></title>
  <meta name="description"  content="<?php echo htmlspecialchars($metaDesc); ?>">
  <meta name="keywords"     content="<?php echo htmlspecialchars($metaKeys); ?>">
  <meta name="author"       content="FinSteps Wealth">
  <meta name="robots"       content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
  <meta name="theme-color"  content="#1a2d5a">
  <link rel="canonical"     href="<?php echo htmlspecialchars($canonical); ?>">

  <!-- ===== Open Graph ===== -->
  <meta property="og:type"        content="<?php echo $ogType; ?>">
  <meta property="og:url"         content="<?php echo htmlspecialchars($canonical); ?>">
  <meta property="og:site_name"   content="FinSteps Wealth">
  <meta property="og:title"       content="<?php echo htmlspecialchars($seoTitle); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($metaDesc); ?>">
  <meta property="og:image"       content="<?php echo htmlspecialchars($ogImage); ?>">
  <meta property="og:image:width"  content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:image:alt"   content="FinSteps Wealth — Mutual Fund Investments Kerala">
  <meta property="og:locale"      content="en_IN">

  <!-- ===== Twitter / X Card ===== -->
  <meta name="twitter:card"        content="summary_large_image">
  <meta name="twitter:title"       content="<?php echo htmlspecialchars($seoTitle); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($metaDesc); ?>">
  <meta name="twitter:image"       content="<?php echo htmlspecialchars($ogImage); ?>">

  <!-- ===== Geo Tags ===== -->
  <meta name="geo.region"      content="IN-KL">
  <meta name="geo.placename"   content="Thrissur, Kerala, India">
  <meta name="geo.position"    content="10.5276;76.2144">
  <meta name="ICBM"            content="10.5276, 76.2144">

  <!-- ===== Favicon ===== -->
  <link rel="icon"             type="image/svg+xml" href="<?php echo $base; ?>/favicon.svg">
  <link rel="icon"             type="image/x-icon"  href="<?php echo $base; ?>/favicon.svg">
  <link rel="apple-touch-icon"                      href="<?php echo $base; ?>/favicon.svg">
  <link rel="shortcut icon"    type="image/svg+xml" href="<?php echo $base; ?>/favicon.svg">
  <meta name="msapplication-TileColor" content="#1a2d5a">

  <!-- ===== Fonts ===== -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Playfair+Display:wght@600;700&display=swap" rel="stylesheet">

  <!-- ===== Stylesheet ===== -->
  <link rel="stylesheet" href="<?php echo $assetBase; ?>/css/main.css">

  <!-- ===== JSON-LD Structured Data ===== -->
  <script type="application/ld+json"><?php echo json_encode($orgSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?></script>
  <?php if ($websiteSchema): ?>
  <script type="application/ld+json"><?php echo json_encode($websiteSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?></script>
  <?php endif; ?>
  <?php if ($contactSchema): ?>
  <script type="application/ld+json"><?php echo json_encode($contactSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?></script>
  <?php endif; ?>
  <?php if ($aboutSchema): ?>
  <script type="application/ld+json"><?php echo json_encode($aboutSchema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?></script>
  <?php endif; ?>
</head>
<body>

<!-- ========== NAVIGATION ========== -->
<header id="site-header" class="transparent">
  <div class="container">
    <nav class="nav-inner" role="navigation" aria-label="Main navigation">
      <a href="<?php echo $base; ?>/" class="nav-logo" aria-label="FinSteps Wealth — Home">
        <div class="nav-logo-icon" aria-hidden="true">&#9650;</div>
        FinSteps <span>Wealth</span>
      </a>
      <div class="nav-links">
        <a href="<?php echo $base; ?>/"          <?php if($activePage==='home')    echo 'class="active" aria-current="page"'; ?>>Home</a>
        <a href="<?php echo $base; ?>/about.php"  <?php if($activePage==='about')   echo 'class="active" aria-current="page"'; ?>>About</a>
        <a href="<?php echo $base; ?>/contact.php"<?php if($activePage==='contact') echo 'class="active" aria-current="page"'; ?>>Contact</a>
      </div>
      <a href="<?php echo $base; ?>/contact.php" class="btn btn-primary nav-cta">Get Started &rarr;</a>
      <button class="nav-hamburger" id="nav-hamburger" aria-label="Open menu" aria-expanded="false" aria-controls="mobile-nav">
        <span></span><span></span><span></span>
      </button>
    </nav>
  </div>
</header>

<!-- Mobile Nav -->
<nav class="mobile-nav" id="mobile-nav" aria-label="Mobile navigation">
  <button class="mobile-nav-close" id="mobile-nav-close" aria-label="Close menu">&times;</button>
  <a href="<?php echo $base; ?>/">Home</a>
  <a href="<?php echo $base; ?>/about.php">About Us</a>
  <a href="<?php echo $base; ?>/contact.php">Contact</a>
  <a href="<?php echo $base; ?>/contact.php" class="btn btn-primary" style="margin-top:16px;justify-content:center;">Get Started &rarr;</a>
</nav>
