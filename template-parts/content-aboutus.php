<?php
$about_us_image         = get_field("about_us_image");
$about_us_title         = get_field("about_us_title");
$about_us_subtitle      = get_field("about_us_subtitle");
$about_us_description   = get_field("about_us_description");

?>


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
                <div class="readmore"><a href="<?php echo home_url('/about-us')?>" class="btn"><?php echo pll__("Read More") ?></a></div>

            </div>
        </div>
    </div>
</div>