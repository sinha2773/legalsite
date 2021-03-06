<?php 

  // Template Name: Blog Template
  get_header();
 ?>
<?php 
        $p = new WP_Query(array(
            'post_type' => 'page',
            'posts_per_page' => 1,
            'page_id' =>42
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
 <section class="blog_section">
   <div class="container">
     <div class="main_blog_div">
       <div class="blog_content">
         <div class="blog_header">
           <div class="row">
             <div class="col-md-12">
               <div class="blog_header_content">
                  <h2><?php the_title(); ?></h2>
                                  
               </div>
             </div>
           </div>
         </div>
         <div class="blog_body">
           <div class="row">
             <div class="col-md-9 col-sm-12">
               <div class="blog_post_list">
                 <div class="row">
                  <?php
                    $paged = get_query_var('paged') ? get_query_var('paged') : 1; 
                      $all_blog_post = new WP_Query(array(
                        'post_type' => 'post',
                        "paged" => $paged,
                        'posts_per_page' => 9
                        
                    ));
                  ?>
                  <?php 
                    if($all_blog_post ->have_posts()): 
                    while($all_blog_post->have_posts()) :
                     $all_blog_post->the_post(); 
                  ?>
                   <div class="col-md-4">
                     <div class="blog_post_item">
                       <div class="blog_post_item_images">
                         <?php the_post_thumbnail('blolg_image'); ?>
                       </div>
                       <div class="blog_post_item_images_text">
                         <div class="blog_post_item_images_text_title">
                           <h3><?php the_title(); ?></h3>
                         </div>
                         <div class="blog_post_item_images_text_body">
                           <p><?php echo get_trim_content(25,true); ?></p>
                           
                         </div>
                         <div class="blog_post_item_images_text_body_details">
                           <a class="blog_post_a_tag" href="<?php the_permalink(); ?>">Details</a>
                         </div>
                         <div class="blog_post_item_images_text_date_time">
                           <span><?php echo get_the_date(); ?></span>
                           <span class="blog_post_date"><?php echo get_the_time(); ?></span>
                         </div>
                       </div>
                     </div>
                   </div>
                 <?php endwhile; endif; ?>
                 
                 </div>
                 <div class="main-pagination pull-right">
                  <?php 
                  if(function_exists('wp_pagenavi')) { wp_pagenavi( array( 'query' => $all_blog_post )); }  
                  
                  ?>
              </div>
               </div>
               <?php 
                  $free_unquery = new WP_Query(array(
                      'post_type' => 'page',
                      'posts_per_page' => 1,
                      'page_id' =>42                            
                  ));
                ?>
                <?php 
                    if($free_unquery->have_posts()): 
                    while($free_unquery->have_posts()): 
                    $free_unquery->the_post();  
                ?>
               <div class="blog_free_enquiry">
                 <?php the_content(); ?>
               </div>
              <?php endwhile; endif; ?>
               
             </div>
            
             <div class="col-md-3 col-sm-12">
               <div class="blog_right_sidebar">
                 
                 <div class="blog_right_sidebar_content">
                   <?php dynamic_sidebar('blog_right_sidebar'); ?>
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