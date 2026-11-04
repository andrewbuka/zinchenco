<?php 
require_once __DIR__ . '/inc/multilingual.php';
    add_action( 'wp_enqueue_scripts', function() {
        
        //  if( is_page( 96 )  || is_page( 152)){
        //     wp_enqueue_style( 'not-main', get_template_directory_uri() . '/assets/styles/not-main.css');
        // }

        
        // wp_enqueue_style( 'bootstrap', get_template_directory_uri() . 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css');
        // wp_enqueue_style( 'font-popins', get_template_directory_uri() . 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap');
        // wp_enqueue_style( 'font-awesome.min', get_template_directory_uri() . 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
       
        
       
        
        
        wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css');
        wp_enqueue_style( 'stroke-gap-icons', get_template_directory_uri() . '/assets/css/stroke-gap-icons.css');
        wp_enqueue_style( 'scrollbar', get_template_directory_uri() . '/assets/css/scrollbar.css');
        wp_enqueue_style( 'responsive', get_template_directory_uri() . '/assets/css/responsive.css');        
        wp_enqueue_style( 'owl', get_template_directory_uri() . '/assets/css/owl.css');
        wp_enqueue_style( 'my-styles', get_template_directory_uri() . '/assets/css/my-styles.css');
        wp_enqueue_style( 'line-awesome', get_template_directory_uri() . '/assets/css/line-awesome.css');
        wp_enqueue_style( 'jquery.fancybox.min', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css');
        wp_enqueue_style( 'jquery-ui', get_template_directory_uri() . '/assets/css/jquery-ui.css');
        wp_enqueue_style( 'hover', get_template_directory_uri() . '/assets/css/hover.css');
        wp_enqueue_style( 'fontawesome-all', get_template_directory_uri() . '/assets/css/fontawesome-all.css');
        wp_enqueue_style( 'flaticon', get_template_directory_uri() . '/assets/css/flaticon.css');
        wp_enqueue_style( 'custom-animate', get_template_directory_uri() . '/assets/css/custom-animate.css');
        wp_enqueue_style( 'color', get_template_directory_uri() . '/assets/css/color.css');
        wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css');
        wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css');


 

       


        wp_deregister_script( 'jquery' );
	    wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js');
	    wp_enqueue_script( 'jquery' );


        // wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/js/jquery.js', array('jquery'), 'null', true );
        wp_enqueue_script( 'jquery.fancybox', get_template_directory_uri() . '/assets/js/jquery.fancybox.js', array('jquery'), 'null', true );
        wp_enqueue_script( 'jquery.bootstrap-touchspin', get_template_directory_uri() . '/assets/js/jquery.bootstrap-touchspin.js', array('jquery'), 'null', true );
        wp_enqueue_script( 'jquery-ui', get_template_directory_uri() . '/assets/js/jquery-ui.js', array('jquery'), 'null', true );       
        wp_enqueue_script( 'owl', get_template_directory_uri() . '/assets/js/owl.js', array(), 'null', true );
        
        wp_enqueue_script( 'my-js', get_template_directory_uri() . '/assets/js/my-js.js', array(), 'null', true );

        wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.js', array(), 'null', true );
        wp_enqueue_script( 'validate', get_template_directory_uri() . '/assets/js/validate.js', array(), 'null', true );
        wp_enqueue_script( 'scrollbar', get_template_directory_uri() . '/assets/js/scrollbar.js', array(), 'null', true );
        wp_enqueue_script( 'respond', get_template_directory_uri() . '/assets/js/respond.js', array(), 'null', true );
        wp_enqueue_script( 'popper.min', get_template_directory_uri() . '/assets/js/popper.min.js', array(), 'null', true );
        wp_enqueue_script( 'mixitup', get_template_directory_uri() . '/assets/js/mixitup.js', array(), 'null', true );
        wp_enqueue_script( 'map-script', get_template_directory_uri() . '/assets/js/map-script.js', array(), 'null', true );
        // wp_enqueue_script( 'map-script', get_template_directory_uri() . '/assets/js/map-script.js', array(), 'null', true );
        wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/js/isotope.js', array(), 'null', true );
        wp_enqueue_script( 'element-in-view', get_template_directory_uri() . '/assets/js/element-in-view.js.js', array(), 'null', true );
        wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/assets/js/custom-script.js', array(), 'null', true );

        wp_enqueue_script( 'countdown', get_template_directory_uri() . '/assets/js/countdown.js', array(), 'null', true );

        wp_enqueue_script( 'bootstrap.min', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), 'null', true );

        wp_enqueue_script( 'appear', get_template_directory_uri() . '/assets/js/appear.js', array(), 'null', true );

        
        
       
        
       

        
        
        
        
        });

        
    

        


    add_theme_support( 'post-thumbnails');
    add_theme_support( 'custom-logo');
    add_theme_support( 'title-tag');



    // хук для регистрации
add_action( 'init', 'create_taxonomy' );
function create_taxonomy(){

	// список параметров: wp-kama.ru/function/get_taxonomy_labels
	
        $args = array(
            'labels' => array(
                'menu_name' => 'Оформление заказа'
            ),

            'public' => true,
            'show_in_rest' => true,
            'supports' => array ( 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats' ),
            'query_var'           => true
        );      
        
        register_post_type( 'sugar-prod', $args);

        $args4 = array(
            'labels' => array(
                'menu_name' => 'ссылки',
            ),
            'rewrite' => array('slug' => 'links')

            // 'public' => true,
            // 'show_in_rest' => true,
            // 'supports' => array ( 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats' ),
            // 'query_var'           => true,
            // 'hierarchical' => true,
            
        );      
        
        register_taxonomy( 'aaa', 'sugar-production', $args4);

        

        $args2 = array(
            'labels' => array(
                'menu_name' => 'Социальные сети'
            ),

            'public' => true,
            'show_in_rest' => true,
            // 'supports' => array ( 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats' ),
            // 'query_var'           => true,
           
        );      
        
        register_post_type( 'sugar-production', $args2);

        $args3 = array(
            'labels' => array(
                'menu_name' => 'Гавно'
            ),

            'public' => true,
            
        );

        register_taxonomy('gavno', 'sugar-prod', $args3 );


        
}

add_filter( 'upload_mimes', 'svg_upload_allow' );

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}




?>



