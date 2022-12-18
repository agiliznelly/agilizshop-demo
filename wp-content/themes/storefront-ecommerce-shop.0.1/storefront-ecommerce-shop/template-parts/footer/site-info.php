<?php
/**
 * Displays footer site info
 *
 * @subpackage Storefront Ecommerce Shop
 * @since 1.0
 * @version 1.0
 */

?>
<div class="site-info py-4 text-center">
	<?php
		echo esc_html( get_theme_mod( 'modern_ecommerce_footer_text' ) );
		printf(
			/* translators: %s: Ecommerce Shop WordPress Theme. */
            '<p class="mb-0"> %s</p>',
            esc_html__( 'Ecommerce Shop WordPress Theme', 'storefront-ecommerce-shop' )
        );
	?>
</div>