<?php

// =============================================================================
// VIEWS/GLOBAL/_FOOTER.PHP
// -----------------------------------------------------------------------------
// Includes the wp_footer() hook and closes out the <body> and <html> tags.
// =============================================================================

?>

  <?php do_action( 'x_before_site_end' ); ?>

  </div> <!-- END #top.site -->

  <?php do_action( 'x_after_site_end' ); ?>

<?php wp_footer(); ?>
    
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/shared/jquery-2.2.3.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap/js/bootstrap.min.js"></script>
    <!--<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/shared/angular.min.js"></script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/shared/angular-route.min.js"></script>-->
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/shared/angular-sanitize.min.js"></script>
    <!--<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/app.js"></script>-->

<!--- controllers --->

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/controllers/HomeCtrl.js"></script>
</body>
</html>