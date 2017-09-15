<?php
/**
    Template Name: Home Page
 */



get_header(); ?>

	<!-- hero section -->
    <?php get_template_part('template-parts/content','hero'); ?>

		<!-- Optin section -->
		<?php get_template_part('template-parts/content','optin'); ?>

		<!-- Boost your income -->
		<?php get_template_part('template-parts/content','boost'); ?>

		<!-- COURSE FEATURES-->
		<?php get_template_part('template-parts/content','courseFeatures'); ?>

		<!--  PROJECT FEATURES-->
		<?php get_template_part('template-parts/content','projectFeatures'); ?>

		<!--  PROJECT FEATURES-->
		<?php get_template_part('template-parts/content','video'); ?>

		<!--  PROJECT FEATURES-->
		<?php get_template_part('template-parts/content','instructor'); ?>

		<!--  PROJECT FEATURES-->
		<?php get_template_part('template-parts/content','testimonials'); ?>

<?php get_footer(); ?>
