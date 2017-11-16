<?php 
 get_header();
  // Template Name: What We Do
?>
<?php 
        $p = new WP_Query(array(
            'post_type' => 'page',
            'posts_per_page' => 1,
            'page_id' =>7
        ));
    ?>
    <?php 
        if($p->have_posts()): 
        while($p->have_posts()): 
        $p->the_post();  
    ?>
        <section class="common_banner_section">
            <div class="common_banner_images">
              <?php the_post_thumbnail('testimonial-bg-image'); ?>
            </div>
        </section>
    <?php endwhile; endif; ?>       
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
                            <div class="col-md-3">
                              <div class="what_we_do_info">
                                <div class="what_we_do_images">
                                  <img src="<?php echo get_template_directory_uri();?>/images/title-icon-1.png">
                                </div>
                                <h3>Compensation Law</h3>
                                <a href="<?php echo get_permalink('11'); ?>">Read More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="what_we_do_info">
                                <div class="what_we_do_images">
                                  <img src="<?php echo get_template_directory_uri();?>/images/title-icon-1.png">
                                </div>
                                <h3>Professional Negligence</h3>
                                <a href="<?php echo get_permalink('13'); ?>">Read More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="what_we_do_info">
                                <div class="what_we_do_images">
                                  <img src="<?php echo get_template_directory_uri();?>/images/title-icon-1.png">
                                </div>
                                <h3>Wills And Estates</h3>
                                <a href="<?php echo get_permalink('25'); ?>">Read More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="what_we_do_info">
                                <div class="what_we_do_images">
                                  <img src="<?php echo get_template_directory_uri();?>/images/title-icon-1.png">
                                </div>
                                <h3>Debt Collection</h3>
                                <a href="<?php echo get_permalink('17'); ?>">Read More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                              </div>
                            </div> 
                          </div>
                            <div class="row">
                            <div class="col-md-6">
                              <div class="what_we_do_info what_we_do_info_bottom">
                                <div class="what_we_do_images">
                                  <img src="<?php echo get_template_directory_uri();?>/images/title-icon-1.png">
                                </div>
                                <h3>Deceased Estate Administration</h3>
                                <a href="<?php echo get_permalink('31'); ?>">Read More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="what_we_do_info what_we_do_info_bottom">
                                <div class="what_we_do_images">
                                  <img src="<?php echo get_template_directory_uri();?>/images/title-icon-1.png">
                                </div>
                                <h3>Commercial And General Litigation</h3>
                                <a href="<?php echo get_permalink('15'); ?>">Read More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                              </div>
                            </div> 
                            </div>
                            <div class="row">
                            <div class="col-md-3">
                              <div class="what_we_do_info">
                                <div class="what_we_do_images">
                                  <img src="<?php echo get_template_directory_uri();?>/images/title-icon-1.png">
                                </div>
                                <h3>Insurance Claims</h3>
                                <a href="<?php echo get_permalink('19'); ?>">Read More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="what_we_do_info">
                                <div class="what_we_do_images">
                                  <img src="<?php echo get_template_directory_uri();?>/images/title-icon-1.png">
                                </div>
                                <h3>Contractual Disputes</h3>
                                <a href="<?php echo get_permalink('21'); ?>">Read More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="what_we_do_info">
                                <div class="what_we_do_images">
                                  <img src="<?php echo get_template_directory_uri();?>/images/title-icon-1.png">
                                </div>
                                <h3>Wills Preparation</h3>
                                <a href="<?php echo get_permalink('27'); ?>">Read More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                              </div>
                            </div>
                            <div class="col-md-3">
                              <div class="what_we_do_info">
                                <div class="what_we_do_images">
                                  <img src="<?php echo get_template_directory_uri();?>/images/title-icon-1.png">
                                </div>
                                <h3>Contesting Wills</h3>
                                <a href="<?php echo get_permalink('29'); ?>">Read More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
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