</div>
<!--#content-->

<?php if (is_active_sidebar('footbar')) : ?>

    <aside id="footbar" class="site-footbar">
        <div class="s-container">
            <?php dynamic_sidebar('footbar'); ?>
        </div>
    </aside>

<?php else : ?>

    <div class="site-footer-space"></div>

    <footer id="colophon" class="site-footer">
        <div class="s-container">
            <div class="footer_block">
                <div class="block">
                    <div class="interest_link">
                        <h4>ลิงค์ที่น่าสนใจ</h4>
                        <div>
                            <a href="http://www.rd.go.th" target="_blank"><i class="si-globe"></i> กรมสรรพากร</a>
                            <a href="https://www.sso.go.th" target="_blank"><i class="si-globe"></i> สำนักงานประกันสังคม</a>
                        </div>
                    </div>
                </div>
                <div class="block">
                    <div class="info_site">
                        <?php seed_logo(); ?> <?php seed_title(); ?>
                    </div>
                </div>
                <div class="block">
                    <div class="copyright">Copyright &copy; <?php echo date("Y"); ?> <?php bloginfo('name'); ?>.</div>
                </div>
            </div>
        </div>

        <div class="footer_line"></div>

        <div class="s-container">
            <div class="site-info">
                <div class="meeweb_block">
                    <a href="https://www.meewebs.com" target="_blank">
                        <img class="meeweb-logo" src="https://www.meewebs.com/wp-content/uploads/2019/07/white_logo_transparent_background-4.png" alt="รับทำเว็บไซต์ ด้วยเวิร์ดเพรส ราคาถูก รองรับ SEO กับ MEEWEBS.COM"> รับทำเว็บไซต์ ด้วยเวิร์ดเพรส รองรับ SEO
                    </a>
                </div>
            </div>
        </div>
    </footer> <?php endif; ?>
</div>
<!--#page-->


<?php /* FOR SITE-MEMBER */ ?>
<div class="s-modal-bg"></div>
<?php if ($GLOBALS['s_member_url'] != 'none') : ?>
    <div class="s-modal s-modal-login" data-s-modal="site-login">
        <span class="s-modal-close"><i class="si-cross"></i></span>
        <?php get_template_part('template-parts/account', 'login'); ?>
    </div>
<?php endif; ?>

<?php wp_footer(); ?>
</body>

</html>