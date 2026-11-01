<?php 
    // template Name: News;
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

            <!--News Section-->
     <section class="news-section style-two">
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
                <!-- <div class="subtitle">pure & clean wind is the world to us</div> -->
                <h2>Все новости</h2>
            </div>

            <div class="row clearfix">
            <?php 
                function get_number_post($title) {
                    global $post;

                    $myposts_page = get_posts([ 
                    'numberposts' => -1,
                    'offset'      => 1,
                    'category'    => 3,
                    ]);

                    if( $myposts_page ){
                    foreach( $myposts_page as $post ){

                        $title_product = get_the_title();

                        if($title_product === $title) {
                        $number_post = get_the_ID();
                        return $number_post;
                        }
                    
                    }
                    }
                }
            ?>

            <?php
                global $post;

                $myposts = get_posts([
                    'numberposts' => -1,
                    // 'offset'      => 1,
                    'category'    => 1
                ]);

                if( $myposts ){
                    foreach( $myposts as $post ){
                        setup_postdata( $post );
                        $title = get_the_title(); 
      
                        $numbe_post =  get_number_post($title);
                        ?>
                        <!--News Block-->
                            <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="0ms"  data-wow-duration="2000ms">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image">
                                            <a href="<?php echo get_page_link( $numbe_post ); ?>">
                                            <?php the_post_thumbnail( null, array(
                                                'alt' => 'news image'
                                                ) ); ?>
                                                <!-- <img src="images/news.jpg" alt=""> -->
                                            </a></figure>
                                        <div class="post-date">
                                            <span class="day">18</span><span class="month">Дек</span><span class="year">2025</span>
                                        </div>
                                    </div>
                                    <div class="lower-box">
                                        <p><a href="<?php echo get_page_link( $numbe_post ); ?>"><?php the_title(); ?></a></p>
                                        <?php the_content(); ?>
                                        <!-- <div class="meta-info">By <a href="#">Admin</a> &nbsp;|&nbsp; <a href="#">Solar Energy</a>, <a href="#">Installation</a></div> -->
                                        <div class="link-box">
                                            <a href="<?php echo get_page_link( $numbe_post ); ?>"><span class="txt">Смотреть</span> <span class="icon flaticon-arrows-11"></span></a>
                                        </div>
                                    </div>
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

     
    </section>
<?php get_footer(); ?>