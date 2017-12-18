<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<title>Lalande & Company Lawyers</title>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<div class="wrapper">

      <!-- smart mobile navigation starts -->
      <nav class="mobile-nav">
        <img src="<?php echo home_url(); ?>/wp-content/uploads/2017/12/cross-icon.png" class="close-nav" alt="">        
        <?php if ( has_nav_menu( 'top' ) ) : ?>           
          <?php
            wp_nav_menu( array
              ( 'theme_location' => 'top', 'menu_class' => 'nav navbar-nav', 'menu_id' => 'top-menu' ) 
            ); 
            //get_template_part( 'template-parts/navigation/navigation', 'top' ); 
          ?>
         <?php endif; ?>        
      </nav>

      <!-- header starts -->
      <header class="main-header">
          <div class="container">
            <div class="logo">
              <a href="<?php echo home_url(); ?>">
                <img src="<?php the_field('logo-thumbnail','options'); ?>" alt="">
              </a>
            </div>
            <div class="header-right">
              <div class="header-detail-row">
                <div class="header-detail-left">
                  <h2><?php the_field('header_text','options'); ?></h2>
                  <ul class="primary-nav">
                    <?php if ( has_nav_menu( 'top' ) ) : ?>						
          						<?php
          							wp_nav_menu( array
          								( 'theme_location' => 'top', 'menu_class' => 'nav navbar-nav', 'menu_id' => 'top-menu' ) 
          							); 
          							//get_template_part( 'template-parts/navigation/navigation', 'top' ); 
          						?>
					           <?php endif; ?>
                  </ul>
                </div>
                <div class="menu-icon">
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
            <div class="clearfix"></div>
          </div>
      </header>
      <!-- header ends -->

	

	<div class="site-content-contain">
		<div id="content" class="site-content">
