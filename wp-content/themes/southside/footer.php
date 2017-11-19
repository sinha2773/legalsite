 <footer class="footer_top_section">
            <div class="footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-sm-6 socila_padding_left">
                            <div class="social_icon social_facebook">
                                <a href="<?php echo get_option('facebook_url');?>">
                                    <i class="fa fa-facebook" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 socila_padding_both">
                            <div class="social_icon social_twtter">
                                <a href="<?php echo get_option('twitter_url');?>">
                                    <i class="fa fa-twitter" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 socila_padding_both">
                            <div class="social_icon social_google_plus">
                                <a href="<?php echo get_option('google_plus_url');?>">
                                    <i class="fa fa-google-plus" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 socila_padding_both">
                            <div class="social_icon social_dribbble">
                                <a href="<?php echo get_option('dribbble_url');?>">
                                    <i class="fa fa-dribbble" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 socila_padding_both">
                            <div class="social_icon social_linkedin">
                                <a href="<?php echo get_option('linkedin_url');?>">
                                    <i class="fa fa-linkedin" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-6 social_padding_right">
                            <div class="social_icon social_rss">
                                <a href="">
                                    <i class="fa fa-rss" aria-hidden="true"></i>
                                </a>
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
<!-- <div class="col-md-3 col-sm-6">
<div class="footer_information">
<img src="<?php //echo get_template_directory_uri();?>/images/footer_logo.png">
</div>
<div class="footer_short_discription">
<p>Southside Legal Gold Coast is a law firm committed to helping you. We will provide you with prompt advice and service. Most of the times you contact a lawyer you either have a problem or your rights and interests need protecting. We understand this and will ensure your dealings with us are helpful to you and provide you with a feeling of security. We strive to make you feel “looked after”. You will receive advice that is down to earth and realistic. We can assist you in numerous areas of law.
</p>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="footer_information">
<h3>Address</h3>
<ul>
<li><i class="fa fa-map-marker" aria-hidden="true"></i>Level 1, 427 Golden Four Dve</li>
<li>PO Box 150, Tugun, 4224</li>
<li>Gold Coast, QLD</li>
<li>Queensland, Australia</li>            
</ul>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="footer_information">
<h3>Contact</h3>
<ul>
<li><i class="fa fa-phone" aria-hidden="true"></i>Tel: 07 5598 3266</li>
<li><i class="fa fa-headphones" aria-hidden="true"></i>Intl: +617 5598 3266</li>
<li><i class="fa fa-fax" aria-hidden="true"></i>Fax: 07 5534 7822</li>
<li><i class="fa fa-envelope-o" aria-hidden="true"></i>E-mail: reception@southsidelegal.com.au</li>
<li><i class="fa fa-laptop" aria-hidden="true"></i><a href="http://Web: www.southsidelegal.com.au/" target="_blank">Web: www.southsidelegal.com.au</a></li>
<li></li>            
</ul>
</div>
</div>
<div class="col-md-3 col-sm-6">
<div class="footer_information">
<h3>Links</h3>
<ul>
<li><a href="http://www.legislation.qld.gov.au/OQPChome.htm" target="_blank">Queensland legislation</a></li>
<li><a href="http://www.comlaw.gov.au/" target="_blank">Commonwealth legislation</a></li>
<li><a href="http://www.qls.com.au/Home" target="_blank">Queensland Law Society</a></li>
<li><a href="http://www.workcoverqld.com.au/" target="_blank">Workcover Queensland</a></li>
<li><a href="http://www.workcover.nsw.gov.au/aboutus/workerscompensation" target="_blank">Workcover Authority – New South Wales</a></li>
<li><a href="http://www.maic.qld.gov.au/" target="_blank">Motor Accident Insurance Commission – Queensland</a></li>
<li><a href="http://www.maa.nsw.gov.au/" target="_blank">Motor Accident Insurance Commission – New South Wales</a></li>
<li><a href="htttp://www.oho.qld.gov.au" target="_blank">Office of the Health Ombudsman</a></li>    
</ul>
</div>
</div> -->
                    </div>
                </div>
                <div class="copyright">
                    <p>Southside Legal Gold Coast © 2015 All Right Reserved.</p>
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
                <?php echo do_shortcode( '[contact-form-7 id="206" title="Quick Contact"]'); ?>
              <!-- <form>                
                <input type="text" class="form-control" name="" placeholder="Name">
                <input type="email" class="form-control" name="" placeholder="E-mail">
                <input type="text" class="form-control" name="" placeholder="Phone">
                <textarea class="form-control" rows="4" placeholder="Details"></textarea>
                <label class="control-label">Security Code</label>
                <input type="text" class="form-control" name="" placeholder="">
                <h3 class="will_go_h3">We will get back to you quickly</h3>
                <div class="sideber_submit_button">
                    <button type="submit" class="">Submit</button>
                </div>
              </form> -->
            </div>
          </div>
          
        </div>
        <div class="sideber_contact_form_icon quote_form_button"  data-toggle="tooltip" title="Click here to Quick Contact">
            <img src="<?php echo get_template_directory_uri();?>/images/contact.png">
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