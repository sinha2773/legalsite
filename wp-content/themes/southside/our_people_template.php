<?php 
 get_header();
 // Template Name: Our People
?>
    <?php 
      $p = new WP_Query(array(
          'post_type' => 'page',
          'posts_per_page' => 1,
          'page_id' =>40
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
        <section class="about_section">
            <div class="container">
              <div class="main_abount_section">
                <div class="row">
                  <div class="col-md-4 col-sm-12">
                        <?php get_sidebar(); ?>
                    </div>
                    <div class="single_side_margin">
                      <div class="col-md-8 col-sm-12">
                        <div class="key_staf">
                          <h2>Key Staff</h2>
                        </div>
                        <?php 
                          $p = new WP_Query(array(
                              'post_type' => 'our_team',
                              'posts_per_page' => -1,                            
                          ));
                        ?>
                        <?php 
                            if($p->have_posts()): 
                            while($p->have_posts()): 
                            $p->the_post();  
                        ?>
                        <div class="row">
                          <div class="col-md-12">
                            <div class="solicitor_all_content">
                              <div class="solicitor_image_designation">
                                <div class="solicitor_images">
                                  <?php the_post_thumbnail(); ?>
                                </div>                         
                                <div class="solicitor_designation">
                                  <h3><?php echo get_post_meta(get_the_ID(),'designation',true); ?></h3>
                                  <h2><?php the_title(); ?></h2>
                                  <h4><?php echo get_post_meta(get_the_ID(),'degree',true); ?></h4>
                                  <p>Email:<a href="mailto:<?php echo get_post_meta(get_the_ID(),'email',true); ?>"><?php echo get_post_meta(get_the_ID(),'email',true); ?></a>  
                                      </p>
                                  <?php
                                  $linkdin = get_post_meta(get_the_ID(),'linked_in',true);
                                  if ( !empty($linkdin) ){
                                  ?>
                                  <span><i class="fa fa-linkedin" aria-hidden="true"></i> <a target="_blank" href="<?php echo $linkdin; ?>"><?php the_title();?></a> </span>
                                  <?php } ?>
                                </div>
                              </div>
                              <div class="soli_content">
                                <?php the_content(); ?>
                              </div>                              
                            </div>                            
                          </div>
                          </div>
                          <?php endwhile; endif; ?>
                          <?php 
                          $free_unquery = new WP_Query(array(
                              'post_type' => 'page',
                              'posts_per_page' => 1,
                              'page_id' =>40                            
                          ));
                        ?>
                        <?php 
                            if($free_unquery->have_posts()): 
                            while($free_unquery->have_posts()): 
                            $free_unquery->the_post();  
                        ?>
                          <div class="our_people_free_enquery">
                            <?php the_content(); ?>
                          </div>
                          <?php endwhile; endif; ?>
                           
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