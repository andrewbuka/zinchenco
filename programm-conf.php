<?php 
    // template Name: ProgrammConf;
?>
<?php get_header(); ?>
  <div class="sidebar-page-container my-padding my-padding-bottom">
                <div class="auto-container">
                    <div class="row clearfix">
                        
                        <!--Content Side-->
                        <div class="content-side col-lg-8 col-md-12 col-sm-12">
                            <div class="service-details">
                                <div class="details-inner">
                                   
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