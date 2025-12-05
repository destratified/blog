<?php
/**
 * Title: Primary Sidebar
 * Slug: linea-blog/primary-sidebar
 * Categories: linea-blog
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--30)"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:heading -->
		<h2 class="wp-block-heading"><?php esc_html_e('About Me', 'linea-blog'); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:image {"id":12,"width":"100px","aspectRatio":"1","scale":"cover","sizeSlug":"thumbnail","linkDestination":"none","className":"is-style-rounded"} -->
				<figure class="wp-block-image size-thumbnail is-resized is-style-rounded">
					<img src="<?php echo esc_url(get_stylesheet_directory_uri()); ?>/assets/images/author.webp" alt=""
						class="wp-image-12" style="aspect-ratio:1;object-fit:cover;width:100px" />
				</figure>
				<!-- /wp:image -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:heading {"level":3} -->
					<h3 class="wp-block-heading"><?php esc_html_e('Chesung Subba', 'linea-blog'); ?></h3>
					<!-- /wp:heading -->

					<!-- wp:paragraph -->
					<p><?php esc_html_e('Author/Writer', 'linea-blog'); ?></p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:paragraph -->
			<p>
				<?php esc_html_e('Hello, I\'m Chesung Subba, a passionate writer who loves sharing ideas, stories, and experiences to inspire, inform, and connect with readers through meaningful content.', 'linea-blog'); ?>
			</p>
			<!-- /wp:paragraph -->

			<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40"}}}} -->
			<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40)">
				<!-- wp:button {"backgroundColor":"secondary","textColor":"white","style":{"border":{"radius":"50px"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"left":"var:preset|spacing|60","right":"var:preset|spacing|60","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} -->
				<div class="wp-block-button"><a
						class="wp-block-button__link has-white-color has-secondary-background-color has-text-color has-background has-link-color wp-element-button"
						style="border-radius:50px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--60)"><?php esc_html_e('Subscribe', 'linea-blog'); ?></a>
				</div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--70)"><!-- wp:heading -->
		<h2 class="wp-block-heading"><?php esc_html_e('Follow Me', 'linea-blog'); ?></h2>
		<!-- /wp:heading -->

		<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph -->
			<p><?php esc_html_e('Connect with me and be part of my social media community.', 'linea-blog'); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:social-links {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|30"}}}} -->
			<ul class="wp-block-social-links">
				<!-- wp:social-link {"url":"#","service":"facebook"} /-->
				<!-- wp:social-link {"url":"#","service":"x"} /-->
				<!-- wp:social-link {"url":"#","service":"linkedin"} /-->
				<!-- wp:social-link {"url":"#","service":"youtube"} /-->
				<!-- wp:social-link {"url":"#","service":"pinterest"} /-->
			</ul>
			<!-- /wp:social-links -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->