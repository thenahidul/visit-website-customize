<div class="button-see-me vwlc-button-wrapper js-vwlc-button-wrapper">
		<a href="<?php echo site_url(); ?>" class="button button-primary vwlc-button-visitsite js-vwlc-button" target="_blank">
			<?php esc_html_e('Visit Site', 'visit-website-customizer'); ?>
			<span class="dashicons dashicons-arrow-down"></span>
		</a>
		<ul class="vwlc-button-content">
			<?php
				/**
				 *  If WooCommerce is active
				 **/
				if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) { ?>
					<li>
						<a href="<?php echo wc_get_page_permalink( 'shop' ); ?>" class="customize-control-title js-vwlc-button" target="_blank">
							<?php esc_html_e('Visit Store', 'visit-website-customizer'); ?>
						</a>
					</li>
				<?php
				}
			?>
			<li class="vwlc-button-control">
				<input type="checkbox" name="vwlc-newtab" id="vwlc-newtab" checked="checked">
				<label for="vwlc-newtab"><?php esc_html_e('Open in New Tab', 'visit-website-customizer'); ?></label>
			</li>
		</ul>
</div>