 <!-- Main Footer / Style Two-->
 <footer class="main-footer footer-style-two footer-lang <?php echo esc_attr( mbio_current_language() ); ?>">

<!--Widgets Section-->
<div class="widgets-section">
    <div class="auto-container">
        <div class="row clearfix">
            
            <!--Column-->
            <div class="footer-column col-lg-4 col-md-5 col-sm-12">
                <div class="footer-widget about-widget">
                    <div class="footer-logo-box">
                        <a href="<?php echo esc_url( mbio_home_link() ); ?>" title="<?php echo esc_attr( mbio_t( 'Институт микробиологии НАН Беларуси' ) ); ?>">
                                    <?php 
                                        $logo_img = '';
                                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                                        
                                        if( $custom_logo_id ){
                                            $logo_img = wp_get_attachment_image( $custom_logo_id, 'full', false, array(
                                            'class'    => 'sticky-logo',
                                            'alt'    => mbio_t( 'Институт микробиологии НАН Беларуси' ),
                                            'title'    => mbio_t( 'Институт микробиологии НАН Беларуси' ),
                                            ) );
                                        }
                                        
                                        echo $logo_img;
                                    ?>
                                </a>
                    </div>
                    <div class="about-text">
                        <?php the_field('requisites-1', mbio_translated_post_id( 6 ) ); ?>
                    </div>
                    <div class="about-text">
                    <?php the_field('requisites-2', mbio_translated_post_id( 6 ) ); ?>
                    </div>

                    <div class="footer-social">
                        <ul class="footer-social-two my-footer-social-two clearfix">
                            <li class="color-icons"><a href="https://t.me/inmi_by"><img class="green-svg" src="https://mbio.bas-net.by/wp-content/uploads/2025/03/telegram-brands.svg" width="20" height="20" alt="" class="img"></a></li>
                            <li class="color-icons"><a href="https://invite.viber.com/?g2=AQBraLupPo8rSk2YPoN%2Bzo70k8QbxSBkOzKJG%2BMsZDnRDZS2JDAB2O%2FKSmRkYEkg&lang=ru" target="_blank"><img class="green-svg" src="https://mbio.bas-net.by/wp-content/uploads/2025/03/viber-brands.svg" width="20" height="20" alt="" class="img"></a></li>
                            <li class="color-icons"><a href="http://youtube.com/@inmi_bioproduct" target="_blank"><img class="green-svg" src="https://mbio.bas-net.by/wp-content/uploads/2025/03/youtube-brands.svg" width="20" height="20" alt="" class="img"></a></li>
                            <li class="color-icons"><a href="https://www.tiktok.com/@inmi.by" target="_blank"><img class="green-svg" src="https://mbio.bas-net.by/wp-content/uploads/2025/03/tiktok-brands.svg" width="20" height="20" alt="" class="img"></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <!--Column-->
            <div class="big-column col-lg-5 col-md-7 col-sm-12">
                <div class="row clearfix">
                    <!--Column-->
                    <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                        <div class="footer-widget links-widget">
                            <div class="widget-title">
                                <!-- <h3>Quick Links</h3> -->
                            </div>
                            <div class="widget-content">
                                <ul>
                                    <li><a href="<?php echo esc_url( mbio_home_link() ); ?>"><?php echo esc_html( mbio_t( 'Главная' ) ); ?></a></li>
                                    <li><a target="_blank" href="https://inmi.by"><?php echo esc_html( mbio_t( 'Продукция' ) ); ?></a></li>
                                    <li><a href="<?php echo mbio_page_link(281); ?>"><?php echo esc_html( mbio_t( 'Структура института' ) ); ?></a></li>
                                    <li><a href="https://mbio.bas-net.by/bim/"><?php echo esc_html( mbio_t( 'Коллекция микроорганизмов' ) ); ?></a></li>
                                    <li><a href="<?php echo mbio_page_link(574); ?>"><?php echo esc_html( mbio_t( 'Конференции' ) ); ?></a></li>
                                    <li><a href="<?php echo mbio_page_link(457); ?>"><?php echo esc_html( mbio_t( 'Совет молодых ученых' ) ); ?></a></li>
                                    <li><a href="<?php echo mbio_page_link(459); ?>"><?php echo esc_html( mbio_t( 'Первичная профсоюзная организация Института' ) ); ?></a></li>
                                    <li><a href="<?php echo mbio_page_link(268); ?>"><?php echo esc_html( mbio_t( 'Контакты' ) ); ?></a></li>
                                    <li><a href="<?php echo mbio_page_link(894); ?>"><?php echo esc_html( mbio_t( 'Обращения' ) ); ?></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!--Column-->
                    <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                        <div class="footer-widget links-widget">
                            <div class="widget-title">
                                <!-- <h3>Our Services</h3> -->
                            </div>
                            <div class="widget-content">
                                <ul>
                                    <li><a href="<?php echo mbio_page_link(277) ?>"><?php echo esc_html( mbio_t( 'История Института' ) ); ?></a></li>
                                    <li><a href="<?php echo mbio_page_link(342); ?>"><?php echo esc_html( mbio_t( 'Аспирантура и докторантура' ) ); ?></a></li>
                                    <li><a href="<?php echo mbio_page_link(354); ?>"><?php echo esc_html( mbio_t( 'Совет по защите диссертаций' ) ); ?></a></li>
                                    <li><a href="<?php echo mbio_page_link(283); ?>"><?php echo esc_html( mbio_t( 'Книги и монографии' ) ); ?></a></li>
                                    <li><a href="<?php echo mbio_page_link(286); ?>"><?php echo esc_html( mbio_t( 'Сборники научных трудов' ) ); ?></a></li>
                                    <li><a href="<?php echo mbio_page_link(344); ?>"><?php echo esc_html( mbio_t( 'Объекты интеллектуальной собственности' ) ); ?></a></li>
                                    <li><a href="<?php echo mbio_page_link(452); ?>"><?php echo esc_html( mbio_t( 'Общественное объединение Микробиологическое общество' ) ); ?></a></li>
                                    
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Column-->
            <div class="footer-column col-lg-3 col-md-12 col-sm-12">
                <div class="footer-widget gallery-widget">
                    <div class="widget-title">
                        <h3><?php echo esc_html( mbio_t( 'Контакты' ) ); ?></h3>
                    </div>
                    <div class="info">
                        <!--Info Block-->
                        <div class="info-block">
                            <div class="icon-box">
                                <span class="icon">
                                    <img src="images/icons/icon-message-1.png" alt="">
                                </span>
                            </div>
                            <strong><?php echo esc_html( mbio_t( 'Адрес' ) ); ?></strong>
                            <div class="info-text"><?php the_field('address-short', mbio_translated_post_id( 6 ) ); ?></div>
                        </div>
                        <!--Info Block-->
                        <div class="info-block">
                            <div class="icon-box">
                                <span class="icon">
                                    <img src="images/icons/icon-call-1.png" alt="">
                                </span>
                            </div>
                            <strong><?php echo esc_html( mbio_t( 'Телефон' ) ); ?></strong>
                            <div class="info-text">
                            <a href="tel:<?php the_field('phone-number', mbio_translated_post_id( 6 ) ); ?> "><?php the_field('phone_visual', mbio_translated_post_id( 6 ) ); ?> </a>
                            </div>
                        </div>
                        <!--Info Block-->
                        <div class="info-block">
                            <div class="icon-box">
                                <span class="icon">
                                    <img src="images/icons/icon-mail-1.png" alt="">
                                </span>
                            </div>
                            <strong>Email</strong>
                            <div class="info-text">
                            <a href="mailto:<?php the_field('email', mbio_translated_post_id( 6 ) ); ?> "><?php the_field('email', mbio_translated_post_id( 6 ) ); ?> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>

<!-- Footer Bottom -->
<div class="footer-bottom">
    <div class="auto-container">
        <div class="inner my-inner clearfix">
            <!--Scroll to top-->
            <div class="scroll-top-footer scroll-to-target" data-target="html"><span class="flaticon-arrows"></span></div>
         

			
          
            <div class="footer-nav">
                <ul class="clearfix my-ul">
                 
                    <a href="https://nasb.gov.by/" target="_blank">
                        <img src="https://mbio.bas-net.by/wp-content/uploads/2025/04/NANB.jpg"/>
                    </a>
                    
                 
                    <a href="https://profnan.by/" target="_blank">
                        <img src="https://mbio.bas-net.by/wp-content/uploads/2025/04/profsouz.jpg"/>
                    </a>
                    <a href="https://innosfera.by/" target="_blank">
                        <img src="https://mbio.bas-net.by/wp-content/uploads/2025/04/nii.gif"/>
                    </a>
                    
                    <a href="https://качество-услуг.бел/" target="_blank">
                        <img src="https://mbio.bas-net.by/wp-content/uploads/2025/04/ku22rus.png"/>
                    </a>
                    <a href="https://forumpravo.by/" target="_blank">
                        <img src="https://mbio.bas-net.by/wp-content/uploads/2025/04/eacf225a02dcd35ad59cd79ada5a6acd.jpg"/>
                    </a>
                </ul>
            </div>
			
			<div class="links-box my-links-box">
				<a target="_blank" href="https://mbiov.bas-net.by/roundcube/" class="theme-btn btn-style-four">
					<div class="btn-title">
						<span class="btn-txt"><?php echo esc_html( mbio_t( 'Почтовый портал' ) ); ?></span>
						<span class="btn-icon">
							<span class="icon flaticon-arrows-11"></span> 
						</span>
					</div>
				</a>
			</div>
        </div>
        
    </div>
</div>

<!-- Footer Bottom -->
<div class="footer-bottom">
    <div class="auto-container">

        <div class="inner clearfix">
        
            <!--Copyright-->
            <div class="copyright">&#169; <?php echo esc_html( mbio_t( 'Институт микробиологии НАН Беларуси' ) ); ?></div>
            <div class="footer-nav">
                <?php echo mbio_language_switcher(); ?>
                <ul class="clearfix">
                    <li><a href="<?php echo mbio_page_link(892) ?>"><?php echo esc_html( mbio_t( 'Политика в отношении обработки персональных данных' ) ); ?></a></li>
                    <!-- <li><a href="map.html">Карта сайта</a></li> -->
                    <li><a href="https://mbio.bas-net.by/wp-content/uploads/2025/04/booklet_full.pdf"><?php echo esc_html( mbio_t( 'Буклет' ) ); ?></a></li>
                </ul>
            </div>
        </div>
        
    </div>
</div>




</footer>

</div>
<!--End pagewrapper-->

<?php wp_footer(); ?>

</body>
</html>
