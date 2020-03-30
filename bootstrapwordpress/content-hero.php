<?php
$prelaunch_price   = get_post_meta( 12, 'prelaunch_price', true );
$launch_price       = get_post_meta( 12, 'launch_price', true );
$final_price        = get_post_meta( 12, 'final_price', true );
$site_price        = get_post_meta( 12, 'site_url', true );
$button_text        = get_post_meta( 12, 'button_text', true );

?>
<!--HERO -->
<section id="hero" data-type="background" data-speed="5">
  <article>
    <div class="container clearfix">
      <div class="row">
        <div class="col-sm-5">

        </div>
        <div class="col-sm-7 hero-text">
          <h1><?php bloginfo('name');?></h1>
          <p class="lead"><?php bloginfo('description') ?> </p>
          <div id="price-timeline">
            <div class="price active">
              <h4>Pee-Launch <small>Ends soon!</small></h4>
              <span><?php echo $prelaunch_price; ?></span>
            </div>
            <div class="price">
              <h4>Launch <small>Coming soon!</small></h4>
              <span><?php echo $launch_price; ?></span>
            </div>
            <div class="price">
              <h4>Launch <small>Coming soon!</small></h4>
              <span><?php echo $final_price; ?></span>
            </div>
          </div>
          <p><a href="<?php echo $site_url; ?>" class="btn btn-lg btn-danger" role="button"><?php echo $button_text; ?></a></p>
        </div>
      </div>
    </div>
  </article>
</section>
