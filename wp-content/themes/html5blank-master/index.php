<?php get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>

			<h1><?php _e( 'Latest Posts', 'html5blank' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>

<body>
<div id="wb_element_instance0" class="wb_element" style="left: 0px; top: 29px; width: 898px; height: 51px; min-width: 898px; min-height: 51px; z-index: 46;">
	<ul class="hmenu">
		<li class="active">
			<a href="accueil.html" target="_self" title="Accueil du site">Accueil</a>
		</li>
		<li>
			<a href="societe.html" target="_self" title="Notre société">Le centre</a>
		</li>
		<li><a href="contact.html" target="_self" title="Contacts">Contact</a>
		</li>
	</ul>
</div>

</body>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
