<?php
/**
 * Template Name: Редактируемая страница (RU/BE/EN)
 * Template Post Type: page
 *
 * Create one WordPress page per language, assign this same template to each,
 * and connect the pages in Polylang. The translated body stays in the editor.
 */

get_header();
?>

<main class="mbio-editable-page" id="main-content">
    <?php while ( have_posts() ) : the_post(); ?>
        <section class="page-banner <?php echo has_post_thumbnail() ? 'has-image' : 'without-image'; ?>">
            <?php if ( has_post_thumbnail() ) : ?>
                <div class="image-layer" style="background-image: url('<?php echo esc_url( get_the_post_thumbnail_url( get_the_ID(), 'full' ) ); ?>');"></div>
            <?php endif; ?>
            <div class="auto-container">
                <nav class="breadcrumb-box" aria-label="<?php echo esc_attr( mbio_t( 'Навигационная цепочка' ) ); ?>">
                    <ul class="bread-crumb clearfix">
                        <li><a href="<?php echo esc_url( mbio_home_link() ); ?>"><?php echo esc_html( mbio_t( 'Главная' ) ); ?></a></li>
                        <li class="active" aria-current="page"><?php the_title(); ?></li>
                    </ul>
                </nav>
                <h1><?php the_title(); ?></h1>
            </div>
        </section>
        <section class="sidebar-page-container my-padding">
            <div class="auto-container">
                <div class="row clearfix">
                    <article class="content-side col-lg-12">
                        <div class="service-details">
                            <div class="details-inner">
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>
