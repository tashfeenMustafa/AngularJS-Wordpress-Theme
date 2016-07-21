<?php

// =============================================================================
// VIEWS/GLOBAL/_HEADER.PHP
// -----------------------------------------------------------------------------
// Declares the DOCTYPE for the site and includes the <head>.
// =============================================================================

?>

<!DOCTYPE html>
<!--[if IE 9]><html class="no-js ie9" <?php language_attributes(); ?>><![endif]-->
<!--[if gt IE 9]><!--><html ng-app="IdentityInclusion" class="no-js" <?php language_attributes(); ?>><!--<![endif]-->

<head>
    <base href="/"
    <?php wp_head(); ?>
    <link href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
</head>

<body <?php body_class(); ?>>

