<?php 
 get_header();
 // Template Name: Overseas Visitor Japan
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
                      <div class="overseas_information">
                        
                          <div class="overseas_content">
                            <h3>海外からのお客様へ</h3>
                            <h4>海外からのお客様へ</h4>
                            <p>オーストラリアでビジネスを行うにあたって様々な法律上の規定がございますが、外国人だけに適用する特別規定もございますのでビジネス取引をする際は最善の注意が必要となります。

当法律事務所では、これらの特別規定に関する長年の経験に磨かれた専門知識を生かし、クライアントのニーズにあった的確なサービスを提供させていただきます。

また、ご希望の方には日本語でアドバイス致します。お問い合わせの際にお申し付け下さい（別途費用）。</p>
                          </div>
                          <div class="overseas_content">
                            <h4>人身事故</h4>
                            <p>オーストラリアでは、観光ツアーの主催会社が、海外旅行者に対して特別の注意を払う義務があります。従って、オーストラリア訪問時に人身事故に巻き込まれ怪我を負った場合、人身損害賠償を請求することが可能かも知れません。

また、オーストラリアの損害賠償法では、海外からのお客様だけに適用する特別規定もございます。海外旅行者による損害賠償請求に関して豊富な経験と知識を持つ当法律事務所の弁護士は、クライアントが、適正かつ妥当な賠償額が得られるような損害賠償請求の手続きを行います。

ご相談のある方は、お問い合わせフォームに、ご相談内容をご記入下さればお見積もりをお出しいたします。この段階では費用は発生いたしませんのでご安心ください。</p>
                          </div>
                          <div class="overseas_content">
                            <h4>商法</h4>
                            <p>国が違えば法律も違ってくるものです。30年以上の実績のある当法律事務所では、異なる法律を理解したうえで法的アドバイスを致します。

オーストラリアにおける海外投資をお考えのお客様も当事務所へお問い合わせください。投資に関しての的確なアドバイスをさせて頂きます。

ご相談にあたり英語のご心配がある方は、当事務所専属の通訳・翻訳者がお手伝いさせていただきます。

ビジネスに関するお問い合わせは喜んで承ります。お問い合わせフォームをどうぞご利用下さい。</p>
                           
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
                      </div>
                    </div>
                    
                </div>
              </div>
            </div>
        </section>
<?php 
  get_footer();
?>