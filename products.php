<?php 
    // template Name: Products;
?>

<?php get_header(); ?>

<section class="page-banner">
    <div class="image-layer" style="background-image: url(<?php the_post_thumbnail_url(); ?>);"></div>

    <div class="auto-container ">
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


<div class="sidebar-page-container kkk">
    <div class="auto-container prod-container">
        <div class="row clearfix">
            
           

            <!--Sidebar Side-->
<!--             <div class="sidebar-side"> -->
                <aside class="sidebar service-sidebar">
                    <!--Cathegories-->
                    <div class="sidebar-widget services-widget my-sidebar-widget">
                        <div class="widget-inner">
                            <ul class="prod-list">
                                <li class="prod-li active" data-cath='preserve-cath'><a href="#preserve-id"><span class="txt">Биоконсерванты</span></a></li>
                                <li class="prod-li" data-cath='save-cath'>
                                    <a href="#saving-id"><span class="txt">
                                            Биопрепараты для очистки воды, почвы     и воздуха
                                        </span> 
                                    </a>
                                </li>
                                <li class="prod-li" data-cath='feed-cath'>
                                    <a href="#feed-id"><span class="txt">
                                            Кормовые добавки и пробиотические ветпрепараты
                                        </span> 
									</a>
                                </li>    
                                <li class="prod-li" data-cath='plant-cath'>
                                    <a href="#plant-id"><span class="txt">
                                            Микробные препараты для растениеводства
                                        </span> 
                                    </a>
                                </li>
                                <li class="prod-li" data-cath='fish-cath'>
                                    <a href="#fish-id"><span class="txt">
                                            Биопрепараты для промышленного рыбоводства
                                        </span> 
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </aside>
<!--             </div> -->
            
            
             <!--Content Side-->
            <div class="content-side ">
                <div class="service-details">
                    <div class="details-inner">
                        
                   		<div id="preserve-id" class="preserve-box">
							
							<?php 
								function get_number_post($title) {
									global $post;

									$myposts_page = get_posts([ 
									'numberposts' => -1,
									'offset'      => 1,
									'tag'    => 'preserve-page'
									]);

									if( $myposts_page ){
									foreach( $myposts_page as $post ){

										$title_preserve = get_the_title();

										if($title_preserve === $title) {
										$number_post_preserve = get_the_ID();
										return $number_post_preserve;
										}

									}
									}
								}
							?>
							
							
							
							<?php
								global $post;

								$myposts = get_posts([
									'numberposts' => -1,
									'offset'      => 1,
									'tag'    => 'preserve'
								]);

								if( $myposts ){
									foreach( $myposts as $post ){
										setup_postdata( $post );
										 $title_pres = get_the_title();      
                       					 $number_post_pres =  get_number_post($title_pres);
										?>
											<div class="product-item">
												

												<div class="desc-btn-block">
													<img class="prod-image" src="<?php the_post_thumbnail_url(); ?>">
													
														<div class="anchor">
															<div class="links-box my-links-box ppp">
																<a href="<?php echo get_page_link( $number_post_pres ); ?>" class="theme-btn btn-style-four my-btn-style">
																	<div class="btn-title">
																		<span class="btn-txt">Подробно</span>
																		<span class="btn-icon">
																			<span class="icon flaticon-arrows-11"></span> 
																		</span>
																	</div>
																</a>
															</div>
															<span><?php the_content(); ?></span>
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
						
						
						
						
						<div id="saving-id" class="saving-box none">
							<?php 
								function get_number_post_save($title) {
									global $post;

									$myposts_page = get_posts([ 
									'numberposts' => -1,
									'offset'      => 1,
									'tag'    => 'saving-page-2'
									]);

									if( $myposts_page ){
									foreach( $myposts_page as $post ){

										$title_saving = get_the_title();

										if($title_saving === $title) {
										$number_post_saving = get_the_ID();
										return $number_post_saving;
										}

									}
									}
								}
							?>
							
							<?php
								global $post;

								$myposts = get_posts([
									'numberposts' => -1,
									'offset'      => 1,
									'tag'    => 'saving'
								]);

								if( $myposts ){
									foreach( $myposts as $post ){
										setup_postdata( $post );
										$title_save = get_the_title();      
                       					 $number_post_save =  get_number_post_save($title_save);
										?>
											<div class="product-item">
												

												<div class="desc-btn-block">
													<img class="prod-image" src="<?php the_post_thumbnail_url(); ?>">
													<div class="anchor">
														<div class="links-box my-links-box ppp">
															<a href="<?php echo get_page_link( $number_post_save ); ?>" class="theme-btn btn-style-four my-btn-style">
																<div class="btn-title">
																	<span class="btn-txt">Подробно</span>
																	<span class="btn-icon">
																		<span class="icon flaticon-arrows-11"></span> 
																	</span>
																</div>
															</a>
														</div>
														<?php the_content(); ?>
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
						
						
						<div id="feed-id" class="feed-box none">
							<?php 
								function get_number_post_feed($title) {
									global $post;

									$myposts_page = get_posts([ 
									'numberposts' => -1,
									'offset'      => 1,
									'tag'    => 'feed-page'
									]);

									if( $myposts_page ){
									foreach( $myposts_page as $post ){

										$title_feed = get_the_title();

										if($title_feed === $title) {
										$number_post_feed = get_the_ID();
										return $number_post_feed;
										}

									}
									}
								}
							?>
							<?php
								global $post;

								$myposts = get_posts([
									'numberposts' => -1,
									'offset'      => 1,
									'tag'    => 'feed'
								]);

								if( $myposts ){
									foreach( $myposts as $post ){
										setup_postdata( $post );
										$title_feed_f = get_the_title();      
                       					 $number_post_feed_f =  get_number_post_feed($title_feed_f);
										?>
											<div class="product-item">
												

												<div class="desc-btn-block">
													<img class="prod-image" src="<?php the_post_thumbnail_url(); ?>">
													
													<div class="anchor">
														<div class="links-box my-links-box ppp">
															<a href="<?php echo get_page_link( $number_post_feed_f ); ?>" class="theme-btn btn-style-four my-btn-style">
																<div class="btn-title">
																	<span class="btn-txt">Подробно</span>
																	<span class="btn-icon">
																		<span class="icon flaticon-arrows-11"></span> 
																	</span>
																</div>
															</a>
														</div>
														<?php the_content(); ?>
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
						
						
						<div id="plant-id" class="plant-box none">
							<?php 
								function get_number_post_plant($title) {
									global $post;

									$myposts_page = get_posts([ 
									'numberposts' => -1,
									'offset'      => 1,
									'tag'    => 'plant-page'
									]);

									if( $myposts_page ){
									foreach( $myposts_page as $post ){

										$title_plant = get_the_title();

										if($title_plant === $title) {
										$number_post_plant = get_the_ID();
										return $number_post_plant;
										}

									}
									}
								}
							?>
							<?php
								global $post;

								$myposts = get_posts([
									'numberposts' => -1,
									'offset'      => 1,
									'tag'    => 'plant'
								]);

								if( $myposts ){
									foreach( $myposts as $post ){
										setup_postdata( $post );
										$title_plant_p = get_the_title();      
                       					 $number_post_plant_p =  get_number_post_plant($title_plant_p);
										?>
											<div class="product-item">
												

												<div class="desc-btn-block">
													<img class="prod-image" src="<?php the_post_thumbnail_url(); ?>">
													<div class="anchor">
														<div class="links-box my-links-box ppp">
															<a href="<?php echo get_page_link( $number_post_plant_p ); ?>" class="theme-btn btn-style-four my-btn-style">
																<div class="btn-title">
																	<span class="btn-txt">Подробно</span>
																	<span class="btn-icon">
																		<span class="icon flaticon-arrows-11"></span> 
																	</span>
																</div>
															</a>
														</div>
														<?php the_content(); ?>
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
						
						
						
						
						<div id="fish-id" class="fish-box none">
							<?php 
								function get_number_post_fish($title) {
									global $post;

									$myposts_page = get_posts([ 
									'numberposts' => -1,
									'offset'      => 1,
									'tag'    => 'fish-page'
									]);

									if( $myposts_page ){
									foreach( $myposts_page as $post ){

										$title_fish = get_the_title();

										if($title_fish === $title) {
										$number_post_fish = get_the_ID();
										return $number_post_fish;
										}

									}
									}
								}
							?>
							<?php
								global $post;

								$myposts = get_posts([
									'numberposts' => -1,
									'offset'      => 1,
									'tag'    => 'fish'
								]);

								if( $myposts ){
									foreach( $myposts as $post ){
										setup_postdata( $post );
										$title_fish_f = get_the_title();      
                       					 $number_post_fish_f =  get_number_post_fish($title_fish_f);
										?>
											<div class="product-item">
												

												<div class="desc-btn-block">
													<img class="prod-image" src="<?php the_post_thumbnail_url(); ?>">
													
													<div class="anchor">
														<div class="links-box my-links-box ppp">
															<a href="<?php echo get_page_link( $number_post_fish_f ); ?>" class="theme-btn btn-style-four my-btn-style">
																<div class="btn-title"> 
																	<span class="btn-txt">Подробно</span>
																	<span class="btn-icon">
																		<span class="icon flaticon-arrows-11"></span> 
																	</span>
																</div>
															</a>
														</div>
														<?php the_content(); ?>
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
                </div>
            </div>
            
        </div>
    </div>
</div>

<?php get_footer(); ?>