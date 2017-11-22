<div class="faq_information">
  <div class="faq_title">
    <h2>Frequently Asked Questions</h2>
  </div>
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