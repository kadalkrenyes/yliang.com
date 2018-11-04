<!DOCTYPE html>
<html lang="id" prefix="og: http://ogp.me/ns#">
<head itemscope="itemscope" itemtype="http://schema.org/WebSite">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<title><?php echo site_title( $site_title ); ?></title>
<?php if ( isset( $meta_description ) ) { ?>
<meta name="description" content="<?php echo $meta_description; ?>" />
<meta property="og:description" content="<?php echo $meta_description; ?>" />
<?php } ?>
<meta property="og:site_name" content="<?php echo get_option( 'site_name' ); ?>" />
<meta property="og:title" content="<?php echo $site_title; ?>" />
<meta property="og:url" content="<?php echo canonical_url(); ?>" />
<?php if ( isset( $meta_robots ) ) { ?>
<meta name="robots" content="<?php echo $meta_robots; ?>" />
<?php } ?>
 <?php if ( isset( $result[0]['image'] ) ) { ?>
<meta property="og:image" content="<?php echo $result[0]['image']; ?>" />
<?php } elseif ( isset( $result['image'] ) ) { ?>
<meta property="og:image" content="<?php echo $result['image']; ?>" />
<?php } ?>
<?php register_stylesheet( site_url() . '/assets/css/style.css' ); ?>
 <?php
if ( file_exists( BASE . '/config/' . $_SERVER['HTTP_HOST'] . '/_header.php' ) ) {
include BASE . '/config/' . $_SERVER['HTTP_HOST'] . '/_header.php';
}
    ?>
<link rel="icon" href="https://lagu123.download/themes/lagu123/assets/images/favicon.ico" type="image/x-icon" />
  </head>
  <body>
    <div class="container">
      <header id="header" class="clearfix">
        <div class="site-info">
          <div class="site-name">
            <a href="<?php echo site_url(); ?>"><?php echo get_option( 'site_name' ); ?></a>
          </div>

          <div class="site-tagline"><?php echo get_option( 'site_tagline' ); ?></div>
        </div>
      </header>

      <form method="get" action="<?php echo site_url(); ?>" class="search-form clearfix">
        <input autocomplete="off" type="text" name="search" placeholder="Cari Lagu disini ..." />
      </form>
