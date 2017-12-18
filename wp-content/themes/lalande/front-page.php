<?php
/* template name: Front Page */
get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<!-- main-atf starts here -->
	      <section class="main-atf">
	        <div class="container">
	          <div class="atf-detail-row">
	            <div class="atf-detail-left">
	              <h1><?php the_field('main_heading','options'); ?></h1>
	              <h2><?php the_field('sub_heading','options'); ?></h2>
	              <p><?php the_field('atf_description','options'); ?></p>
	              <a href="#">Click here to start your <span>free case review</span></a>
	            </div>
	            <div class="atf-detail-right">
	              <img src="<?php echo home_url(); ?>/wp-content/uploads/2017/12/Best-Lawyers-2018.png" alt="">
	            </div>
	            <div class="clearfix"></div>
	          </div>
	        </div>        
	      </section>
	    <!-- main-atf ends here -->

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
 