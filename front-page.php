<?php get_header(); ?>
        <main>
            <section class="mainvisual">
                <div class="main">
                    <img  class="gif" src="<?php echo get_stylesheet_directory_uri(); ?>/images/mainvisual.gif" alt="海と私">
                    <p>Welcome to my Portforio.</p>
                </div>
            </section>
            <section>
                <h2>ABOUT</h2>
                <div class="about">
                    <div class="about_img"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/IMG_5297.jpeg" alt="海と後ろ姿の私"></div>
                    <div class="about_text">
                        <h3>私のこと</h3>
                        <p>2000年生まれ、京都府出身。龍谷大学卒業後、約2年間事務職に従事した後、webデザインに挑戦することを決意した。</p>
                        <div class="button"><a href="<?php echo esc_url(home_url('/about')); ?>">more  →</a></div>
                    </div>
                </div>
            </section>
            <section>
                <h2 id="works">WORKS</h2>
                <div class="works1">
                    <h3>制作物</h3>
                    <div class="works2">
                        <div class="works_img"><a href="works/corporate.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/コーポレートサイト.png" alt="SocialTech"></a></div></a>
                        <div>
                            <p>Website</p>
                            <h4>コーポレートサイト(架空)</h4>
                        </div>    
                    </div>
                    <div class="works2">
                        <div class="works_img"><a href="works/barber.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/美容室サイト.png" alt="HairTech"></a></div>
                        <div>
                            <p>Website</p>
                            <h4>美容室サイト(架空)</h4>
                        </div>
                    </div>
                    <div class="works2">
                        <div class="works_img"><a href="works/original.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/オリジナルサイト.png" alt="京の路地酒場"></a></div>
                        <div>
                            <p>Website</p>
                            <h4>オリジナルサイト</h4>
                        </div>
                    </div>
                    <div class="works2">
                        <div class="works_img"><a href="works/portforio.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ポートフォリオ.png" alt="Portforio"></a></div>
                        <div>
                            <p>Website</p>
                            <h4>ポートフォリオサイト</h4>
                        </div>    
                    </div>
                    <div class="works2">
                        <div class="works_img"><a href="works/baner.html"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/baner.png" alt="baner"></a></div>
                        <div>
                            <p>Design</p>
                            <h4>Webデザインスクールのバナー(架空)</h4>
                        </div>
                        <div class="button"><a href="<?php echo esc_url(home_url('/about')); ?>">more  →</a></div>
                    </div>
                </div>
            </section>
        </main>
        <?php get_footer();
