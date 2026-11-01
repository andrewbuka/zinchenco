 <!-- Main Footer / Style Two-->
 <footer class="main-footer footer-style-two footer-lang ru">

<!--Widgets Section-->
<div class="widgets-section">
    <div class="auto-container">
        <div class="row clearfix">
            
            <!--Column-->
            <div class="footer-column col-lg-4 col-md-5 col-sm-12">
                <div class="footer-widget about-widget">
                    <div class="footer-logo-box">
                        <a href="<?php echo get_page_link(6); ?>" title="Институт микробиологии НАН Беларуси">
                                    <?php 
                                        $logo_img = '';
                                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                                        
                                        if( $custom_logo_id ){
                                            $logo_img = wp_get_attachment_image( $custom_logo_id, 'full', false, array(
                                            'class'    => 'sticky-logo',
                                            'alt'    => 'Институт микробиологии НАН Беларуси',
                                            'title'    => 'Институт микробиологии НАН Беларуси',                                            
                                            ) );
                                        }
                                        
                                        echo $logo_img;
                                    ?>
                                </a>
                    </div>
                    <div class="about-text">
                        <?php the_field('requisites-1', 6); ?>
                    </div>
                    <div class="about-text">
                    <?php the_field('requisites-2', 6); ?>
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
                                    <li><a href="<?php echo get_page_link(6); ?>">Главная</a></li>
                                    <li><a target="_blank" href="https://inmi.by">Продукция</a></li>
                                    <li><a href="<?php echo get_page_link(281); ?>">Структура института</a></li>
                                    <li><a href="https://mbio.bas-net.by/bim/">Коллекция микроорганизмов</a></li>                                           
                                    <li><a href="<?php echo get_page_link(574); ?>">Конференции</a></li>
                                    <li><a href="<?php echo get_page_link(457); ?>">Совет молодых ученых</a></li>
                                    <li><a href="<?php echo get_page_link(459); ?>">Первичная профсоюзная организация Института</a></li>
                                    <li><a href="<?php echo get_page_link(268); ?>">Контакты</a></li>
                                    <li><a href="<?php echo get_page_link(894); ?>">Обращения</a></li>
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
                                    <li><a href="<?php echo get_page_link(277) ?>">История Института</a></li>
                                    <li><a href="<?php echo get_page_link(342); ?>">Аспирантура и докторантура</a></li>
                                    <li><a href="<?php echo get_page_link(354); ?>">Совет по защите диссертаций</a></li>
                                    <li><a href="<?php echo get_page_link(283); ?>">Книги и монографии</a></li>
                                    <li><a href="<?php echo get_page_link(286); ?>">Сборники научных трудов</a></li>
                                    <li><a href="<?php echo get_page_link(344); ?>">Объекты интеллектуальной собственности</a></li>
                                    <li><a href="<?php echo get_page_link(452); ?>">Общественное объединение Микробиологическое общество</a></li>
                                    
                                   
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
                        <h3>Контакты</h3>
                    </div>
                    <div class="info">
                        <!--Info Block-->
                        <div class="info-block">
                            <div class="icon-box">
                                <span class="icon">
                                    <img src="images/icons/icon-message-1.png" alt="">
                                </span>
                            </div>
                            <strong>Адрес</strong>
                            <div class="info-text"><?php the_field('address-short', 6); ?></div>
                        </div>
                        <!--Info Block-->
                        <div class="info-block">
                            <div class="icon-box">
                                <span class="icon">
                                    <img src="images/icons/icon-call-1.png" alt="">
                                </span>
                            </div>
                            <strong>Телефон</strong>
                            <div class="info-text">
                            <a href="tel:<?php the_field('phone-number', 6); ?> "><?php the_field('phone_visual', 6); ?> </a>
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
                            <a href="mailto:<?php the_field('email', 6); ?> "><?php the_field('email', 6); ?> </a>
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
						<span class="btn-txt">Почтовый портал</span>
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
            <div class="copyright">&#169 Институт микробиологии НАН Беларуси</div>
            <div class="footer-nav">
				<ul>
					<li class='ru-btn'>
						ru
					</li>
					<li class='bel-btn'>
						bel
					</li>
					<li class='en-btn'>
						en
					</li>
				</ul>
                <ul class="clearfix">
                    <li><a href="<?php echo get_page_link(892) ?>">Политика в отношении обработки персональных данных</a></li>
                    <!-- <li><a href="map.html">Карта сайта</a></li> -->
                    <li><a href="https://mbio.bas-net.by/wp-content/uploads/2025/04/booklet_full.pdf">Буклет</a></li>
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