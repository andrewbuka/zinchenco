<?php 
    // template Name: TechMaterial;
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
                                        <div class="image"><img src="<?php the_field('zav-nano', 843) ?>" alt=""></div>
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
                                                     <?php the_field('zav-name', 843) ?>
                                                </div>
                                                <!-- <?php the_field('regalii', 843) ?> <br> -->
                                            </div>

                                            <div class="text">
                                                Телефон: <a href="tel:<?php the_field('phone-space-no', 843) ?>"><strong><?php the_field('zav-phone', 843) ?></strong></a>

                                                <br>E-mail: <a href="mailto:<?php the_field('zav-email', 843) ?>"><strong><?php the_field('zav-email', 843) ?></strong></a>
                                                <br>
                                                <!-- <?php the_field('lab-short-info', 843) ?> -->
                                            </div>
                                            
                                            <div class="text my-padding">
                                                

                                                <!--<br><br>-->

                                                <!--Ведущий экономист Шкроп Наталья Игоревна<br><a href="tel:<?php the_field('phone-space-no', 843) ?>"><strong><?php the_field('zav-phone', 843) ?></strong></a><br>-->
                                                <!--Ведущий специалист Рябцева Юлиана Александровна<br><a href="tel:<?php the_field('phone-space-no', 843) ?>"><strong><?php the_field('zav-phone', 843) ?></strong></a><br>-->
                                                <!--Специалист по организации закупок Ананич Вадим Александрович<br><a href="tel:<?php the_field('phone-space-no', 843) ?>"><strong><?php the_field('zav-phone', 843) ?></strong></a>-->
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



<?php get_footer(); ?> 