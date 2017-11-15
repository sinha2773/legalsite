<?php 
 get_header();
 // Template Name: Contact Us
?>
        <section class="common_banner_section">
            <div class="common_banner_images">
              <img src="<?php echo get_template_directory_uri();?>/images/judge-header.png">
            </div>
        </section>         
        <section class="contact_page">
          <div class="container">
            <div class="contact_page_information">
            <div class="row">
              <div class="col-xs-12 col-sm-8 col-md-8">
                <div class="contactus_bottom_information">
                  <form class="form-horizontal" action="#" id="myForm" role="form" data-toggle="validator" method="post" accept-charset="utf-8">
                    <div class="row">
                      <div class="col-xs-12 col-sm-6 col-md-6 contact_left_div">
                        <div class="form-group model">
                          <label for="firstname" class=" label_bottom control-label">First name</label>
                          <div class="">
                            <input type="text" class=" form-control" name="firstname" id="firstname" placeholder="" >
                          </div>
                         
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-6 col-md-6 contact_right_div">
                          <div class="form-group">
                            <label for="lastname" class=" label_bottom control-label">Last name</label>
                            <div class="">
                              <input type="text" class="form-control" name="lastname" id="lastname" placeholder="" >
                            </div>
                            
                          </div>
                      </div>
                    </div> 
                    <div class="row">
                      <div class="col-xs-12 col-sm-6 col-md-6 contact_left_div">
                          <div class="form-group">
                        <label for="firstname" class=" label_bottom control-label">Email Address</label>
                        <div class="">
                          <input type="email" class="form-control" name="email" id="email" placeholder="" >
                        </div>
                        
                        </div>
                      </div>
                      <div class="col-xs-12 col-sm-6 col-md-6 contact_right_div">
                        <div class="form-group">
                          <label for="lastname" class=" label_bottom control-label">Phone No</label>
                          <div class="">
                            <input type="text" class="form-control" name="phoneno" id="phoneno" placeholder="" >
                          </div>
                          
                        </div>
                      </div>
                    </div> 
                    <div class="form-group contact_right_div">
                      <label for="lastname" class=" label_bottom control-label">Subject</label>
                      <div class="">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="" >
                      </div>
                      
                    </div>
                    <div class="form-group contact_right_div">
                      <label for="lastname" class=" label_bottom control-label">Message</label>
                      <div class="">
                        <textarea class="form-control" rows="7"></textarea>
                      </div>
                      
                    </div>
                    <div class="form-group">
                      <div class="contact_button_div">
                        <button type="submit" class=" contact_button">Send Message</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4">
                <div class="main_left_contact_info">
                  <div class="contactus_information">
                    <h2>Contact Us</h2>
                    <strong>Southside Legal</strong>
                    <p>First Floor<br/>427 Golden Four Dve<br/>PO Box 150,Tugun, 4224<br/> Gold Coast, QLD<br/> Queensland<br/> Australia </p>
                    <p>Tel: 07 5598 3266</p>
                    <p>Int'l: +617 5598 3266</p>
                    <p>Fax: 07 5534 7822</p>
                    <p>email :<a href="mailto:reception@southsidelegal.com.au">reception@southsidelegal.com.au</a> </p>
                    <p><a href="http://www.southsidelegal.com.au/">www.southsidelegal.com.au</a></p>
                  </div>
                  <div class="contact_page_socialicon">
                    <a href="#"><i class="fa fa-linkedin"></i></a>
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
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