<!DOCTYPE html>
<html <?php language_attributes(); ?> prefix="og: https://ogp.me/ns#">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="theme-color" content="#1a2d5a">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php $base = rtrim( get_site_url(), '/' ); $currentPath = $_SERVER['REQUEST_URI'] ?? ''; ?>

<!-- ========== NAVIGATION ========== -->
<header id="site-header" class="transparent">
  <div class="container">
    <nav class="nav-inner" role="navigation" aria-label="Main navigation">
      <a href="<?php echo $base; ?>/" class="nav-logo" aria-label="FinSteps Wealth — Home">
        <img src="<?php echo $base; ?>/logo.png" alt="FinSteps Wealth" class="site-logo">
      </a>
      <div class="nav-links">
        <a href="<?php echo $base; ?>/"           <?php if( is_front_page() ) echo 'class="active" aria-current="page"'; ?>>Home</a>
        <a href="<?php echo $base; ?>/about.php"  <?php if( strpos($currentPath,'about')  !==false) echo 'class="active" aria-current="page"'; ?>>About</a>
        <a href="<?php echo $base; ?>/contact.php"<?php if( strpos($currentPath,'contact')!==false) echo 'class="active" aria-current="page"'; ?>>Contact</a>
      </div>
      <a href="<?php echo $base; ?>/contact.php" class="btn btn-primary nav-cta">Get Started &rarr;</a>
      <button class="nav-hamburger" id="nav-hamburger" aria-label="Open menu" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>
    </nav>
  </div>
</header>

<nav class="mobile-nav" id="mobile-nav" aria-label="Mobile navigation">
  <button class="mobile-nav-close" id="mobile-nav-close" aria-label="Close menu">&times;</button>
  <a href="<?php echo $base; ?>/">Home</a>
  <a href="<?php echo $base; ?>/about.php">About Us</a>
  <a href="<?php echo $base; ?>/contact.php">Contact</a>
  <a href="<?php echo $base; ?>/contact.php" class="btn btn-primary" style="margin-top:16px;justify-content:center;">Get Started &rarr;</a>
</nav>
