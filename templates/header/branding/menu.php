<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<?php
wp_nav_menu(
	[
		'theme_location'  => 'primary_menu',
		'container_class' => 'collapse navbar-collapse menu wpe-menu-header',
		'container_id'    => 'navbarResponsive',
		'container'       => 'div',
		'items_wrap'      => '<ul id="%1$s" class="navbar-nav ml-auto %2$s">%3$s</ul>',
	]
);

