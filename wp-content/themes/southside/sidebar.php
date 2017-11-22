<div class="right_sideber">
  <div class="right_sideber_buttons">
    <div class="sidebar_area_of_practice">
      <?php if(!is_page(array('what-we-do'))): ?>
      <div class="area_title">
        <h3>Areas of Practice</h3>
      </div>
      
      <div id="accordion" role="tablist" aria-multiselectable="true">
        <div class="card">
          <div class="card-header" role="tab" id="headingOne">
            <h5> 
              <a href="<?php echo get_permalink('13'); ?>">Professional Negligence</a> 
            </h5>             
          </div>
        </div>
        <div class="card">
          <div class="card-header" role="tab" id="headingTwo">
            <h5 class="mb-0" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <i class="fa fa-plus" aria-hidden="true"></i> <i class="fa fa-minus" aria-hidden="true" style="display: none;"></i>
               <a href="<?php echo get_permalink('180'); ?>">Personal Injury</a>
            </h5>
            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
              <div class="card-block">
                <ul>
                  <li><a href="<?php echo get_permalink('216'); ?>">Motor Vehicle Accidents</a></li>
                  <li><a href="<?php echo get_permalink('218'); ?>">Work Injuries</a></li>
                  <li><a href="<?php echo get_permalink('220'); ?>">Public Liability Claims</a></li>
                  <li><a href="<?php echo get_permalink('222'); ?>">Disability Insurance Claims</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" role="tab" id="headingThree">
            <h5 class="mb-0" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <i class="fa fa-plus" aria-hidden="true"></i> <i class="fa fa-minus" aria-hidden="true" style="display: none;"></i>
               <a href="<?php echo get_permalink('180'); ?>">Deceased Estates & Wills</a>
            </h5>
            <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree">
              <div class="card-block">
                <ul>
                  <li><a href="<?php echo get_permalink('17'); ?>">Wills Preparation</a></li>
                  <li><a href="<?php echo get_permalink('19'); ?>">Contesting Wills</a></li>
                  <li><a href="<?php echo get_permalink('21'); ?>">Deceased Estate Administration</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" role="tab" id="headingfour">
            <h5 class="mb-0" class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                <i class="fa fa-plus" aria-hidden="true"></i> <i class="fa fa-minus" aria-hidden="true" style="display: none;"></i>
               <a href="<?php echo get_permalink('180'); ?>">Civil Litigation including Debt Collection</a>
            </h5>
            <div id="collapsefour" class="collapse" role="tabpanel" aria-labelledby="headingfour">
              <div class="card-block">
                <ul>
                  <li><a href="<?php echo get_permalink('17'); ?>">Debt Collection</a></li>
                  <li><a href="<?php echo get_permalink('19'); ?>">Insurance Claims</a></li>
                  <li><a href="<?php echo get_permalink('21'); ?>">Contractual Disputes</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        
        <div class="card">
          <div class="card-header" role="tab" id="headingfive">
            <h5> 
              <a href="<?php echo get_permalink('103'); ?>">Tourism Law</a>
            </h5>
            
          </div>
        </div>
      </div>
      <?php endif; ?>
    </div>
    <?php //if(is_page(array('compensation-law'))): ?>
    <div class="home_and_hospital common_title_color">
      <h3>HOME AND HOSPITAL<br/> VISITS ARE MADE</h3>
    </div>
   <!--  <?php //endif; ?> -->
    <div class="you_will_be">
      <h3>YOU WILL BE FULLY SUPPORTED</h3>
    </div>
    <!-- <div class="call_center_images">
      <img src="<?php //echo get_template_directory_uri();?>/images/philippines-Call-Center.png">
    </div> -->
    <div class="no_win_to_fee common_title_color">
      <h3>NO WIN NO FEE*</h3>
    </div>
    <div class="sidebar_oversase_images_text">
        <p>*Only applicable in some cases. Subject to terms and conditions.Contact us for more information.</p>
    </div>
    <?php if(!is_page(array('our-people'))): ?>
    <div class="sidebar_overseas_title common_title_color">
      <h3><a href="<?php echo get_permalink('33'); ?>">Overseas Visitors</a></h3>
    </div>
    <div class="sidebar_oversase_images">
      <img src="<?php echo get_template_directory_uri();?>/images/visitor_pic.jpg">
      
    </div>
    <?php endif; ?>
    <div class="textimonial_title common_title_color">
      <h3>Testimonials</h3>
    </div>
    <div class="testimonial_body">
      <div id="imageCarousel" class="carousel slide" data-wrap="true" data-pause="false" data-interval="3000">
        <div class="carousel-inner">
          <div class="item active testimonial_slider">
            <p>We engaged Warwick Chesters of Southside Legal Gold Coast with a complex professional negligence claim against another firm of lawyers.
            </p>
            <h4>J Wilson Owl Projects Pty Ltd</h4>
          </div>
          <div class="item testimonial_slider">
            <p>We are pleased to attest that Warwick Chesters very successfully pursued a compensation claim with great diligence, on behalf of myself and three grandchildren.</p>
            <h4>J M & Family</h4>
          </div>
          <div class="item testimonial_slider">
            <p>Recently Warwick handled a compensation claim for me. I was very happy with the way my claim was handled by him and was pleased that he was able to. </p>
            <h4>C Morris</h4>
          </div>
          <div class="item testimonial_slider">
            <p>It is with great pleasure and sincerity that I wish you every success in your new venture. I offer my wholehearted and high recommendation to your future.</p>
            <h4>R Kalnins</h4>
          </div>
        </div>
      </div>
      
    </div>
    
  </div>
</div>