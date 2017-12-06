<?php 
 get_header();
 // Template Name: Overseas Visitor China
?>
    <?php 
        $p = new WP_Query(array(
            'post_type' => 'page',
            'posts_per_page' => 1,
            'page_id' =>147
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
        <section class="about_section">
            <div class="container">
              <div class="main_overseas_visitor">
                <div class="row">
                  <div class="col-md-4 col-sm-12">
                        <?php get_sidebar(); ?>
                    </div>
                    <div class="col-md-8 col-sm-12">
<!-- <div class="overseas_visitor_all_content">                    
<div class="overseas_information">
<div class="overseas_content">
<h3>海外旅客</h3>
<p>當海外人士有意在澳洲從事商業﹐或是發生意外受傷﹐我們都能為你提供相關的幫忙。我們了解海外旅客在澳洲遇到以上情況時﹐澳洲專用的條例對外地人會造成不少困難﹐所以我們會透過翻譯員為您提供特殊援助以解決您遇到的難題﹐不必擔心言語溝通問題。</p>
</div>
<div class="overseas_content">
<h3>受傷了?</h3>
<p>當不幸意外受傷而需要追溯賠償時﹐澳洲當地對海外旅客的規條有所不同﹐我們可以為您提供在法律咨詢上或相關的援助﹐我們擁有處理過同樣的意外賠償經驗﹐了 解不同的澳洲辦事系統會讓您帶來許多困難。我們的顧問為海外旅客提供特殊幫助﹐只要您需要幫忙﹐請把您的情況發到聯繫電郵地址﹐我們會在短期內盡快給您回 覆。請不要擔心﹐您的咨詢郵件是不用收費的。</p>
</div>
<div class="overseas_content">
<h3>商業活動</h3>
<p>若您在澳洲從事商業活動﹐我們能協助你以達到成功之事。同樣﹐我們了解到澳洲的條例對您也許會造成成功之路的絆腳石﹐在此﹐我們能依正確的程序為您提供咨 詢與及引導。過去的三十年裡﹐我們有專業的律師為澳洲本地與海外旅客提供相關服務﹐儘管您不會英語﹐在通過我們的翻譯團隊幫助之下﹐也不用擔心言語不通的 障礙。我們專業的指導將能令您清楚地了解澳洲的外國投資審核委員會(Foreign Investment Review Board)訂下有關的能與不能的規條﹐以踏上成功之路。若您有任何查詢或疑問﹐我們歡迎您隨時把您有關的查詢填上網頁上附設的表格﹐我們會盡力為您提供 協助。</p>
<h3>e我們有出色的翻譯團隊</h3>
</div>
</div> 
<div class="overseas_images_div">
<div class="overseas_images">
<img src="<?php echo get_template_directory_uri();?>/images/0736-852046379.jpg">
</div>
<div class="overseas_images">
<img src="<?php echo get_template_directory_uri();?>/images/1351223428.jpg">
</div>
<div class="overseas_images">
<img src="<?php echo get_template_directory_uri();?>/images/1350533474.jpg">
</div>
<div class="overseas_images">
<img src="<?php echo get_template_directory_uri();?>/images/1351571869.jpg">
</div>
<div class="overseas_images">
<img src="<?php echo get_template_directory_uri();?>/images/1351571877.jpg">
</div>
</div>
</div>   -->
                      </div>
                    </div>
                    
                </div>
              </div>
            </div>
        </section>
<?php 
  get_footer();
?>