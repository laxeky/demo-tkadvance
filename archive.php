<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package seed
 */
get_header(); ?>

<div class="main-header -<?php seed_banner_class(get_the_ID()); ?>">
    <?php seed_banner_bg(get_the_ID()); ?>
    <div class="s-container">
        <div class="main-title">
            <h2><a href="<?php global $wp; echo home_url( $wp->request ) ?>"><?php the_archive_title(); ?></a></h2>
            <?php if ( function_exists('yoast_breadcrumb') ) { yoast_breadcrumb( '<h4 id="breadcrumbs">','</h4>' );}?>
        </div>
    </div>
</div>

<div class="s-container main-body <?php echo '-'.$GLOBALS['s_blog_layout']; ?>">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <?php if ( have_posts() ) : ?>

            <header class="page-header">
                <?php
					the_archive_title( '<h1 class="page-title entry-title hide">', '</h1>' );
					the_archive_description( '<div class="archive-description">', '</div>' );
					?>
            </header>

            <?php 
                echo '<div class="s-grid -m'.$GLOBALS['s_blog_columns_m'].' -d'.$GLOBALS['s_blog_columns_d'].'">';
                while ( have_posts() ) : the_post();
                get_template_part( 'template-parts/content', $GLOBALS['s_blog_columns_d_style']);
                endwhile; 
                echo '</div>';
                seed_posts_navigation(); 
            ?>

            <?php else : ?>

            <?php get_template_part( 'template-parts/content', 'none' ); ?>

            <?php endif; ?>

        </main>
    </div>

    <?php 
	switch ($GLOBALS['s_blog_layout']) {
		case 'rightbar':
		get_sidebar('right'); 
		break;
		case 'leftbar':
		get_sidebar('left'); 
		break;
		case 'full-width':
		break;
		default:
		break;
	}
	?>
</div>
<?php get_footer(); ?>