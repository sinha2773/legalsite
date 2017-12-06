<?php 
// Template Name: Area of practice template
get_header(); 

?>
<?php if (have_posts()): while (have_posts()): the_post(); ?>

<?php if(!is_page(array('personal-injury','motor-vehicle-accidents','work-injuries','public-liability-claims','disability-insurance-claims','links'))): ?>	
<section class="common_banner_section">
    <div class="common_banner_images">
      <?php the_post_thumbnail(); ?>
    </div>
</section>
<?php endif; ?>
<?php if(is_page(array('personal-injury','motor-vehicle-accidents','work-injuries','public-liability-claims','disability-insurance-claims','links'))): ?>
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
	                        	<div class="col-md-4 col-sm-12">
	                        		<?php get_sidebar(); ?>
	                        	</div>
	                        	<div class="col-md-8 col-sm-12">
	                        		<div class="overview_title">
	                        			<?php if(is_page(array('deceased-estates-wills'))){ ?>	
	                					<a href="#" class="scrollto">Wills & Estate Administration</a>
	                					<a href="#" class="scrollto">Contesting Wills</a>
	                					<?php } ?>
	                					<?php if(!is_page(array('deceased-estates-wills'))){ ?>	
	                					<a href="#">Overview</a>
	                					<?php } ?>
	                					<a href="#faq" class="scrollto">FAQs</a>

	                				</div>
	                        		<div class="all_page_content_information">
	                        			<?php the_content(); ?>
	                        		</div>
	                        		<?php if(!is_page(array('links'))){ ?>	
	                        		<?php include('faq_section.php'); ?>
	                        		<?php } ?>
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