<li id="post-<?php the_ID(); ?>" class="is-active orbit-slide">

    <img class="orbit-image" src="<?php echo the_post_thumbnail_url( 'full' ) ?>" alt="<?php 
        $image_id = get_post_thumbnail_id();
        $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', TRUE);
        echo $image_alt?>">
        <!-- <figcaption class="orbit-caption">Space, the final frontier.</figcaption> -->
</li>
       