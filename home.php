<?php 
    // template Name: Home;
?>

<?php get_header(); ?>
  <!--Search Popup-->
  <div id="search-popup" class="search-popup">
        <div class="close-search theme-btn"><span class="flaticon-cancel"></span></div>
        <div class="popup-inner">
            <div class="overlay-layer"></div>
            <div class="search-form">
                <form method="post" action="index.html">
                    <div class="form-group">
                        <fieldset>
                            <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                            <input type="submit" value="Search Now!" class="theme-btn">
                        </fieldset>
                    </div>
                </form>
                
                <br>
                <h3>Recent Search Keywords</h3>
                <ul class="recent-searches">
                    <li><a href="#">Finance</a></li>
                    <li><a href="#">Idea</a></li>
                    <li><a href="#">Service</a></li>
                    <li><a href="#">Growth</a></li>
                    <li><a href="#">Plan</a></li>
                </ul>
            
            </div>
            
        </div>
    </div>


    <!-- Banner Section -->
    <section class="banner-section banner-two">

        <div class="additional-menu-box">
            <nav class="main-menu navbar-expand-md navbar-light">
                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                    <ul class="navigation clearfix my-ul">
                        <li class="dropdown "><a href="#">Издания и публикации</a>
                            <ul class='my-ul-style'>
                                <li><a href="<?php echo get_page_link(283); ?>">Книги и монографии</a></li>
                                <li><a href="<?php echo get_page_link(286); ?>">Сборники научных трудов</a></li>
                                
                            </ul>
                        </li>
                        <li class="current "><a href="<?php echo get_page_link(1082); ?>">Наши ученые</a></li>
                      
                        
                        <li class="current "><a href="<?php echo get_page_link(342); ?>">Аспирантура и докторантура</a></li>
                        <li class="current "><a href="<?php echo get_page_link(354); ?>">Совет по защите диссертаций</a></li>
                        <li class="dropdown "><a href="#">Общественные объединения</a>
                            <ul class='my-ul-style'>
                                <li><a href="<?php echo get_page_link(452); ?>">Общественное объединение Микробиологическое общество</a></li>
                                <li><a href="<?php echo get_page_link(457); ?>">Совет молодых ученых</a></li>
                                <li><a href="<?php echo get_page_link(459); ?>">Первичная профсоюзная организация Института микробиологии НАН Беларуси</a></li>
                            </ul>
                        </li>
                        
                        <li class="current "><a href="<?php echo get_page_link(344); ?>">Объекты интеллектуальной собственности</a></li>
                      
                        
                        <li class="current "><a href="<?php echo get_page_link(574); ?>">Конференции</a></li>
                        
                          
                        
                        
                       
                    </ul>
                </div>
            </nav>
        </div>
		<div class="banner-carousel strnix-carousel owl-theme owl-carousel" 
        data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": false, "autoplayTimeout": 6000, "smartSpeed": 300, "responsive":{ "0" :{ "items": "1" }, "768" :{ "items" : "1" } , "1000":{ "items" : "1" }}}'>
			<!-- Slide Item -->
			<div class="slide-item">
                <?php 
                    $tt = get_field('slide_one')
                ?>
				<div class="image-layer" style="background-image:url('<?php echo $tt['slide-one-img']?>')"></div>

				<div class="auto-container">
					<div class="content-box">
                        <div class="content">
                            <div class="inner">
								<div class="subtitle-2">
                                    <span class="txt">Институт микробиологии Национальной академии наук Беларуси</span> 
                                    <span class="icon fa fa-fan"></span>
                                    <div class="bottom-dots clearfix">
                                        <span class="dot line-dot"></span>
                                        <span class="dot"></span>
                                        <span class="dot"></span>
                                        <span class="dot"></span>
                                    </div>
                                </div>
                                 
        						<h2 class="h-two">
                                    <?php echo $tt2['title-slide-two'] ?>
                                </h2>
<!--                                	<a target="_blank" href="https://mbio.bas-net.by/2026/">
									<img style="margin-bottom: 10px;" class="" src='https://mbio.bas-net.by/wp-content/uploads/2026/02/conf-2026-banner.png'/>
								</a> -->
                                
                                <h2 class="h-two">
                                    <?php echo $tt['title-slide-one'] ?>
                                </h2>
                                <div class="text">

                                    <?php echo $tt['string-two-slide-one'] ?>
                                </div>
                                <div class="links-box">
                                    <a href="https://mbio.bas-net.by/home/structure/" class="theme-btn btn-style-four">
                                        <div class="btn-title"><span class="btn-txt">Структура Института</span><span class="btn-icon"><span class="icon flaticon-arrows-11"></span> </span></div>
                                    </a>
                                </div>               
                            </div>
                        </div>
					</div>  
				</div>
			</div>

            <!-- Slide Item -->
			<div class="slide-item">
                <?php 
                    $tt2 = get_field('slide_2')
                ?>
				<div class="image-layer" style="background-image:url('<?php echo $tt2['slide-two-img']?>')"></div>

				<div class="auto-container">
					<div class="content-box">
                        <div class="content">
                            <div class="inner">
                                <div class="subtitle-2">
                                    <span class="txt"><?php echo $tt2['string-one-slide-two']?></span> 
                                    <span class="icon fa fa-fan"></span>
                                    <div class="bottom-dots clearfix">
                                        <span class="dot line-dot"></span>
                                        <span class="dot"></span>
                                        <span class="dot"></span>
                                        <span class="dot"></span>
                                    </div>
                                </div>
                                 
        						<h2 class="h-two">
                                    <?php echo $tt2['title-slide-two'] ?>
                                </h2>
                                <div class="text">
                                    
                                    <?php echo $tt2['string-two-slide-two'] ?>
                                </div>
        						<div class="links-box"><a href="<?php echo $tt2['btn-link-slide-two'] ?>" class="theme-btn btn-style-four"><div class="btn-title"><span class="btn-txt"><?php echo $tt2['btn-title-slide-two'] ?></span><span class="btn-icon"><span class="icon flaticon-arrows-11"></span> </span></div></a></div>
                            </div>
                        </div>
					</div>  
				</div>
			</div>

            <!-- Slide Item -->
			<div class="slide-item">
                <?php 
                    $tt3 = get_field('slide_3')
                ?>
				<div class="image-layer" style="background-image:url('<?php echo $tt3['slide-three-img']?>')"></div>

				<div class="auto-container">
					<div class="content-box">
                        <div class="content">
                            <div class="inner">
                                <div class="subtitle-2">
                                    <span class="txt"><?php echo $tt3['string-one-slide-three']?></span> 
                                    <span class="icon fa fa-fan"></span>
                                    <div class="bottom-dots clearfix">
                                        <span class="dot line-dot"></span>
                                        <span class="dot"></span>
                                        <span class="dot"></span>
                                        <span class="dot"></span>
                                    </div>
                                </div>
        						<h2 class="h-two">
                                    <?php echo $tt3['title-slide-three'] ?>
                                </h2>
                                <div class="text">
                                    <?php echo $tt3['string-two-slide-three'] ?>
                                </div>
        						<div class="links-box"><a href="<?php echo $tt3['btn-link-slide-three'] ?>" class="theme-btn btn-style-four"><div class="btn-title"><span class="btn-txt"><?php echo $tt3['btn-title-slide-three'] ?></span><span class="btn-icon"><span class="icon flaticon-arrows-11"></span> </span></div></a></div>
                            </div>
                        </div>
					</div>  
				</div>
			</div>
		</div>
    </section>
    <!--End Banner Section -->



      <!--History Section-->
      <section class="history-section history-padding" style="margin-top: 30px;">
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
    
                <div class="history-carousel strnix-carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 30, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": false, "autoplayTimeout": 6000, "smartSpeed": 500, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "2" }, "800":{ "items" : "2" }, "1024":{ "items" : "3" }, "1200":{ "items" : "4" }}}'>
                    
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

     <!--News Section-->
     <section id="news" class="news-section style-two">
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
               
                <h2>Последние новости</h2>
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
                    'numberposts' => 3,
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

        <!--Sponsors-->
        <div class="sponsors-outer">
            <div class="auto-container">
                <div class="link-box">
                    <a style="display: flex; align-items: center; justify-content: center; gap: 10px" href="<?php echo get_page_link(262); ?>">
                        <span style="display: flex; align-items: center; justify-content: center; gap: 10px"  class="txt"><h3 style="margin: 0" class="">Еще новости</h3></span> 
                        <span class="icon flaticon-arrows-11"></span>
                    </a>
                </div>       
            </div>
        </div>
    </section>
    
    
    
    <section class="news-section-two smi-padding">
        <div class="auto-container  news-auto-container">
            <div class="sec-title hydro-theme">
                <div class="upper-text"></div>
                <h2>СМИ о нас</h2>
                <div class="bottom-dots clearfix">
                    <span class="dot line-dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>
            </div>

            <div class="news-carousel strnix-carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 30, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 6000, "smartSpeed": 500, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "1" }, "800":{ "items" : "1" }, "1024":{ "items" : "1" }}}'>
                <!--Slide-->
                <div class="slide-item">
                    <div class="row clearfix">
                        <div class="column col-lg-6 col-md-6 col-sm-12">
                            <!--News Block Two-->
                            <div class="news-block-two">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image">
                                            <a target="_blank" href="https://www.sb.by/articles/ot-mikrobnykh-udobreniy-do-biosensoriki-nad-chem-rabotaet-institut-mikrobiologii-nan-belarusi.html"><img src="https://mbio.bas-net.by/wp-content/uploads/2026/08/ffce11ff6389b3558e233529cd085e43.jpg" alt=""></a>
                                        </figure>
                                    </div>
                                    <div class="lower-box">
                                        <h5><a target="_blank" href="https://www.sb.by/articles/ot-mikrobnykh-udobreniy-do-biosensoriki-nad-chem-rabotaet-institut-mikrobiologii-nan-belarusi.html"> От микробных удобрений до биосенсорики — над чем работает Институт микробиологии НАН Беларуси</a></h5>
                                       
                                        
                                        <div class="meta-info"><a target="_blank" href="https://www.sb.by/articles/ot-mikrobnykh-udobreniy-do-biosensoriki-nad-chem-rabotaet-institut-mikrobiologii-nan-belarusi.html">SB.BY Беларусь сегодня</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="column col-lg-6 col-md-6 col-sm-12">
                            <!--News Block Three-->
                            <div class="news-block-three">
                                <div class="inner-box clearfix">
                                    <div class="image-column">
                                        <figure class="image">
                                            <a target="_blank" href="https://www.sb.by/articles/mikroorganizmy-dlya-makroeffekta.html"><img src="https://mbio.bas-net.by/wp-content/uploads/2025/11/d37e8aacec43f62da0b1d4a0e616bd63.jpg" alt=""></a>
                                        </figure>
                                    </div>
                                    <div class="text-column">
                                        <h5><a target="_blank" href="https://www.sb.by/articles/mikroorganizmy-dlya-makroeffekta.html">Как белорусские микробиологи трудятся на технологический суверенитет страны?</a></h5>
                                        
                                        <div class="meta-info"><a target="_blank" href="https://www.sb.by/articles/mikroorganizmy-dlya-makroeffekta.html">SB.BY Беларусь сегодня</a></div>
                                        
                                    </div>
                                </div>
                            </div>
                            <!--News Block Three-->
                            <div class="news-block-three">
                                <div class="inner-box clearfix">
                                    <div class="image-column">
                                        <figure class="image">
                                            <a href="https://www.youtube.com/watch?v=ZbLFKk0t1QY"><img src="https://mbio.bas-net.by/wp-content/uploads/2026/02/photo_2026-01-28_17-02-21.jpg" alt=""></a>
                                        </figure>
                                    </div>
                                    <div class="text-column">
                                        <h5><a href="https://www.youtube.com/watch?v=ZbLFKk0t1QY">Директор Института микробиологии НАН Беларуси Александр Шепшелев в программе "Наше Утро" на канале ОНТ рассказал про последние разработки белорусских микробиологов</a></h5>
                                        <!-- <div class="text">Pellentesque porta arcu velit faucibs kodales dolor rhoncus sed. Curabitur lacinia masysa vitae sed.</div> -->
                                        <div class="meta-info"><a target="_blank" href="https://www.youtube.com/watch?v=ZbLFKk0t1QY">Телеканал ОНТ</a></div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        
    </section>
    
    <!--youtube-->
    <section class="projects-section-two">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Title Column-->
                <div class="title-column col-xl-3 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner wow fadeInLeft" data-wow-delay="0ms"  data-wow-duration="2000ms">
                        <div class="sec-title bio-theme">
                            <div class="upper-text"><span class="icon flaticon-flash"></span></div>
                            <h2>Смотрите нас на YouTube</h2>
                            <div class="subtitle">Семинары, конференции, интервью</div>
                            <div class="bottom-dots clearfix">
                                <span class="dot line-dot"></span>
                                <span class="dot"></span>
                                <span class="dot"></span>
                                <span class="dot"></span>
                            </div>
                        </div>
                        <div class="text">
                            На нашем YouTube-канале Вы найдете доклады ведущих ученых страны и ближнего зарубежья в области микробиологии, а также отзывы на наши препараты, интервью и многое другое
                        </div>
                        <div class="link-box">
                            <a target="_blank" href="https://www.youtube.com/@inmi_bioproduct"><span class="txt">Смотреть канал</span> <span class="icon flaticon-arrows-11"></span></a>
                        </div>
                    </div>
                </div>
                <!--Carousel Column-->
                <div class="carousel-column col-xl-9 col-lg-12 col-md-12 col-sm-12">
                    <div class="inner">
                        <div class="projects-carousel strnix-carousel owl-theme owl-carousel" data-options='{"loop": true, "margin": 30, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "center": true, "autoplay": false, "autoplayTimeout": 6000, "smartSpeed": 500, "responsive":{ "0" :{ "items": "1" }, "600" :{ "items" : "1" }, "768" :{ "items" : "2" }, "800":{ "items" : "2" }, "1200":{ "items" : "3" }, "1600":{ "items" : "3" }}}'>

                            <!--Project Block-->
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <div class="image">
                                            <img src="https://mbio.bas-net.by/wp-content/uploads/2025/04/k4hezq361haj9fw7h5f1b7utu7yd7q8t.jpg" alt="">
                                        </div>
                                      
                                    </div>
                                    <div class="caption-box">
                                        <div class="caption-inner">
                                            <!--<h5></h5>-->
                                            <div class="cat"><a href="https://youtu.be/gvLfeRO4Y_g">Экскурсия по современному биотехнологическому производству</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<!--Project Block-->
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <div class="image">
                                            <img src="https://mbio.bas-net.by/wp-content/uploads/2025/06/banner_conf-scaled.png" alt="">
                                        </div>
                                       
                                    </div>
                                    <div class="caption-box">
                                        <div class="caption-inner">
                                            <!--<h3><a href="#">Advance Biofuels Systems</a></h3>-->
                                            <div class="cat"><a href="https://www.youtube.com/watch?v=2Qh3nT9iXJQ&t=3771s">XIV Международная научная конференция «Микробные биотехнологии: фундаментальные и прикладные аспекты»</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Project Block-->
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <div class="image">
                                            <img src="https://mbio.bas-net.by/wp-content/uploads/2025/04/card.jpg" alt="">
                                        </div>
                                       
                                    </div>
                                    <div class="caption-box">
                                        <div class="caption-inner">
                                            <!--<h3><a href="#">Advance Biofuels Systems</a></h3>-->
                                            <div class="cat"><a href="https://youtube.com/live/O8qJr0A96zs">Инновационные биотехнологии для охраны окружающей среды</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Project Block-->
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <div class="image">
                                            <img src="https://mbio.bas-net.by/wp-content/uploads/2025/04/belagro.webp" alt="">
                                        </div>
                                       
                                    </div>
                                    <div class="caption-box">
                                        <div class="caption-inner">
                                            <!--<h3><a href="#">БЕЛАГРО-2024</a></h3>-->
                                            <div class="cat"><a href="https://youtu.be/EdKgvLyRf_A">БЕЛАГРО-2024</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Project Block-->
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <div class="image">
                                            <img src="https://mbio.bas-net.by/wp-content/uploads/2025/04/review.webp" alt="">
                                        </div>
                                       
                                    </div>
                                    <div class="caption-box">
                                        <div class="caption-inner">
                                            <!--<h3><</h3>-->
                                            <div class="cat"><a href="https://www.youtube.com/watch?v=kxMEnYiEFN4">Отзыв на кормовую добавку "РУМИБАКТ"</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Project Block-->
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <div class="image">
                                            <img src="https://mbio.bas-net.by/wp-content/uploads/2025/04/enxt.png" alt="">
                                        </div>
                                        
                                    </div>
                                    <div class="caption-box">
                                        <div class="caption-inner">
                                            <!--<h3></h3>-->
                                            <div class="cat"><a href="https://www.youtube.com/watch?v=Xqc8gcy_MRw&t=6s">Семинар “Микробные биотехнологии для сельского хозяйства”</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Project Block-->
                            <div class="project-block-one">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <div class="image">
                                            <img src="https://mbio.bas-net.by/wp-content/uploads/2025/04/silos.webp" alt="">
                                        </div>
                                        
                                    </div>
                                    <div class="caption-box">
                                        <div class="caption-inner">
                                            <!--<h3></h3>-->
                                            <div class="cat"><a href="https://youtu.be/-WWg5Ft6sqw">Про силос и силосование растительной массы!</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    
    <!--Contacts Section-->
    <section class="projects-section-one">
        <div class="outer-container clearfix">

            <!--Text Column-->
            <div class="text-column clearfix">
                <div class="image-layer" style="background-image: url(images/building-scaled.jpg);"></div>
                <div class="inner clearfix">
                    <div class="content wow fadeInLeft" data-wow-delay="0ms"  data-wow-duration="1500ms">
                        <div class="title">
                            <div class="sub-title flex"><span class="fa fa-fan"></span> <h2 class="">Контакты</h2></div>
                            <!-- <h2>Works That Matters</h2> -->
                        </div>
                      

                        <div class="features">
                            <ul>
								
                                <li><span class="gap-icon icon-Flag"></span><?php the_field('address'); ?> </li>
                                <li><span class="gap-icon icon-Phone2"></span> <?php the_field('phone_visual'); ?></li>
                                <li><span class="gap-icon icon-Mail"></span> <?php the_field('email'); ?></li>
                                <li><span class="gap-icon icon-Watch"></span>
                                <?php the_field('work-time'); ?>
                                </li>
                            </ul>
                        </div>
                        <div class="links-box"><a href="<?php echo get_page_link(268); ?>" class="theme-btn btn-style-four"><div class="btn-title"><span class="btn-txt">Контакты подробно</span><span class="btn-icon"><span class="icon flaticon-arrows-11"></span> </span></div></a></div>
                    </div>
                </div>
            </div>
            <!--Image Column-->
            <div class="image-column clearfix">
                <div class="inner clearfix">
                    <div style="position:relative;overflow:hidden; height: 100%;">
                        <a href="https://yandex.by/maps/157/minsk/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Минск</a>
                        <a href="https://yandex.by/maps/157/minsk/house/Zk4YcA9kTUMOQFtpfXVzd3xnbA==/?ll=27.684469%2C53.926048&utm_medium=mapframe&utm_source=maps&z=16" style="color:#eee;font-size:12px;position:absolute;top:14px;height: 100%;">Улица Академика Купревича, 2 на карте Минска — Яндекс Карты</a>
                        <iframe src="https://yandex.by/map-widget/v1/?ll=27.684469%2C53.926048&mode=whatshere&whatshere%5Bpoint%5D=27.684469%2C53.926048&whatshere%5Bzoom%5D=17&z=16" width="100%"  frameborder="1" allowfullscreen="true" style="position:relative; height:100%"></iframe>
                    </div>                    
                </div>
            </div>
        </div>
    </section>
    
    <?php get_footer(); ?>