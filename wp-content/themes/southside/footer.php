 <footer class="footer_top_section">
            <div class="footer_top">
                <div class="container">
                    <div class="row">
                        <div class="social_icon_link">
                            <div class="col-md-4 col-sm-6 socila_padding_left">
                                <div class="social_icon social_facebook"><a href="<?php echo get_option('facebook_url');?>">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a></div>
                            </div>
                            <div class="col-md-4 col-sm-6 socila_padding_both">
                                <div class="social_icon social_google_plus"><a href="<?php echo get_option('google_plus_url');?>">
                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                                </a></div>
                            </div>
                            <div class="col-md-4 col-sm-6 social_padding_right">
                                <div class="social_icon social_linkedin"><a href="<?php echo get_option('linkedin_url');?>">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <footer class="footer_bottom_section">
            <div class="container">
                <div class="footer_bottom_information">
                    <div class="row">
                        <?php dynamic_sidebar('footer_w_id'); ?>

                    </div>
                </div>
                <div class="copyright">
                    <p>Southside Legal Gold Coast © 2017 All Right Reserved.</p>
                </div>
            </div>
        </footer>
        <div class="sideber_contact_form quote_form">
          <div class="sideber_contact_form_information">
            <div class="sideber_contact_form_title common_title_color">
                <h3>Quick Enquiry Form</h3>
            </div>
            <div class="sideber_contact_form_body">
                <p class="text_center">Free Enquiry, no obligation</p>
                <h3 class="text_center">07 5598 3266</h3>
                <?php echo do_shortcode( '[contact-form-7 id="193" title="Quick Contact"]'); ?>
              
            </div>
          </div>
          
        </div>
        <div class="sideber_contact_form_icon quote_form_button"  data-toggle="tooltip" title="Click here to Quick Contact">
            <img src="<?php echo get_template_directory_uri();?>/images/qcontact.png">
            <!-- <i class="fa fa-envelope-o" aria-hidden="true"></i> -->
        </div>  
        <div class="scrolltoup" style="">
          <i class="fa fa-level-up" aria-hidden="true"></i>
        </div>
		
		

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri();?>/js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
        <script src="<?php echo get_template_directory_uri();?>/js/plugins.js"></script>
        <script src="<?php echo get_template_directory_uri();?>/js/main.js"></script>
        
        <script src="<?php echo get_template_directory_uri();?>/js/bootstrap.min.js"></script>
         <script src="<?php echo get_template_directory_uri();?>/js/scrolling-nav.js"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>


    <? php wp_footer(); ?>
    </body>
</html>