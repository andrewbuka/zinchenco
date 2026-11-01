<?php 
    // template Name: ProfUnion-Eng;
?>
<?php get_header(); ?>

<section class="page-banner">
    <div class="image-layer" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>

    <div class="auto-container">
        <div class="breadcrumb-box">
            <div class="auto-container">
                <ul class="bread-crumb clearfix">
                    <li><a href="<?php echo get_page_link(6) ?>">Main</a></li>
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
                            <h3>Useful links</h3>
                            <ul>
                                <li><a target="_blank" href="https://mbio.bas-net.by/wp-content/uploads/2025/04/booklet_full.pdf"><span class="far fa-file-pdf"></span>Brochure about the Institute of Microbiology of the National Academy of Sciences of Belarus</a></li>
                                <li><a target="_blank" href="https://nasb.gov.by/rus/about/glavnaya/">National Academy of Sciences of Belarus</a></li>
                                <li><a target="_blank" href="https://www.government.by/ru/">Council of Ministers of the Republic of Belarus</a></li>
                                
                            </ul>
                        </div>
                    </div>

                    
                </aside>
            </div>
            
        </div>
    </div>
</div>

<?php get_footer(); ?>