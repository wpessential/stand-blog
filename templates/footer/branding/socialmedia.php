<?php
$socialmedia = [
	'Facebook' => get_theme_mod( 'footer_facebook' ),
	'Twitter'  => get_theme_mod( 'footer_twitter' ),
	'Behance'  => get_theme_mod( 'footer_behance' ),
	'Linkedin' => get_theme_mod( 'footer_linkedin' ),
	'Dribbble' => get_theme_mod( 'footer_dribbble' ),
];
$socialmedia = array_filter( $socialmedia );
if ( is_array( $socialmedia ) && ! empty( $socialmedia ) ) {
	?>
    <div class="col-lg-12">
        <ul class="social-icons">
			<?php
			foreach ( $socialmedia as $media => $link ) {
				?>
                <li><a href="<?php echo esc_url( $link ); ?>"><?php echo esc_html( $media ); ?></a></li>
				<?php
			}
			?>
        </ul>
    </div>
	<?php
}