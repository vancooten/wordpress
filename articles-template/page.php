<?php get_header(); ?>

<div id="wrapper">

	<div id="container">

		<?php while ( have_posts() ) : the_post(); ?>

			<article>

			<h2><?php the_title(); ?></h2>

			<?php the_content(); ?>

			</article>

		<?php endwhile; ?>

	</div> <!-- #container -->

</div> <!-- #wrapper -->

<?php get_footer(); ?>