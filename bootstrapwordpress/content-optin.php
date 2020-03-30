<?php
/*
  Template Name: Home Page
*/

//Custom Fields

$optin_text        = get_post_meta( 12, 'optin_text', true );
$optin_button_text   = get_post_meta( 12, 'optin_button_text', true);
?>
<!--OPT IN SECTION -->
<section id="optin">
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <p class="lead">
          <?php echo $optin_text; ?>
        </p>
      </div>
      <div class="col-sm-4">
        <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal" type="button" name="button">
          <?php echo $optin_button_text; ?>
        </button>
      </div>
    </div>
  </div>
    </section>
