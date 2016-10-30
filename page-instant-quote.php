<?php
/**
 * Template name: Instant Quote Page
 * The template for the instant quote
 *
 *
 * @package csconveyancing
 */


get_header(); ?>

	
	<?php $header_type = get_field('header_type');
	switch ($header_type) {
		case "cta":
			get_template_part('template-parts/sections/header','cta');
			break;
		case 'simple':
			get_template_part('template-parts/sections/header','simple');
			break;
		case 'slide':
			get_template_part('template-parts/sections/slideshow');
			break;
	}

	?>
	
	<?php get_template_part('template-parts/sections/sections'); ?>
	
	
	<div id="primary" class="content-area clearfix">
		<div class="container">
			
		<?php if(!$header_type == "cta"): ?>
			<div class="text-center">
				<?php if(get_field('custom_title')) { ?>
					<h1 class="entry-title"><?php echo the_field('custom_title'); ?></h1>
					<?php if(get_field('tagline')): ?>
						<h3><?php the_field('tagline'); ?></h3>
					<?php endif; ?>
				<?php } else { ?>
				  <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?> 
				<?php } ?>
			</div>
		<?php endif; ?>
			
				<main id="main" class="site-main" role="main">
		
					<?php while ( have_posts() ) : the_post(); ?>
		
						<?php get_template_part( 'template-parts/content', 'page' ); ?>
                
					<?php endwhile; // End of the loop. ?>
                    
                    <?php get_template_part('template-parts/sections/instant-quote'); ?>
		
				</main><!-- #main -->
				
		</div>            
	</div><!-- #primary -->
                                                    

<?php get_footer(); ?>
