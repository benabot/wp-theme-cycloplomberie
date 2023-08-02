</main>

<footer>
    <svg xmlns="http://www.w3.org/2000/svg" style="height: 0; width: 0; position: absolute;">
        <symbol id="icon-facebook-1" viewBox="0 0 64 64">
            <title>facebook 1</title>
            <g class="nc-icon-wrapper">
                <path d="M58.74 32.04c0-14.74-11.96-26.7-26.7-26.7s-26.7 11.96-26.7 26.7c0 12.92 9.18 23.68 21.36 26.17v-18.16h-5.34v-8.01h5.34v-6.68c0-5.15 4.19-9.34 9.34-9.34h6.68v8.01h-5.34c-1.47 0-2.67 1.2-2.67 2.67v5.34h8.01v8.01h-8.01v18.56c13.48-1.33 24.03-12.71 24.03-26.57z" fill="currentColor" stroke="none"></path>
            </g>
        </symbol>
        <symbol id="icon-icons8-google" viewBox="0 0 50 50">
            <title>icons8 google</title>
            <g class="nc-icon-wrapper">
                <path d="M25.996 48C13.313 48 2.992 37.684 2.992 25S13.312 2 25.996 2a22.954 22.954 0 0 1 15.492 5.996l.774.707-7.586 7.586-.703-.602a12.277 12.277 0 0 0-7.977-2.957c-6.766 0-12.273 5.504-12.273 12.27s5.507 12.27 12.273 12.27c4.879 0 8.734-2.493 10.55-6.739h-11.55V20.176l22.55.031.169.793c1.176 5.582.234 13.793-4.531 19.668C39.238 45.531 33.457 48 25.996 48z" fill="currentColor" stroke="none"></path>
            </g>
        </symbol>
        <symbol id="icon-icons8-youtube" viewBox="0 0 50 50">
            <title>icons8 youtube</title>
            <g class="nc-icon-wrapper">
                <path d="M24.402 9c-6.601 0-12.8.5-16.101 1.2-2.2.5-4.102 2-4.5 4.3C3.402 16.898 3 20.5 3 25s.398 8 .898 10.5c.403 2.2 2.301 3.8 4.5 4.3 3.504.7 9.5 1.2 16.102 1.2s12.598-.5 16.098-1.2c2.203-.5 4.101-2 4.5-4.3.402-2.5.902-6.098 1-10.598 0-4.5-.5-8.101-1-10.601-.399-2.2-2.297-3.801-4.5-4.301-3.5-.5-9.598-1-16.196-1zm0 2c7.2 0 12.996.598 15.797 1.098 1.5.402 2.7 1.402 2.899 2.703.601 3.199 1 6.601 1 10.101C44 29.2 43.5 32.7 43.098 35.2c-.297 1.899-2.297 2.5-2.899 2.703-3.601.7-9.601 1.196-15.601 1.196S12.5 38.699 9 37.902C7.5 37.5 6.3 36.5 6.102 35.2 5.3 32.4 5 28.7 5 25c0-4.602.402-8 .8-10.098C6.103 13 8.2 12.398 8.7 12.2 12 11.5 18.101 11 24.401 11zM19 17v16l14-8zm2 3.402L29 25l-8 4.598z" fill="currentColor" stroke="none"></path>
            </g>
        </symbol>
        <symbol id="icon-icons8-linkedin" viewBox="0 0 50 50">
            <title>icons8 linkedin</title>
            <g class="nc-icon-wrapper">
                <path d="M41 4H9C6.24 4 4 6.24 4 9v32c0 2.76 2.24 5 5 5h32c2.76 0 5-2.24 5-5V9c0-2.76-2.24-5-5-5zM17 20v19h-6V20h6zm-6-5.53c0-1.4 1.2-2.47 3-2.47s2.93 1.07 3 2.47c0 1.4-1.12 2.53-3 2.53-1.8 0-3-1.13-3-2.53zM39 39h-6V29c0-2-1-4-3.5-4.04h-.08C27 24.96 26 27.02 26 29v10h-6V20h6v2.56S27.93 20 31.81 20c3.97 0 7.19 2.73 7.19 8.26V39z" fill="currentColor" stroke="none"></path>
            </g>
        </symbol>
    </svg>
    <div class="footer--top">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo-cyclo_plomberie-footer.svg" alt="plombier à vélo amiens">
        <div class="footer--text">
            <?php wp_nav_menu(
                array(
                    'theme_location' => 'footer',
                    'container' => 'ul',
                    'menu_id' => 'footer__menu',
                )
            );

            ?>
            <div class="footer--credits">
                <div class="rezo-socio">
                    <!-- <svg class="icon">
                        <use href="#icon-facebook-1" />
                    </svg>
                    <svg class="icon">
                        <use href="#icon-icons8-google" />
                    </svg>
                    <svg class="icon stroke-4">
                        <use href="#icon-icons8-youtube" />
                    </svg> -->
                    <a href="https://www.linkedin.com/in/sylvain-bonneau-3836101b6/" target="_blank">
                        <svg class="icon">
                            <use href="#icon-icons8-linkedin" />
                        </svg>
                    </a>
                </div>

                <p>Site éco-conçu par <a href="https:/beabot.fr" target="_blank">BeAbot</a></p>
                <p> - </p>
                <p>La cyclo-plomberie Amiens <?php echo date('Y'); ?> </p>

            </div>

        </div>
    </div>

</footer>
<?php wp_footer(); ?>
</body>

</html>