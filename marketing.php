<?php 
    // template Name: Marketing;
?>
<?php get_header(); ?>

<section class="page-banner">
    <div class="image-layer" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>

    <div class="auto-container">
        <div class="breadcrumb-box">
            <div class="auto-container">
                <ul class="bread-crumb clearfix">
                    <li><a href="<?php echo get_page_link(6) ?>">Главная</a></li>
                    <li class="active"><?php the_title(); ?></li>
                </ul>
            </div>
        </div>

        <h2><?php the_title(); ?></h2>
    </div>

</section>

<div class="sidebar-page-container my-padding my-padding-bottom">
    <div class="auto-container">
        <div class="row clearfix">
            <!--Services Section-->
            <section class="services-section-one my-padding my-padding-bottom">
                <div class="pattern-image-left paroller"
                    data-paroller-factor="-0.4"
                    data-paroller-factor-lg="-0.4"
                    data-paroller-factor-md="-0.2"
                    data-paroller-factor-sm="-0.2"
                    data-paroller-type="foreground"
                    data-paroller-direction="vertical"><img src="images/background/pattern-image-1.png" alt=""></div>
                <div class="pattern-image-right paroller"
                    data-paroller-factor="-0.3"
                    data-paroller-factor-lg="-0.3"
                    data-paroller-factor-md="0.2"
                    data-paroller-factor-sm="0.2"
                    data-paroller-type="foreground"
                    data-paroller-direction="vertical"><img src="images/background/pattern-image-2.png" alt=""></div>

                <div class="auto-container">
                    <div class="services">
                        <!--Service-Block-->
                        <div class="service-block">
                            <div class="row clearfix">
                                <!--Image Column-->
                                <div class="image-column col-lg-5 col-md-6 col-sm-12">
                                    <div class="inner wow fadeInLeft" data-wow-delay="0ms"  data-wow-duration="2000ms">
                                        <div class="image"><img src="<?php the_field('zav-nano', 785) ?>" alt=""></div>
                                    </div>
                                </div>
                                <!--Text Column-->
                                <div class="text-column my-padding col-lg-7 col-md-6 col-sm-12">
                                    <div class="inner clearfix">
                                        <div class="content wow fadeInRight" data-wow-delay="0ms"  data-wow-duration="2000ms">
                                            <div class="title">
                                                <h2><span>	
                                                    Заведующий сектором: </span></h2>
                                                <div class="sub-text">
                                                     <?php the_field('zav-name', 785) ?>
                                                </div>
                                                <!-- <?php the_field('regalii', 785) ?> <br> -->
                                            </div>

                                            <div class="text">
                                                Телефон: <a href="tel:<?php the_field('phone-space-no', 785) ?>"><strong><?php the_field('zav-phone', 785) ?></strong></a>,
                                                <a href="tel:<?php the_field('second-phone-space-no', 785) ?>"><strong><?php the_field('second-zav-phone', 785) ?></strong></a>
                                                <br>E-mail: <a href="mailto:<?php the_field('zav-email', 785) ?>"><strong><?php the_field('zav-email', 785) ?></strong></a>
                                                <br>
                                                <!-- <?php the_field('lab-short-info', 785) ?> -->
                                            </div>
                                            
                                            <div class="text my-padding">
                                                <h3 class="">Основные направления исследований:</h3> 
                                                <?php the_field('lab-ways', 785) ?>

                                                <!--<br><br>-->

                                                <!--Специалист по маркетингу Авдейчик Виктория Александровна <br><a href="tel:+375173994363"><strong>+375 17 399 43 63</strong></a><br>-->
                                                <!--Переводчик 1 категории Колбун Владимир Николаевич<br><a href="tel:+375173569479"><strong>+375 (17) 356-94-79</strong></a>-->
                                            </div>                                                        
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>             
            
        </div>
    </div>
</div>

<div class="sidebar-page-container my-padding my-padding-bottom">
    <div class="auto-container">
        <div class="row clearfix">
            
            <!--Content Side-->
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <div class="service-details">
                    <div class="details-inner">
                        
                        
                        <div class="text-block text-content">
                            <div class="sec-title service-title">                                         
                                <h3 class="subtitle"><?php the_title(); ?></h3>
                                <div class="bottom-dots clearfix">
                                    <span class="dot line-dot"></span>
                                    <span class="dot"></span>
                                    <span class="dot"></span>
                                    <span class="dot"></span>
                                </div>
                            </div>
                            
                            <?php the_content(); ?>
                            
                        </div>

                        
                    </div>
                </div>
            </div>

            <!--Sidebar Side-->
            <div class="sidebar-side col-lg-4 col-md-8 col-sm-12">
                <aside class="sidebar service-sidebar">
                                                    
                    <div class="sidebar-widget downloads-widget">
                        <div class="widget-inner">
                            <h3>Полезные ссылки</h3>
                            <ul>
                                <li><a target="_blank" href="https://mbio.bas-net.by/wp-content/uploads/2025/04/booklet_full.pdf"><span class="far fa-file-pdf"></span>Буклет об Институте микробиологии НАНБ</a></li>
                                <li><a target="_blank" href="https://nasb.gov.by/rus/about/glavnaya/">Национальная Академия Наук Беларуси</a></li>
                                <li><a target="_blank" href="https://www.government.by/ru/">Совет Министров Республики Беларусь</a></li>
                                
                            </ul>
                        </div>
                    </div>
                </aside>
            </div>
            
        </div>
    </div>
</div>

<?php get_footer(); ?> 