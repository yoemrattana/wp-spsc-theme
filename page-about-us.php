<?php
/**
    Template Name: About Us Page
 */
if (  pll_current_language() == 'km') {
    $about_us_image         = get_field("about_us_image", 19);
    $about_us_title         = get_field("about_us_title", 19);
    $about_us_subtitle      = get_field("about_us_subtitle", 19);
    $about_us_description   = get_field("about_us_description", 19);
} else {
    $about_us_image         = get_field("about_us_image", 12);
    $about_us_title         = get_field("about_us_title", 12);
    $about_us_subtitle      = get_field("about_us_subtitle", 12);
    $about_us_description   = get_field("about_us_description", 12);
}


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
<?php //echo pll_current_language(); ?>
    <!--About start-->
    <div class="about-wrap" id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="aboutImg"><img src="<?php echo $about_us_image['url'] ?>" alt="<?php echo $about_us_image['alt'] ?>"></div>
                </div>
                <div class="col-md-6">
                    <h1><?php echo $about_us_title?></h1>
                    <div class="aboutTxt"><?php echo $about_us_subtitle ?></div>
                    <p><?php echo $about_us_description?></p>
                    <!--<div class="readmore"><a href="<?php echo home_url('/about-us')?>" class="btn"><?php echo pll__("Read More") ?></a></div>-->

                </div>
            </div>
        </div>
    </div>

    <!--About start-->

<?php
get_footer();