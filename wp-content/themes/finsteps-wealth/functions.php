<?php
/**
 * FinSteps Wealth Theme Functions
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/* --- Theme Setup --- */
function finsteps_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'html5', [ 'search-form', 'comment-form', 'gallery', 'caption' ] );
    register_nav_menus( [ 'primary' => __( 'Primary Menu', 'finsteps-wealth' ) ] );
}
add_action( 'after_setup_theme', 'finsteps_setup' );

/* --- Enqueue Assets --- */
function finsteps_enqueue() {
    wp_enqueue_style(  'finsteps-main',    get_template_directory_uri() . '/assets/css/main.css',          [], '1.0.0' );
    wp_enqueue_style(  'finsteps-colors',  get_template_directory_uri() . '/assets/css/color-refresh.css', ['finsteps-main'], '1.0.0' );
    wp_enqueue_script( 'finsteps-main',    get_template_directory_uri() . '/assets/js/main.js',            [], '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'finsteps_enqueue' );

/* --- SEO Meta Tags --- */
function finsteps_seo_meta() {
    $site_url   = get_site_url();
    $site_name  = 'FinSteps Wealth';
    $og_image   = get_template_directory_uri() . '/assets/images/og-image.jpg';
    $canonical  = esc_url( ( is_ssl() ? 'https' : 'http' ) . '://' . $_SERVER['HTTP_HOST'] . strtok( $_SERVER['REQUEST_URI'], '?' ) );

    if ( is_front_page() ) {
        $title = 'FinSteps Wealth | Mutual Fund Investments | Thrissur, Kerala';
        $desc  = 'FinSteps Wealth is a SEBI-registered mutual fund company in Thrissur, Kerala. Start investing from ₹500/month with expert-managed funds for long-term wealth creation.';
        $keys  = 'mutual fund Kerala, SIP investment Thrissur, SEBI registered mutual fund, best mutual fund India, FinSteps Wealth';
        $type  = 'website';
    } else {
        $title = get_the_title() . ' | ' . $site_name . ' — Mutual Fund Company, Kerala';
        $desc  = get_bloginfo('description') ?: 'FinSteps Wealth — SEBI-registered mutual fund investments from Kerala.';
        $keys  = 'mutual fund Kerala, wealth management Thrissur, FinSteps Wealth';
        $type  = 'article';
    }
    ?>
  <!-- SEO -->
  <meta name="description"  content="<?php echo esc_attr($desc); ?>">
  <meta name="keywords"     content="<?php echo esc_attr($keys); ?>">
  <meta name="author"       content="FinSteps Wealth">
  <meta name="robots"       content="index, follow, max-snippet:-1, max-image-preview:large">
  <link rel="canonical"     href="<?php echo $canonical; ?>">

  <!-- Open Graph -->
  <meta property="og:type"        content="<?php echo $type; ?>">
  <meta property="og:url"         content="<?php echo $canonical; ?>">
  <meta property="og:site_name"   content="<?php echo $site_name; ?>">
  <meta property="og:title"       content="<?php echo esc_attr($title); ?>">
  <meta property="og:description" content="<?php echo esc_attr($desc); ?>">
  <meta property="og:image"       content="<?php echo esc_url($og_image); ?>">
  <meta property="og:image:width"  content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:locale"      content="en_IN">

  <!-- Twitter Card -->
  <meta name="twitter:card"        content="summary_large_image">
  <meta name="twitter:title"       content="<?php echo esc_attr($title); ?>">
  <meta name="twitter:description" content="<?php echo esc_attr($desc); ?>">
  <meta name="twitter:image"       content="<?php echo esc_url($og_image); ?>">

  <!-- Geo -->
  <meta name="geo.region"    content="IN-KL">
  <meta name="geo.placename" content="Thrissur, Kerala, India">
  <meta name="geo.position"  content="10.5276;76.2144">
  <meta name="ICBM"          content="10.5276, 76.2144">

  <!-- Favicon -->
  <link rel="icon"            type="image/svg+xml" href="<?php echo esc_url($site_url); ?>/favicon.svg">
  <link rel="shortcut icon"   type="image/svg+xml" href="<?php echo esc_url($site_url); ?>/favicon.svg">
  <link rel="apple-touch-icon"                     href="<?php echo esc_url($site_url); ?>/favicon.svg">

  <!-- JSON-LD: Organization -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FinancialService",
    "name": "FinSteps Wealth",
    "description": "SEBI-registered mutual fund company in Thrissur, Kerala offering expert-managed investment funds.",
    "url": "<?php echo esc_js($site_url); ?>/",
    "logo": "<?php echo esc_js($site_url); ?>/favicon.svg",
    "telephone": "+918592933387",
    "email": "finstepswealth@gmail.com",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Thrissur",
      "addressLocality": "Thrissur",
      "addressRegion": "Kerala",
      "postalCode": "680564",
      "addressCountry": "IN"
    },
    "areaServed": "IN",
    "currenciesAccepted": "INR"
  }
  </script>
<?php }
add_action( 'wp_head', 'finsteps_seo_meta', 1 );

/* --- Remove WordPress version tag (security) --- */
remove_action( 'wp_head', 'wp_generator' );

/* --- Clean up unnecessary wp_head items --- */
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wp_shortlink_wp_head' );
