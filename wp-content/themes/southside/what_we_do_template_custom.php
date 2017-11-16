<?php 
 get_header();
  // Template Name: What We Do custom
?>
        <section class="common_banner_section">
            <div class="common_banner_images">
              <img src="<?php echo get_template_directory_uri();?>/images/judge-header.png">
            </div>
        </section>         
        <section class="what_we_do_section">
            <div class="container">
              <div class="what_we_do_main">
                <div class="row">
                  <div class="col-md-4">
                        <?php get_sidebar(); ?>
                    </div>
                    <div class="col-md-8">                      
                      <div class="what_we_do_information">                            
                        <div class="what_we_do_information_title common_title_color">
                          <h3>What We Do</h3>                                
                        </div>
                        <div class="what_we_do_content">
                          <div class="row">
                            <?php 
                                $area_top = new WP_Query(array(
                                    'post_type' => 'area_of_practice',
                                    'posts_per_page' => 4,
                                    'practice_type' =>'what-we-do-top'
                                ));
                            ?>
                            <?php 
                                if($area_top->have_posts()): 
                                while($area_top->have_posts()):
                                $area_top->the_post();  
                            ?>
                            <div class="col-md-3">
                              <div class="what_we_do_info">
                                <div class="what_we_do_images">
                                  <?php the_post_thumbnail('area_image'); ?>
                                </div>
                                <h3><?php the_title(); ?></h3>
                                <a href="<?php the_permalink(); ?>">Read More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                              </div>
                            </div>
                            <?php endwhile; endif; ?>
                            <!-- <div class="col-md-3">
                              <div class="what_we_do_info">
                                <div class="what_we_do_images">
                                  <img src="<?php echo get_template_directory_uri();?>/images/title-icon-1.png">
                                </div>
                                <h3>Professional Negligence</h3>
                                <a href="<?php the_permalink(); ?>">Read More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="what_we_do_info">
                                <div class="what_we_do_images">
                                  <img src="<?php echo get_template_directory_uri();?>/images/title-icon-1.png">
                                </div>
                                <h3>Wills And Estates</h3>
                                <a href="wills_and_estates.html">Read More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="what_we_do_info">
                                <div class="what_we_do_images">
                                  <img src="<?php echo get_template_directory_uri();?>/images/title-icon-1.png">
                                </div>
                                <h3>Debt Collection</h3>
                                <a href="<?php the_permalink(); ?>">Read More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                              </div>
                            </div> -->
                            <div class="col-md-6">
                              <div class="what_we_do_info what_we_do_info_bottom">
                                <div class="what_we_do_images">
                                  <img src="<?php echo get_template_directory_uri();?>/images/title-icon-1.png">
                                </div>
                                <h3>Deceased Estate Administration</h3>
                                <a href="<?php the_permalink(); ?>">Read More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="what_we_do_info what_we_do_info_bottom">
                                <div class="what_we_do_images">
                                  <img src="<?php echo get_template_directory_uri();?>/images/title-icon-1.png">
                                </div>
                                <h3>Commercial And General Litigation</h3>
                                <a href="<?php the_permalink(); ?>">Read More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                              </div>
                            </div>  
                            <div class="col-md-3">
                              <div class="what_we_do_info">
                                <div class="what_we_do_images">
                                  <img src="<?php echo get_template_directory_uri();?>/images/title-icon-1.png">
                                </div>
                                <h3>Insurance Claims</h3>
                                <a href="<?php the_permalink(); ?>">Read More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="what_we_do_info">
                                <div class="what_we_do_images">
                                  <img src="<?php echo get_template_directory_uri();?>/images/title-icon-1.png">
                                </div>
                                <h3>Contractual Disputes</h3>
                                <a href="<?php the_permalink(); ?>">Read More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="what_we_do_info">
                                <div class="what_we_do_images">
                                  <img src="<?php echo get_template_directory_uri();?>/images/title-icon-1.png">
                                </div>
                                <h3>Wills Preparation</h3>
                                <a href="<?php the_permalink(); ?>">Read More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="what_we_do_info">
                                <div class="what_we_do_images">
                                  <img src="<?php echo get_template_directory_uri();?>/images/title-icon-1.png">
                                </div>
                                <h3>Contesting Wills</h3>
                                <a href="<?php the_permalink(); ?>">Read More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                              </div>
                            </div>  
                          </div>                             
                        </div>                          
                      </div> 
                    </div>                    
                </div>
              </div>
            </div>
        </section>
<?php 
  get_footer();
?>