<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_Wordpress
 */

?>



<?php wp_footer(); ?>
<!--SIGN UP SECTION -->
<section id="signup" data-type="background" data-speed="4">
	<div class="container">
		<div class="row">
			<div class="col-sm">
				<h2>Are you ready to take coding skills to the <strong>next level</strong>?</h2>
				<p><a href="#" class="btn btn-lg btn-block btn-success">Yes sigm me up</a></p>
			</div>
		</div>
	</div>
</section>
<!--FOOTER -->
<footer class="page-footer font-small black">

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2020 Copyright:
<a href=""> testing</a>
</div>
<!-- Copyright -->

</footer>

<!--MODAL -->
<div class="modal fade" id="myModal">
	<div class="modal-dialog">
		<div class="modal-content">
	<div class="modal-header">
<h4 class="modal-title" id="myModalLabel">Subscribe to our mailing list</h4>
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
	</div>
	<div class="modal-body">
		<p>Simply enter your name and email! As a thank you for joining us, we're going to give you one of our best-selling courses, <em>for free</em></p>
		<form>

<div class="form-group">
<label for="exampleInputname">Name</label>
<input type="text" class="form-control" id="exampleInputPassword1" placeholder="Your Name">
</div>
<div class="form-group">
<label for="exampleInputEmail1">Email address</label>
<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
</div>
<button type="submit" class="btn btn-danger">Submit</button>
</form>
	</div>

</div>
	</div>
</div>
<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
	crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
	crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
	crossorigin="anonymous"></script>
	<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>
</body>
</html>
