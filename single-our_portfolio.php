<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Fly_Techno
 */

get_header();
?>

    <!-- banner start -->
    <div class="slideWrp">
        <div class="tp-banner-container sliderWraper" id="home">
            <div class="tp-banner1">
                <img src="<?php echo bloginfo('stylesheet_directory') ?>'/assets/images/banner-simple2.jpg'" height="37%" width="100%" alt="">
            </div>
        </div>
    </div>
    <!-- banner end -->

    <div class="about-wrap" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="aboutImg"><img src="<?php echo get_field("image")["url"]; ?>" alt="spsc-group"></div>
                </div>
                <div class="col-md-6">
                    <h1><?php the_title(); ?></h1>
                    <!--<div class="aboutTxt"></div>-->
                    <p><?php the_field("description") ?></p>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();
