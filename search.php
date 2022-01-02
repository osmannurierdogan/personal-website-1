<?php

/**
 * @author: VLThemes
 * @version: 1.0.1
 */

get_header();

get_template_part( 'template-parts/page-title/page-title', 'search' );

?>

<main class="vlt-main vlt-main--padding">

	<?php

		// Elementor `archive` location
		if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'archive' ) ) {
			get_template_part( 'template-parts/archive/archive', 'search' );
		}

	?>

</main>
<!-- /.vlt-main -->

<?php get_footer(); ?>