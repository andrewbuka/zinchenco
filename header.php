<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="utf-8">
<!-- 	<?php 
		$post_id = get_the_ID();
	?> -->
<title><?php the_title() ?> | Институт микробиологии НАН Беларуси</title>
<?php wp_head() ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<link href="css/my-styles.css" rel="stylesheet">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>

<body class='body'>
    <div class="search-container">
        <div class="close-container">
            <img src="https://mbio.bas-net.by/wp-content/uploads/2025/05/icons8-удалить-30.png">
        </div>
        <?php echo do_shortcode( '[searchwp_form id="1"]' ); ?>
    </div>
<div class="page-wrapper">
    <!-- Preloader -->
    <!-- <div class="preloader"><div class="icon"></div></div> -->

    <!-- Main Header -->
    <header class="main-header header-style-two">
        <!-- Header Top -->
        <div class="header-top header-top-two">
            <div class="auto-container">
				<div class="inner clearfix">
                    <div class="top-left clearfix">
                        <div class="address"> <li>
<!--                                                 <?php echo do_shortcode('[bvi]'); ?> -->
							<?php echo do_shortcode( '[bvi text="Версия для слабовидящих"]' ); ?>
                                            </li>
                        </div>
                        
                        <div class="email"> <?php echo do_shortcode('[gtranslate]'); ?>
                        </div>
                        <div class="email search-icon"> 
                            <img src='https://mbio.bas-net.by/wp-content/uploads/2025/05/icons8-поиск-30.png'>
                        </div>
                    </div>
    
                    <div class="top-right clearfix">
                        <div class="links">
                            <ul class="clearfix">
                                <li><a class="collection-link" href="https://mbio.bas-net.by/bim/">Коллекция микроорганизмов</a></li>
                            </ul>
                        </div>
                     
                        <ul class="social-links clearfix">
                            <li><a href="https://t.me/inmi_by"><img class="green-svg" src="https://mbio.bas-net.by/wp-content/uploads/2025/03/telegram-brands.svg" width="20" height="20" alt="" class="img"></a></li>
                            <li><a href="https://invite.viber.com/?g2=AQBraLupPo8rSk2YPoN%2Bzo70k8QbxSBkOzKJG%2BMsZDnRDZS2JDAB2O%2FKSmRkYEkg&lang=ru" target="_blank"><img class="green-svg" src="https://mbio.bas-net.by/wp-content/uploads/2025/03/viber-brands.svg" width="20" height="20" alt="" class="img"></a></li>
                            <li><a href="http://youtube.com/@inmi_bioproduct" target="_blank"><img class="green-svg" src="https://mbio.bas-net.by/wp-content/uploads/2025/03/youtube-brands.svg" width="20" height="20" alt="" class="img"></a></li>
                            <li><a href="https://www.tiktok.com/@inmi.by" target="_blank"><img class="green-svg" src="https://mbio.bas-net.by/wp-content/uploads/2025/03/tiktok-brands.svg" width="20" height="20" alt="" class="img"></a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

        <!-- Header Upper -->
        <div class="header-main-box">
            <div class="header-upper">
                <div class="auto-container">
                    <div class="clearfix">
                        <!--Logo-->
                        <div class="logo-box">
                            <div class="logo">                            
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
                        </div>
                        <!--Nav Box-->
                        <div class="nav-box clearfix">
                            <div class="nav-outer clearfix">
                                <!--Mobile Navigation Toggler-->
                                <div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>

                                <!-- Main Menu -->
                                <nav class="main-menu navbar-expand-md navbar-light">
                                    <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                        <ul class="navigation clearfix">
                                            <!-- <li class="current"><a href="<?php echo get_page_link(6); ?>">Главная</a></li> -->

                                            <li class="dropdown"><a href="#">Институт</a>
												<ul class='my-ul-style'>
													<li><a href="<?php echo get_page_link(277) ?>">История</a></li>
													<li ><a href="<?php echo get_page_link(281); ?>">Структура института</a>
													<li ><a href="<?php echo get_page_link(1983); ?>">Направления и задачи</a>
													    
													</li>
													
													<li class="dropdown"><a href="#">Издания и публикации</a>
    													<ul class='my-ul-style'>
                                                            <li><a href="<?php echo get_page_link(283); ?>">Книги и публикации</a></li>
                                                            <li><a href="<?php echo get_page_link(286); ?>">Сборники научных трудов</a></li>
                                                        </ul>
                                                    </li>
                                                   
                                                    <li class="current"><a href="<?php echo get_page_link(574); ?>">Конференции</a></li>
                                                    
                                                    <li class="current"><a href="<?php echo get_page_link(342); ?>">Аспирантура и докторантура</a></li>
                                                    <li class="current"><a href="<?php echo get_page_link(354); ?>">Совет по защите диссертаций</a></li>
                                                    <li><a href="<?php echo esc_url(mbio_zinchenko_url()); ?>">Анатолий Иванович Зинченко</a></li>
                                                   
                                                    <li class="dropdown"><a href="#">Общественные объединения</a>
                                                        <ul class='my-ul-style'>
                                                            <li><a href="<?php echo get_page_link(452); ?>">Общественное объединение Микробиологическое общество</a></li>
                                                            <li><a href="<?php echo get_page_link(457); ?>">Совет молодых ученых</a></li>
                                                            <li><a href="<?php echo get_page_link(459); ?>">Первичная профсоюзная организация Института микробиологии НАН Беларуси</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="current"><a href="<?php echo get_page_link(344); ?>">Объекты интеллектуальной собственности</a></li>
<!--                                                     <li class="current "><a href="<?php echo get_page_link(894); ?>">Обращения</a></li> -->
                                                    
                                                    <!--<li><a href="https://mbio.bas-net.by/wp-content/uploads/2025/04/booklet_full.pdf">Скачать буклет</a></li>-->
												</ul>
											</li>
											
											 <li class="current visibility"><a href="https://mbio.bas-net.by/bim/">Коллекция микроорганизмов</a></li>
                                           
                                            <li class="dropdown"><a href="#">Продукция</a>
                                                <ul class='my-ul-style'>
<!-- 													<li><a href="<?php echo get_page_link(1197); ?>">Ознакомиться с продукцией</a> -->
<!-- 														<li><a href="#">Ознакомиться с продукцией</a> -->
                                                    <li><a target="_blank" href="https://inmi.by/#products">Купить продукцию (физ. лица)</a></li>
                                                    <li><a target="_blank" href="https://inmi.by/yur-page/">Купить продукцию (юр. лица)</a></li>
                                                    
                                                </ul>
                                            </li>
                                            
                                            <li><a href="<?php echo get_page_link(1075); ?>">Публикации</a></li>
											<li class="current visibility"><a href="<?php echo get_page_link(1082); ?>">Наши ученые</a></li>
<!--                                             <li class="current visibility"><a href="<?php echo get_page_link(894); ?>">Обращения</a></li> -->
                                            <li ><a href="<?php echo get_page_link(6); ?>#news">Новости</a></li>

                                            <li class="dropdown"><a href="<?php echo get_page_link(268); ?>">Контакты</a>
												<ul class='my-ul-style'>
													 <li ><a href="<?php echo get_page_link(268); ?>">Контакты подробно</a>
													 <li ><a href="<?php echo get_page_link(1184); ?>">Личный прием</a>
													 <li ><a href="<?php echo get_page_link(894); ?>">Обращения</a>
												</ul>
											</li>
                                            

                                            <li class="current visibility"><a href="<?php echo get_page_link(342); ?>">Аспирантура и докторантура</a></li>
                                            <li class="current visibility"><a href="<?php echo get_page_link(354); ?>">Совет по защите диссертаций</a></li>
                                            <li class="dropdown visibility"><a href="#">Издания и публикации</a>
                                                <ul>
                                                    <li><a href="<?php echo get_page_link(283); ?>">Книги и публикации</a></li>
                                                    <li><a href="<?php echo get_page_link(286); ?>">Сборники научных трудов</a></li>
                                                    
                                                </ul>
                                            </li>
                                            <li class="current visibility"><a href="<?php echo get_page_link(344); ?>">Объекты интеллектуальной собственности</a></li>
                                            <li class="current visibility"><a href="<?php echo get_page_link(574); ?>">Конференции</a></li>
                                            <li class="dropdown visibility"><a href="#">Общественные объединения</a>
                                                <ul>
                                                    <li><a href="<?php echo get_page_link(452); ?>">Общественное объединение Микробиологическое общество</a></li>
                                                    <li><a href="<?php echo get_page_link(457); ?>">Совет молодых ученых</a></li>
                                                    <li><a href="<?php echo get_page_link(459); ?>">Первичная профсоюзная организация Института микробиологии НАН Беларуси</a></li>
                                                </ul>
                                            </li>
                                           
                                            
                                           
                                           
                                        </ul>
                                    </div>
                                </nav>
                            </div>

                            <!--Contact Info-->
                            <div class="contact-info">
                                <div class="phone"><span class="icon flaticon-telephone-1"></span> <a href="tel:<?php the_field('phone-number', 6); ?> "><?php the_field('phone_visual', 6); ?> </a></div>
                                <div class="hours">Пн - Чт: 9:00 - 18:00, Пт: 9:00 - 15:55</div>
                            </div>

                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!--End Header Upper-->

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container clearfix">
                <!--Logo-->
                <div class="logo pull-left">
                    <a href="index.html" title=""><img class="sticky-logo" src="images/inmi-logo.png" alt="" title=""></a>
                </div>
             
                <div class="pull-right">
                    <!-- Main Menu -->
                    <nav class="main-menu clearfix">
                      
                    </nav><!-- Main Menu End-->
                </div>
            </div>
        </div><!-- End Sticky Menu -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon flaticon-cancel"></span></div>
            
            <nav class="menu-box">
                <div class="nav-logo"><a href="index.html"><img class="sticky-logo" src="images/inmi-logo.png" alt="" title=""></a></div>
                <div class="menu-outer"></div>
				<!--Social Links-->
				<div class="social-links">
                    <ul class="footer-social-two my-footer-social-two clearfix">
                        <li class="color-icons"><a href="https://t.me/inmi_by"><img class="green-svg" src="https://mbio.bas-net.by/wp-content/uploads/2025/03/telegram-brands.svg" width="20" height="20" alt="" class="img"></a></li>
                        <li class="color-icons"><a href="https://invite.viber.com/?g2=AQBraLupPo8rSk2YPoN%2Bzo70k8QbxSBkOzKJG%2BMsZDnRDZS2JDAB2O%2FKSmRkYEkg&lang=ru" target="_blank"><img class="green-svg" src="https://mbio.bas-net.by/wp-content/uploads/2025/03/viber-brands.svg" width="20" height="20" alt="" class="img"></a></li>
                        <li class="color-icons"><a href="http://youtube.com/@inmi_bioproduct" target="_blank"><img class="green-svg" src="https://mbio.bas-net.by/wp-content/uploads/2025/03/youtube-brands.svg" width="20" height="20" alt="" class="img"></a></li>
                        <li class="color-icons"><a href="https://www.tiktok.com/@inmi.by" target="_blank"><img class="green-svg" src="https://mbio.bas-net.by/wp-content/uploads/2025/03/tiktok-brands.svg" width="20" height="20" alt="" class="img"></a></li>
                    </ul>
                </div>
            </nav>
        </div><!-- End Mobile Menu -->
    </header>
    <!-- End Main Header -->
