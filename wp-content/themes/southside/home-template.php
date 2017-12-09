<?php 
    get_header();
    // Template Name: Home Page
?>
<?php 
 $src = get_the_post_thumbnail_url(5,'full');
 ?>

<style type="text/css">
    .banner_section {
    background: url(<?php echo $src; ?>) no-repeat;
    background-size: cover;
    }
</style>

<section class="banner_section">
    
    <div class="container">
        <div class="celebrate_year">
            <img src="<?php echo get_template_directory_uri();?>/images/ex.png">
        </div>
        <div class="main_banner_section">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="banner_section_content banner_section_content_margin_buttom">
                        <h2><a href="<?php echo the_permalink('13'); ?>">Professional Negligence including medical negligence</a></h2>
                    </div>
                    
                </div>
                 <div class="col-md-4 col-sm-6">
                    <div class="banner_section_content banner_text_padding">
                        <h2><a href="<?php echo the_permalink('166'); ?>">Personal Injury</a></h2>
                    </div>
                </div>
                 <div class="col-md-4 col-sm-12">
                    <div class="banner_section_content banner_section_content_margin_buttom banner_text_padding">
                        <h2><a href="<?php echo the_permalink('168'); ?>">Deceased Estates & Wills</a></h2>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="banner_section_content banner_section_content_bottom banner_text_padding">
                        <h2><a href="<?php echo the_permalink('29'); ?>">Contesting Wills</a></h2>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="banner_section_content banner_section_content_bottom banner_text_padding">
                        <h2><a href="<?php echo the_permalink('173'); ?>">Civil Litigation including Debt Collection</a></h2>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="banner_section_content banner_section_content_bottom banner_text_padding">
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
            <div class="col-md-12 col-sm-12">
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
            <div class="col-md-8 col-sm-12">
                <div class="about_information">
                    <?php the_content(); ?>
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
            <div class="col-md-4 col-sm-12">
                <div class="right_sideber">
                    <div class="sideber_title common_title_color">
                        <h3>Quick Enquiry Form</h3>
                    </div>
                    <div class="right_sideber_body">
                        <p class="text_center">Free Enquiry, no obligation</p>
                            <h3 class="text_center">07 5598 3266</h3>
                        <?php echo do_shortcode( '[contact-form-7 id="193" title="Quick Contact"]'); ?>
                        
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>
           
<?php 
 get_footer();
 ?>
