<?php
/*
    Template Name: Service Page
 * */
if (  pll_current_language() == 'km') {
    $our_service_title      = get_field("our_service_title", 19);
} else {
    $our_service_title      = get_field("our_service_title", 12);
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

    <div class="porfolio-wrap" id="porfolio">
        <div class="container">
            <h1><?php echo $our_service_title ?></h1>
            <ul class="row portfolio-service">
                <?php $arg = ['post_type' => 'our_service', 'orderby' => 'post_id', 'order' => 'DESC']; ?>
                <?php $services = new WP_Query($arg) ?>
                <?php while ( $services->have_posts() ) : $services->the_post(); ?>
                    <li class="col-md-4 col-sm-6">
                        <div class="service-image"><img src="<?php  echo  get_field('image')['url']; ?>" alt="<?php  echo  get_field('image')['alt']; ?>">
                            <div class="hoverlink">
                                <div class="icon"><a href="<?php the_permalink(); ?>"><i class="fa fa-link" aria-hidden="true"></i></a></div>
                            </div>
                        </div>
                        <div class="service-details">
                            <h3><a style="color:black" href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
                            <p><?php echo wp_html_excerpt($services->post->description, 30), '...'; ?></p>
                            <div class="readmore"><a href="<?php the_permalink(); ?>"><?php echo pll__("Read More") ?></a></div>
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>

<?php
get_footer();
