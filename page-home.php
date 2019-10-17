<?php

/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package seed
 */

get_header();

?>
<div id="service"></div>
<?php while (have_posts()) : the_post(); ?>

    <div class="s-container main-body service">

        <h2 class="header">บริการ</h2>
        <div class="header_description">
            บริการจดทะเบียนธุรกิจ, บริการบัญชีเงินเดือน และประกันสังคม<br>
            วางแผนภาษี และระบบบัญชี และเป็นที่ปรึกษาด้านบัญชีและภาษีอากร
        </div>

        <?php if (get_field('service')) :
                $i = 0;
                ?>

            <?php
                    while (has_sub_field('service')) :
                        $image = get_sub_field('image')['url'];
                        // echo $image;
                        if ($i % 2 === 0) :
                            // left

                            ?>

                    <div class="s-grid">
                        <div class="service_flex">
                            <div class="service_thumb">
                                <img class="img_cover" src="<?php echo $image ?>">
                            </div>
                            <div class="content">
                                <h3><?php the_sub_field('title') ?></h3>
                                <div class="title"><?php the_sub_field('detail') ?></div>
                            </div>
                        </div>
                    </div>

                <?php else : ?>
                    <div class="s-grid">
                        <div class="service_flex">
                            <div class="content order2">
                                <h3><?php the_sub_field('title') ?></h3>
                                <div class="title"><?php the_sub_field('detail') ?></div>
                            </div>

                            <div class="service_thumb order1">
                                <img class="img_cover" src="<?php echo $image ?>">
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php
                        $i++;
                    endwhile; ?>

        <?php endif; ?>

    </div>

    <div id="aboutus" class="s-container">
        <h2 class="header header_normal">เกี่ยวกับเรา</h2>
    </div>

    <div class="s-container main-body">

        <div id="primary" class="content-area">
            <main id="main" class="site-main -hide-title">

                <?php get_template_part('template-parts/content', 'page'); ?>
                <?php if (comments_open() || get_comments_number()) : comments_template();
                    endif; ?>
                <?php wp_reset_postdata(); ?>

            </main>
        </div>
    </div>
<?php endwhile; ?>
<?php get_footer(); ?>