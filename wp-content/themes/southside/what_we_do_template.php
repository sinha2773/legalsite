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
                  <div class="col-md-4 col-sm-12">
                        <?php get_sidebar(); ?>
                    </div>
                    <div class="col-md-8 col-sm-12">                      
                      <div class="what_we_do_information">                            
                        <div class="what_we_do_information_title common_title_color">
                          <h3>What We Do</h3>
                          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>                                
                        </div>
                        <div class="what_we_do_content">
                          <div class="row">
                            <div class="col-md-4">
                              <div class="what_we_do_info">
                                <div class="what_we_do_images">
                                  <img src="<?php echo get_template_directory_uri();?>/images/title-icon-1.png">
                                </div>
                                <h3>Professional Negligence</h3>
                                <a href="<?php echo get_permalink('13'); ?>">Read More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                              </div>
                            </div>                            
                            <div class="col-md-4">
                              <div class="what_we_do_info">
                                <div class="what_we_do_images">
                                  <img src="<?php echo get_template_directory_uri();?>/images/title-icon-1.png">
                                </div>
                                <h3>Personal Injury</h3>
                                <a href="<?php echo get_permalink('166'); ?>">Read More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                              </div>
                            </div>                            
                            <div class="col-md-4">
                              <div class="what_we_do_info">
                                <div class="what_we_do_images">
                                  <img src="<?php echo get_template_directory_uri();?>/images/title-icon-1.png">
                                </div>
                                <h3>Deceased Estates & Wills</h3>
                                <a href="<?php echo get_permalink('168'); ?>">Read More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                              </div>
                            </div>
                          </div>
                            <div class="row">
                            <div class="col-md-6">
                              <div class="what_we_do_info what_we_do_info_bottom">
                                <div class="what_we_do_images">
                                  <img src="<?php echo get_template_directory_uri();?>/images/title-icon-1.png">
                                </div>
                                <h3>Civil Litigation including Debt Collection</h3>
                                <a href="<?php echo get_permalink('173'); ?>">Read More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                              </div>                              
                            </div>
                            <div class="col-md-6">
                              <div class="what_we_do_info what_we_do_info_bottom">
                                <div class="what_we_do_images">
                                  <img src="<?php echo get_template_directory_uri();?>/images/title-icon-1.png">
                                </div>
                                <h3>Tourism Law</h3>
                                <a href="<?php echo get_permalink('103'); ?>">Read More<i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
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