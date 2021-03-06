<?php get_header(); ?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>


<?php if(!is_page(array('links'))): ?>	
<section class="common_banner_section">
    <div class="common_banner_images">
      <?php the_post_thumbnail(); ?>
    </div>
</section>
<?php endif; ?>
<?php if(is_page(array('links'))): ?>
<section class="personal_injuri_banner">
   
</section>
<?php endif; ?>



        <div class="default-page-container all_page_content">
            <div class="container">
            	<div class="main_all_page_container">
	                <div class="row">
	                	<div class="col-md-12">
	                		<div class="all_page_content_title">
	                			<h2><?php the_title(); ?></h2>
	                		</div>
	                		
	                	</div>
	                    <div class="col-md-12">
	                        <div class="row">
	                        	<div class="col-md-4">
	                        		<?php get_sidebar(); ?>
	                        	</div>
	                        	<div class="col-md-8">
	                        		
	                        		<div class="all_page_content_information">
	                        			<?php the_content(); ?>
	                        		</div>
	                        		
	                        	</div>
	                        </div>
	                    </div>

	                </div>
                </div>
            </div>
        </div>

    <?php endwhile;
endif;
wp_reset_query(); ?>


<?php get_footer(); ?>