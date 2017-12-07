<div class="right_sideber">
  <div class="right_sideber_buttons">
    <div class="sidebar_area_of_practice">
      <?php if(!is_page(array('what-we-do'))): ?>
      <!-- <div class="area_title">
        <h3>Areas of Practice</h3>
      </div> -->
      <div>
        <div class="card">
          <?php if(is_page(array('professional-negligence','medical-practitioners','solicitors','other-professions'))): ?>
          <div class="card-header">
            <a href="<?php echo get_permalink('13'); ?>" class="personal_injury">Professional Negligence including medical negligence</a>
            <div>
              <div>
                <ul>
                  <li><a href="<?php echo get_permalink('257'); ?>">Medical practitioners</a></li>
                  <li><a href="<?php echo get_permalink('259'); ?>">Solicitors</a></li>
                  <li><a href="<?php echo get_permalink('261'); ?>">Other professions</a></li>
                </ul>
              </div>
            </div>
          </div>
          <?php endif; ?>
        </div>
        <div class="card">
          <?php if(is_page(array('personal-injury','motor-vehicle-accidents','work-injuries','public-liability-claims','disability-insurance-claims'))){ ?>
          <div class="card-header">
            <a href="<?php echo get_permalink('166'); ?>" class="personal_injury">Personal Injury</a>
            <div>
              <div>
                <ul>
                  <li><a href="<?php echo get_permalink('197'); ?>">Motor Vehicle Accidents</a></li>
                  <li><a href="<?php echo get_permalink('199'); ?>">Work Injuries</a></li>
                  <li><a href="<?php echo get_permalink('201'); ?>">Public Liability Claims</a></li>
                  <li><a href="<?php echo get_permalink('203'); ?>">Disability Insurance Claims</a></li>
                </ul>
              </div>
            </div>
          </div>
          <?php } ?>
        </div>
        <div class="card">
          <?php if(is_page(array('deceased-estates-wills','wills-preparation','contesting-wills','deceased -estate-administration'))): ?>
          <div class="card-header">
            <a href="<?php echo get_permalink('168'); ?>" class="personal_injury">Deceased Estates & Wills</a>
            <div>
              <div>
                <ul>
                  <li><a href="<?php echo get_permalink('27'); ?>">Wills Preparation</a></li>
                  <li><a href="<?php echo get_permalink('29'); ?>">Contesting Wills</a></li>
                  <li><a href="<?php echo get_permalink('31'); ?>">Deceased Estate Administration</a></li>
                </ul>
              </div>
            </div>
          </div>
        <?php endif; ?>
        </div>
        <div class="card">
          <?php if(is_page(array('civil-litigation-including-debt-collection','debt-collection','insurance-claims','contractual-disputes','consumer-protection','tpd-income-protection'))): ?>
          <div class="card-header">
            <a href="<?php echo get_permalink('173'); ?>" class="personal_injury">Civil Litigation including Debt Collection</a>
            <div>
              <div>
                <ul>
                  <li><a href="<?php echo get_permalink('17'); ?>">Debt Collection</a></li>
                  <li><a href="<?php echo get_permalink('19'); ?>">Insurance Claims</a></li>
                  <li><a href="<?php echo get_permalink('21'); ?>">Contractual Disputes</a></li>
                  <li><a href="<?php echo get_permalink('266'); ?>">Consumer Protection</a></li>
                  <li><a href="<?php echo get_permalink('268'); ?>">TPD & Income Protection</a></li>
                </ul>
              </div>
            </div>
          </div>
        <?php endif; ?>
        </div>
        <div class="card">
          <?php if(is_page(array('tourism'))): ?>
          <div class="card-header" role="tab" id="headingfive">
            <h5> 
              <a href="<?php echo get_permalink('103'); ?>">Tourism Law</a>
            </h5>
          </div>
          <?php endif; ?>
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
    <?php if(!is_page(array('personal-injury','motor-vehicle-accidents','work-injuries','public-liability-claims','disability-insurance-claims'))){ ?>
    <div class="sidebar_oversase_images">
      <img src="<?php echo get_template_directory_uri();?>/images/visitor_pic.jpg">
      
    </div>
    <?php } ?>
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