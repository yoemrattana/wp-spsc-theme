<?php
/*
    Template Name: Home Page
 * */

$sliders                = get_field("images");

$about_us_image         = get_field("about_us_image");
$about_us_title         = get_field("about_us_title");
$about_us_subtitle      = get_field("about_us_subtitle");
$about_us_description   = get_field("about_us_description");

$our_service_title      = get_field("our_service_title");

$our_portfolio_title    = get_field("our_portfolios_title");

$testimonial_title      = get_field("testimonial_title");

$our_team_title         = get_field("our_team_title");

$contact_us_title       = get_field("contact_us_title");
$contact_us_subtitle    = get_field("contact_us_subtitle");
$contact_us_description = get_field("contact_us_description");
$contact_us_address     = get_field("contact_us_address");
$contact_us_phone       = get_field("contact_us_phone");
$contact_us_email       = get_field("contact_us_email");
get_header();
?>

<!-- Revolution slider start -->
<div class="slideWrp">
    <div class="tp-banner-container sliderWraper" id="home">
        <div class="tp-banner">
            <ul>
                <?php if ( $sliders ) : ?>
                    <?php foreach( $sliders as $slider ) : ?>
                        <li data-slotamount="7" data-transition="fade" data-masterspeed="1000" data-saveperformance="on"> <img alt="" src="<?php bloginfo('template_directory'); ?>/assets/images/dummy.png" data-lazyload="<?php echo $slider['url'] ?>">
                            <div class="caption lft large-title tp-resizeme slidertext1" data-x="left" data-y="170" data-speed="600" data-start="2200"><?php echo $slider['title'] ?></div>
                            <div class="caption lfb large-title tp-resizeme slidertext2" data-x="left" data-y="270" data-speed="600" data-start="2800"><?php echo $slider['caption'] ?></div>
                        </li>
                    <?php endforeach; ?>
                <?php endif; ?>
            </ul>
        </div>
    </div>

    <div class="hoverForm">
        <div class="container">
            <div class="consultWrap sliderForm">
                <div class="formwrap">
                    <h3><?php echo pll__("Free Consultation") ?></h3>
                    <form>
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="<?php echo pll__("Name") ?> *">
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="<?php echo pll__("Email") ?> *">
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" class="form-control" placeholder="<?php echo pll__("Phone") ?> *">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" placeholder="<?php echo pll__("Tell us") ?> *"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn" value="<?php echo pll__("Contact Us") ?>">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Revolution slider end -->

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
                <p><?php echo wp_html_excerpt($about_us_description, 500), ' ...'; //$about_us_description?></p>
                <div class="readmore"><a href="<?php echo home_url('/about-us')?>" class="btn"><?php echo pll__("Read More") ?></a></div>

            </div>
        </div>
    </div>
</div>
<!--About start-->

<!--service start-->
<div class="service-wrap" id="service">
    <div class="container">
        <h1><?php echo $our_service_title ;?></h1>
        <ul class="serviceList owl-carousel">
            <?php $arg = ['post_type' => 'our_service', 'orderby' => 'post_id', 'order' => 'DESC']; ?>
            <?php $services = new WP_Query($arg) ?>
            <?php while ( $services->have_posts() ) : $services->the_post(); ?>
            <li class="item">
                <div class="service-image"><img src="<?php  echo  get_field('image')['url']; ?>" alt="<?php  echo  get_field('image')['alt']; ?>">
                    <div class="hoverlink">
                        <div class="icon"><a href="<?php the_permalink(); ?>"><i class="fa fa-link" aria-hidden="true"></i></a></div>
                    </div>
                </div>
                <div class="service-details">
                    <h3><a href="#"><?php the_title() ?></a></h3>
                    <p><?php echo wp_html_excerpt($services->post->description, 20), '...'; ?></p>
                    <div class="readmore"><a href="<?php the_permalink(); ?>"><?php echo pll__("Read More") ?></a></div>
                </div>
            </li>
            <?php endwhile; ?>
        </ul>
    </div>
    <a href="<?php echo home_url('/service')?>"> <?php echo pll__("Learn More") ?></a>
</div>
<!--service end-->

<!--porfolio start-->
<div class="porfolio-wrap" id="porfolio">
    <div class="container">
        <h1><?php echo $our_portfolio_title ?></h1>
        <ul class="row portfolio-service">
            <?php $arg = ['post_type' => 'our_portfolio', 'orderby' => 'post_id', 'order' => 'DESC', 'posts_per_page' => 6 ]; ?>
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
    <a style="left: 50%; position: absolute;" href="<?php echo home_url('/portfolio')?>"> <?php echo pll__("Learn More") ?></a>
</div>
<!--porfolio end-->

<!--Testimonials start-->
<div class="testimonials-wrap" id="testimonials">
    <div class="container">
        <div class="heading-wrap">
            <h1><?php echo $testimonial_title ?></h1>
        </div>
        <ul class="owl-carousel testimonials">
            <?php $arg = ['post_type' => 'testimonial', 'orderby' => 'post_id', 'order' => 'DESC']; ?>
            <?php $testimonial = new WP_Query($arg) ?>
            <?php while ( $testimonial->have_posts() ) : $testimonial->the_post(); ?>
            <li class="item">
                <div class="testService">
                    <div class="testi-info">
                        <p><?php the_field("description") ?></p>
                    </div>
                    <div class="client-image"><img src="<?php  echo  get_field('image')['url']; ?>" alt="<?php  echo  get_field('image')['alt']; ?>"></div>
                    <div class="name"><?php the_field("client") ?> <span><?php the_field("location") ?></span></div>
                </div>
            </li>
            <?php endwhile; ?>
        </ul>
    </div>
</div>
<!--Testimonials end-->

<!--Team Start-->
<div id="team">
    <div class="team_wrap">
        <div class="container">
            <h1><?php echo $our_team_title ?></h1>
            <div class="row">
                <?php $arg = ['post_type' => 'our_team', 'orderby' => 'post_id', 'order' => 'DESC']; ?>
                <?php $teams = new WP_Query($arg) ?>
                <?php while ( $teams->have_posts() ) : $teams->the_post(); ?>
                <div class="col-md-3 col-sm-6">
                    <div class="team">
                        <div class="team-info">
                            <h5><a href="#"><?php the_title() ?></a></h5>
                            <span><?php the_field("position") ?></span> </div>
                        <div class="team-image"> <img src="<?php  echo  get_field('image')['url']; ?>" alt="<?php  echo  get_field('image')['alt']; ?>">
                        </div>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</div>
<!--Team end-->

<div class="call-wrap" id="contact">
    <div class="container">
        <h1><?php echo $contact_us_title ?></h1>
        <div class="row">
            <div class="col-md-6">
                <div class="overview-info">
                    <div class="callus">
                        <h2><?php echo $contact_us_subtitle ?></h2>
                        <div class="call-text"><?php echo $contact_us_description ?></div>
                    </div>
                    <div class="contact_infor">
                        <ul>
                            <li><label><i class="fa fa-map-marker"></i><?php echo pll__("ADDRESS") ?></label>
                                <div class="des"><?php echo $contact_us_address ?></div>
                            </li>
                            <li><label><i class="fa fa-phone"></i><?php echo pll__("TEL NO") ?></label>
                                <div class="des"><?php echo $contact_us_phone ?></div>
                            </li>
                            <li><label><i class="fa fa-envelope"></i><?php echo pll__("EMAIL") ?></label>
                                <div class="des"><?php echo $contact_us_email ?></div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <form>
                    <div class="contactForm formwrap">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="<?php echo pll__("First Name") ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="<?php echo pll__("Last Name") ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="phone" placeholder="<?php echo pll__("Phone No") ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="email" placeholder="<?php echo pll__("Email") ?>" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="<?php echo pll__("Message") ?>"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn" value="<?php echo pll__("Contact Us Now") ?>">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
