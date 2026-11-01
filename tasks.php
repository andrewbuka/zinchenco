<?php 
    // template Name: Tasks;
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

<!--History Section-->
<section class="history-section my-padding-twenty">
   
</section>

 <!--History_description Section-->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix">
            
            <!--Content Side-->
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <div class="service-details">
                    <div class="details-inner">
                        
                        <?php the_content(); ?>
                        
                        
                    </div>
                </div>
            </div>
            
            

            <!--Sidebar Side-->
            <div class="sidebar-side col-lg-4 col-md-8 col-sm-12">
                <aside class="sidebar service-sidebar">
                   
                    <!--Sidebar Widget-->
                    <div class="main-image">
                            <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                        </div>
                    
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

<!--History Section-->
<section class="history-section">
    <div class="auto-container">
        <div class="sec-title-two">
            <div class="upper-icon clearfix">
                <div class="left-dots clearfix">
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot line-dot"></span>
                </div>
                <div class="icon"><span class="fa fa-fan"></span></div>
                <div class="right-dots clearfix">
                    <span class="dot line-dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>
            </div>
            <div class="subtitle">60+ лет научных разработок</div>
            <h2>Этапы развития Института</h2>
        </div>

        <div class="carousel-box">
            <div class="history-carousel strnix-carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 30, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 500, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "2" }, "800":{ "items" : "2" }, "1024":{ "items" : "3" }, "1200":{ "items" : "4" }}}'>                
                <?php
                    global $post;

                    $myposts = get_posts([
                        'numberposts' => -1,
                        'offset'      => 1,
                        'category'    => 2
                    ]);

                    if( $myposts ){
                        foreach( $myposts as $post ){
                            setup_postdata( $post );
                            ?>
                            <div class="slide">
                                <div class="history-block">
                                    <div class="date">Год</div>
                                    <div class="round-dot"></div>
                                    <div class="title"><?php the_title(); ?></div>
                                    <div class="text"><?php the_content(); ?></div>
                                </div>
                            </div>
                            <?php
                        }
                    } else {
                        // Постов не найдено
                    }

                    wp_reset_postdata(); 
                ?>
            </div>
        </div>

    </div>
</section>





<?php get_footer(); ?>