	
    	<footer>
    		&copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.
    	</footer>

        <?php
            // Figure out what our server name is
            $host = $_SERVER['HTTP_HOST'];

            // If it's the dev environment...
            if ($host == 'wordpress-boilerplate.dev') {
                // Then provide the JS files individually for easier debugging.
                include 'footer-scripts.php';
            } else {
        ?>
                <!-- Otherwise, provide the compiled and uglified JS file. -->
                <script src="<?php echo get_template_directory_uri(); ?>/_ui/compiled/footer-scripts.min.js"></script>
        <?php } ?>

        <!-- Conditionally load higher resolution stylesheet if needed. -->
        <link rel="stylesheet" media="only screen and (-webkit-min-device-pixel-ratio: 1.5), only screen and (-o-min-device-pixel-ratio: 3/2), only screen and (min-device-pixel-ratio: 1.5)" href="_ui/css/2x.css">

        <!-- Conditionally load respond.js and selectivizr for IE8 media query and pseudo element support -->
        <!--[if lt IE 9]><script src="<?php echo get_template_directory_uri(); ?>/_ui/js/no-compile/selectivizr.js"></script><![endif]-->
        <!--[if lt IE 9]><script src="<?php echo get_template_directory_uri(); ?>/_ui/js/no-compile/respond.js"></script><![endif]-->

    </body>
</html>