<?php 
 get_header();
  // Template Name: Faq
?>
<?php 
        $p = new WP_Query(array(
            'post_type' => 'page',
            'posts_per_page' => 1,
            'page_id' =>177
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
                      <div class="faq_information">
                        <div id="accordion" role="tablist" aria-multiselectable="true">
                          <?php 
                              $faq_store = new WP_Query(array(
                                  'post_type' => 'faq',
                                  'posts_per_page' => -1,
                                  
                              ));
                          ?>
                          <?php 
                              $i=20; 
                              if($faq_store->have_posts()): 
                              while($faq_store->have_posts()):
                              $faq_store->the_post();
                               
                          ?>
                          <div class="card">
                            <div class="card-header faq_header" role="tab" id="heading<?php echo $i; ?>">
                              <h5 class="mb-0" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $i; ?>" aria-expanded="false" aria-controls="collapse<?php echo $i; ?>">
                                  <i class="fa fa-plus" aria-hidden="true"></i>   
                                  <i class="fa fa-minus" aria-hidden="true" style="display: none;"></i>   
                                <?php the_title(); ?>
                              </h5>
                               <div id="collapse<?php echo $i; ?>" class="collapse" role="tabpanel" aria-labelledby="heading<?php echo $i; ?>">
                                <div class="card-block faq_content">
                                  <?php the_content(); ?>
                                </div>
                              </div>
                            </div>
                          </div>
                          <?php $i++; endwhile; endif; ?>
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