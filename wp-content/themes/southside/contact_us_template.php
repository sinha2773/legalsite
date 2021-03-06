<?php 
 get_header();
 // Template Name: Contact Us
?>
      <?php 
        $p = new WP_Query(array(
            'post_type' => 'page',
            'posts_per_page' => 1,
            'page_id' =>44
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
        <section class="contact_page">
          <div class="container">
            <div class="contact_page_information">
            <div class="row">
              <div class="col-xs-12 col-sm-12 col-md-8">
                <div class="contactus_bottom_information">
                  
                  <?php echo do_shortcode( '[contact-form-7 id="170" title="Contact form 1"]'); ?>

                 
                </div>
              </div>
              <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="main_left_contact_info">
                  <div class="contactus_information">
                    <h2>Contact Us</h2>
                    <strong>Southside Legal Gold Coast</strong>
                    <p>First Floor<br/>427 Golden Four Dve<br/>PO Box 150,Tugun, 4224<br/> Gold Coast, QLD<br/> Queensland<br/> Australia </p>
                    <p>Tel: 07 5598 3266</p>
                    <p>Int'l: +617 5598 3266</p>
                    <p>Fax: 07 5534 7822</p>
                    <p>email :<a href="mailto:reception@southsidelegal.com.au">reception@southsidelegal.com.au</a> </p>
                    <p><a href="http://www.southsidelegal.com.au/">www.southsidelegal.com.au</a></p>
                  </div>
                  <div class="contact_page_socialicon">
                    <a href="<?php echo get_option('facebook_url');?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="<?php echo get_option('google_plus_url');?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    <a href="<?php echo get_option('linkedin_url');?>"><i class="fa fa-linkedin"></i></a>
                    
                  </div>
                </div>
              </div>
             
                <div class="col-xs-12 col-sm-12 col-md-12">
                  <div class="contactus_map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3518.0782174499723!2d153.49395931507175!3d-28.144106982612925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b91018da5bf005d%3A0xe304ca825142d803!2sSouthside+Legal+Gold+Coast!5e0!3m2!1sen!2s!4v1508009531883" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                  </div>
                </div>
              
            </div>
            </div>
          </div>
        </section>
<?php 
  get_footer();
?>