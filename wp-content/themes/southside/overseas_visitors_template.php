<?php 
 get_header();
 // Template Name: Overseas Visitor Template
?>
    <?php 
        $p = new WP_Query(array(
            'post_type' => 'page',
            'posts_per_page' => 1,
            'page_id' =>33
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
                      <?php the_content(); ?>
<!-- <div class="overseas_visitor_all_content">                    
<div class="overseas_information">
<div class="overseas_content">
<h3>Overseas Visitors 海外旅客 海外からのお客様へ</h3>
<p>If you are doing business in Australia or have injured yourself while you have been in Australia, we will be able to help you.<br/><br/> We understand you need special assistance when you have Australian matters. Special rules can apply to overseas visitors.<br/><br/> We have access to translators and interpreters so even if you cannot speak English we can help you.<br/><br/> Whatever the nature of your accident or injury, early specialist legal advice is absolutely vital.<br/><br/>Please call us now on 07 5598 3266 or complete the Quick Enquiry on the right hand side of this page and we will be call you or email you back to provide advice and assistance.<br/><br/> Please do not delay, contact us today.<br/><br/> 當海外人士有意在澳洲從事商業﹐或是發生意外受傷﹐我們都能為你提供相關的幫忙。我們了解海外旅客在澳洲遇到以上情況時﹐澳洲專用的條例對外地人會造成不少困難﹐所以我們會透過翻譯員為您提供特殊援助以解決您遇到的難題﹐不必擔心言語溝通問題。<br/><br/>商用ビジネス取引から損害賠償請求まで幅広くオーストラリアでの法的手続きを、お客様の立場に立って親身に対応させて頂きます。オーストラリアでは外国人だけに適用する特別規定がありますが、特別規定に関する私どもの専門知識を生かし、お客様のニーズにあった的確なサービスを提供させていただきます。<br/><br/>ご希望の方には日本語での対応も致します。お問い合わせの際にお申し付け下さい。</p>
</div>
<div class="overseas_content">
<h3>Injured? 受傷了? 人身事故</h3>
<p>If you suffered personal injury while you were in Australia you may have a compensation claim you can pursue. Special rules sometimes apply to overseas visitors. Tourist operators and tour organisers need to take special care. We have acted for injured overseas visitors before. We care about you.<br/><br/> Please send in a free no obligation enquiry and we will get back to you quickly to advise you if we can assist you. Remember there is no cost to send in the initial enquiry.<br/><br/> We have a special interest in injured visitors from overseas. We are part of a group that advises on special needs for overseas visitors and understand it is difficult for you to understand a completely different system like Australia, Remember, we are here to help you.<br/><br/> 當不幸意外受傷而需要追溯賠償時﹐澳洲當地對海外旅客的規條有所不同﹐我們可以為您提供在法律咨詢上或相關的援助﹐我們擁有處理過同樣的意外賠償經驗﹐了解不同的澳洲辦事系統會讓您帶來許多困難。我們的顧問為海外旅客提供特殊幫助﹐只要您需要幫忙﹐請把您的情況發到聯繫電郵地址﹐我們會在短期內盡快給您回覆。請不要擔心﹐您的咨詢郵件是不用收費的。<br/><br/> オーストラリア滞在中に人身事故に巻き込まれた場合、人身損害賠償を請求することが可能ですが、海外からのお客様に関しては特別規定が適用される場合もあります。また、ツアーオペレーター・ツアーオーガナイザーは、海外旅行者に対して特別の注意を払う義務があります。当事務所には、海外旅行者による損害賠償請求に豊富な経験を持つ弁護士がいます。ご相談のある方はお問い合わせフォームにご相談内容をご記入下さればお見積もりをお出しいたします。この段階では費用は発生いたしませんのでご安心ください。<br/><br/> 私どもは、海外旅行者も含め外国から起こしの方のニーズを理解しております。不慣れなオーストラリアの法律をお客様に解りやすいようご説明させていただき、適切なアドバイスを提供いたします。</p>
</div>
<div class="overseas_content">
<h3>Business 商業活動 商法</h3>
<p>If you are doing business in Australia, we can assist you. We understand it is difficult for you to understand Australia’s different rules, and we will guide you through the process. We have experienced lawyers who have been assisting both local and overseas visitors for in excess of thirty years.<br/><br/> We have access to translators and interpreters so even if you cannot speak English we can help you.<br/><br/> We can guide you on the Foreign Investment Review Board guidelines and we enjoy helping you understand what you can and cannot do in this country. We are here to help you and you can feel free to ask whatever question you need answered.<br/><br/> You are welcome to send in a free no obligation enquiry on the form on this web page.<br/><br/> 若您在澳洲從事商業活動﹐我們能協助你以達到成功之事。同樣﹐我們了解到澳洲的條例對您也許會造成成功之路的絆腳石﹐在此﹐我們能依正確的程序為您提供咨詢與及引導。過去的三十年裡﹐我們有專業的律師為澳洲本地與海外旅客提供相關服務﹐儘管您不會英語﹐在通過我們的翻譯團隊幫助之下﹐也不用擔心言語不通的障礙。我們專業的指導將能令您清楚地了解澳洲的外國投資審核委員會(Foreign Investment Review Board)訂下有關的能與不能的規條﹐以踏上成功之路。若您有任何查詢或疑問﹐我們歡迎您隨時把您有關的查詢填上網頁上附設的表格﹐我們會盡力為您提供協助。<br/><br/>我們有出色的翻譯團隊.<br/><br/> 国が違えば法律も違ってくるものです。30年以上の実績のある当法律事務所では、異なる法律を理解したうえで法的アドバイスを致します。<br/><br/> ご相談にあたり英語のご心配がある方は、当事務所専属の通訳・翻訳者がお手伝いさせていただきます。オーストラリアにおける海外投資をお考えのお客様も当事務所へお問い合わせください。投資に関しての的確なアドバイスをさせて頂きます。<br/><br/>ビジネスに関するお問い合わせは喜んで承ります。お問い合わせフォームをどうぞご利用下さい。</p>
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
</div>  --> 
                      </div>
                    </div>
                   
                </div>
              </div>
            </div>
        </section>
<?php 
  get_footer();
?>