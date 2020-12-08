<footer>
	<?php
	add_action( 'wpe_footer', function ()
	{
		require_once wpe_template_load( 'templates/footer/branding/socialmedia.php' );
	}, 10 );
	?>
    <div class="container">
        <div class="row">
			<?php do_action( 'wpe_footer' ) ?>
        </div>
    </div>
</footer>