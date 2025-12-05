
<?php
 /**
  * Title: Latest Blogs
  * Slug: linea-blog/latest-blogs
  * Categories: linea-blog
  */
?>

<!-- wp:group {"className":"linea_blog-query","style":{"spacing":{"padding":{"bottom":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group linea_blog-query" style="padding-bottom:var(--wp--preset--spacing--80)"><!-- wp:query {"queryId":7,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"metadata":{"categories":["posts"],"patternName":"core/query-standard-posts","name":"Standard"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|50"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--50)"><!-- wp:cover {"useFeaturedImage":true,"dimRatio":30,"overlayColor":"primary","isUserOverlayColor":true,"minHeight":400,"contentPosition":"bottom left","isDark":false,"className":"img-zoom-on-hover","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|80","right":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left img-zoom-on-hover" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--80);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--80);min-height:400px"><span aria-hidden="true" class="wp-block-cover__background has-primary-background-color has-background-dim-30 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:post-terms {"term":"category","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontFamily":"oswald"} /-->

<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:post-date {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"small"} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"small"} -->
<p class="has-white-color has-text-color has-link-color has-small-font-size" style="font-style:normal;font-weight:500"><?php esc_html__('By', 'linea-blog'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:post-author-name {"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","fontSize":"small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|80","left":"var:preset|spacing|80"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-right:var(--wp--preset--spacing--80);padding-left:var(--wp--preset--spacing--80)"><!-- wp:post-excerpt {"moreText":"Continue Reading","excerptLength":25} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->