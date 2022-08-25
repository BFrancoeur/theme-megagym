    <footer class="site-footer container">
        <div class="footer-content">
            <?php
            $args = array(
                'theme_location' => 'main-menu',
                'container'      => 'nav',
                'container_class' => 'footer-menu'
            );
            wp_nav_menu($args);
            ?>


            <p class="copyright"><span>© </span><span><?php echo date('Y'); ?> </span><span><?php bloginfo('name'); ?><span>. </span></span><span>&nbsp; &nbsp;All Rights Reserved.</span></p>
        </div>
    </footer>
    <?php wp_footer(); ?>
    </body>

    </html>