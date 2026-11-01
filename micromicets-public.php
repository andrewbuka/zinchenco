<?php 
    // template Name: Micromicets-public;
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



 <!--History_description Section-->
<div class="sidebar-page-container">
    <div class="auto-container">
        <div class="row clearfix my-row">
            
            <!--Content Side-->
            <div class="content-side col-lg-8 col-md-12 col-sm-12">
                <div class="service-details">
                    <div class="details-inner">
                        <!--<div class="main-image">-->
                        <!--<img src="<?php the_field('photo-link', 1542)?>" alt="">-->
                        <!--</div>-->
                        
                        <?php the_content(); ?>
                        
                    </div>
                </div>
            </div>

            <!--Sidebar Side-->
            <div class="sidebar-side col-lg-4 col-md-8 col-sm-12">
                <aside class="sidebar service-sidebar">
                    <!-- photo -->
                    <div class="sidebar-widget info-widget">
                        <div class="widget-inner">
                            <div class="image"><img src="<?php the_field('photo-link', 1542)?>" alt=""></div>                                        
                        </div>
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




<?php get_footer(); ?>