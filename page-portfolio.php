<?php
/*
    Template Name: Portfolio Page
 * */
if (  pll_current_language() == 'km') {
    $our_portfolio_title      = get_field("our_portfolios_title", 19);
} else {
    $our_portfolio_title      = get_field("our_portfolios_title", 12);
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
            <h1><?php echo $our_portfolio_title ?></h1>
            <ul class="row portfolio-service">
                <?php $arg = ['post_type' => 'our_portfolio', 'orderby' => 'post_id', 'order' => 'DESC', 'posts_per_page' => -1 ]; ?>
                <?php $portfolios = new WP_Query($arg) ?>
                <?php while ( $portfolios->have_posts() ) : $portfolios->the_post(); ?>
                    <li class="col-md-4 col-sm-6">
                        <div class="project-image"><img src="<?php  echo  get_field('image')['url']; ?>" alt="<?php  echo  get_field('image')['alt']; ?>">
                            <div class="portfolio-overley">
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
                                <div class="portfolio-tags"> <?php the_field("client") ?></div>
                            </div>
                        </div>
                    </li>
                <?php endwhile; ?>
            </ul>
        </div>
    </div>

<?php
get_footer();
