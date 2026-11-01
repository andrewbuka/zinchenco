<?php 
    // template Name: ConfJune;
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
                        
                        <!--Content Side-->
                        <div class="content-side col-lg-8 col-md-12 col-sm-12">
                            <div class="service-details">
                                <div class="details-inner">
                                    <!-- <div class="main-image">
                                        <img src="photo/lab_ferment/IMG_3271.jpg" alt="">
                                    </div> -->
                                    <div class="sec-title service-title">
                                        <h3><?php the_title(); ?></h3>                                        
                                        <div class="bottom-dots clearfix">
                                            <span class="dot line-dot"></span>
                                            <span class="dot"></span>
                                            <span class="dot"></span>
                                            <span class="dot"></span>
                                        </div>
                                    </div>
                                    <div class="text-block text-content">
                                        <?php the_content(); ?>
                                              
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <!--Sidebar Side-->
                        <div class="sidebar-side col-lg-4 col-md-8 col-sm-12">
                            <aside class="sidebar service-sidebar">
                                
<!--                                 <div>
                                    <h4> Материалы</h4>
                                    <a target="_blank" href="https://mbio.bas-net.by/wp-content/uploads/2025/03/InMi-2025-1st_letter_2.pdf"><strong>Первое информационное письмо</strong></a>
                                    <br><br>
                                    <a target="_blank" href="https://mbio.bas-net.by/wp-content/uploads/2025/03/InMi-2025-Abstract_guidelines_ru-1.docx"><strong>Требования к оформлению материалов докладов</strong></a>
                                </div> -->
                                <br>
                                <div>
                                     <h4>Контактная информация </h4>

                                    <p>Государственное научное учреждение
                                    «Институт микробиологии Национальной академии наук Беларуси» </p>
                                    
                                    <p>Адрес: ул. акад. В.Ф. Купревича, 2,
                                    220084, Минск,
                                    Республика Беларусь</p> 
                                    
                                    <p>Факс: +375 (17) 395-47-66</p>
                                </div>
                                
                                <div>
                                     <h4>Контактные телефоны:</h4>

                                    <p> <a href="tel:+375173578924"><strong>+375 (17) 357-89-24</strong></a><br>
                                        Елена Валерьевна Болотник
                                        (заместитель директора по научной и инновационной работе) 
                                    </p>
                                        
                                     <p> <a href="tel:+375173944718"><strong>+375 (17) 394-47-18</strong></a><br>
                                        Ирина Александровна Ровенская
                                        (ученый секретарь)
                                    </p>
                                    
<!--                                     <strong>Электронная почта:</strong><br><a href="mailto:conference@mbio.bas-net.by">conference@mbio.bas-net.by</a> -->
									<strong>Электронная почта:</strong><br><a href="mailto:microbio@mbio.bas-net.by">microbio@mbio.bas-net.by</a>
									
									
									
                                </div>
                                <br>
                                
<!--                                 <div>
                                     <h4>Ключевые даты</h4>

                                    <p> 
                                        Приём заявок (регистрация) <br>
                                        <strong>— с 1 февраля по 1 апреля 2025 г.</strong>
                                    </p>
                                        
                                     <p>
                                         Прием материалов докладов <br>
                                        <strong>— с 1 февраля по 1 апреля 2025 г.</strong>
                                    </p>
                                    <p> 
                                        Рассылка подтверждения участия в конференции
                                         <br>
                                        <strong>— до 15 апреля 2025 г.</strong>
                                    </p>
                                        
                                     <p>
                                         Оплата организационного взноса
                                        (только после подтверждения участия в конференции)<br>
                                        <strong>— до 16 мая 2025 г.</strong>
                                    </p>
                                </div> -->
                                <br>
                                                              
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