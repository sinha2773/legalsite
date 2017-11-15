<?php 
    get_header();
    // Template Name: Home Page
?>
?>
<?php 
$i = isset($_SESSION['banner']) ? $_SESSION['banner'] : 1;
$_SESSION['banner'] = $i==1 ? 2 : 1;
?>
<style type="text/css">
    .banner_section {
    background: url(http://projects.sinhabd.com/southsidelegal/images/banner-<?php echo $i;?>.jpg) no-repeat;
    background-size: cover;
}
</style>
<section class="banner_section">
    
    <div class="container">
        <div class="celebrate_year">
            <img src="<?php echo get_template_directory_uri();?>/images/experience.png">
        </div>
        <div class="main_banner_section">
            <div class="row">
                <div class="col-md-4">
                    <div class="banner_section_content banner_section_content_margin_buttom">
                        <h2><a href="<?php echo the_permalink('13'); ?>">Professional Negligence</a></h2>
                    </div>
                    
                </div>
                 <div class="col-md-4">
                    <div class="banner_section_content">
                        <h2><a href="">Personal Injury</a></h2>
                    </div>
                </div>
                 <div class="col-md-4">
                    <div class="banner_section_content banner_section_content_margin_buttom">
                        <h2><a href="">Deceased Estates & Wills</a></h2>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="banner_section_content banner_section_content_bottom">
                        <h2><a href="<?php echo the_permalink('144'); ?>">Civil Litigation including Debt Recovery</a></h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="banner_section_content banner_section_content_bottom">
                        <h2><a href="<?php echo the_permalink('103'); ?>">Tourism Law</a></h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="about_section">
    <div class="container">
        
        <div class="row">
            <div class="col-md-12">
                <?php 
                    $home_link = new WP_Query(array(
                        'post_type' => 'page',
                        'posts_per_page' => 1,
                        'page_id' =>5
                    ));
                ?>
                <?php 
                    if($home_link->have_posts()): 
                    while($home_link->have_posts()):
                    $home_link->the_post();  
                ?>
                <div class="clear_advice common_title_color">
                    <h3><?php echo get_post_meta(get_the_ID(),'promote',true) ?></h3>
                </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="about_information">
                    <?php the_content(); ?>
<!-- <div class="wellcome_text common_title_color">
<h3>Welcome to Southside Legal</h3>
<p>Southside Legal Gold Coast is a law firm committed to helping you.</p>
</div>
<div class="how_can_help_text common_title_color">
<h3>How can we help you ?</h3>
<p>We will provide you with prompt advice and service. Most of the times you contact a lawyer you either have a problem or your rights and interests need protecting. We understand this and will ensure your dealings with us are helpful to you and provide you with a feeling of security. We strive to make you feel “looked after”. You will receive advice that is down to earth and realistic. We can assist you in numerous areas of law.<br><br>
If you have a compensation claim, please click on the button in the top right hand corner of this page. For a better explanation of each area of law we can assist you with, see the areas of law shown on the left hand side. Click on the topic which suits your query.<br><br>
We have experienced lawyers who understand the system and who will be able to guide you and protect you. We work with top level barristers in court matters and will ensure you achieve the best outcome for your situation. Your rights and interests are important to us and we will care for you.
</p>
</div> -->
                    <div class="audio_information">
                    <div class="audio_player">
                        <h2>Principal of Southside Legal talks to ABC following taxi driver case</h2>
                        <div class="audioPlayer">
                        <audio controls="">
                          <source src="http://southsidelegal.com.au/wp-content/themes/southsidelegal/audio/mk-taxi-16-5-11.mp3" type="audio/mp3">
                        Your browser does not support the audio element.
                        </audio>
                        </div>
                        <a href="http://southsidelegal.com.au/download.php?f=mk-taxi-16-5-11.mp3&amp;mp=yes" class="audfile audfile_blg">Click here to download the audio file</a>
                        <a target="_blank" href="http://blogs.abc.net.au/queensland/2011/05/compensation-for-widower-after-husbands-taxi-trouble.html" class="audfile">Click here to view ABC Blog</a>
                    </div>
                </div>
                </div>
                
               
            </div>
            <div class="col-md-4">
                <div class="right_sideber">
                    <div class="sideber_title common_title_color">
                        <h3>Quick Enquiry Form</h3>
                    </div>
                    <div class="right_sideber_body">
                        <form>
                            <p class="text_center">Free Enquiry, no obligation</p>
                            <h3 class="text_center">07 5598 3266</h3>
                            <input type="text" class="form-control" name="" placeholder="Name">
                            <input type="email" class="form-control" name="" placeholder="E-mail">
                            <input type="text" class="form-control" name="" placeholder="Phone">
                            <textarea class="form-control" rows="4" placeholder="Details"></textarea>
                            <!-- <label class="control-label">Security Code</label>
                            <input type="text" class="form-control" name="" placeholder=""> -->
                            <h3 class="will_go_h3">We will get back to you quickly</h3>
                            <div class="submit_button">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>
           
<?php 
 get_footer();
 ?>
