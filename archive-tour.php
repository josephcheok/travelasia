<?php get_header();?>

<div id="primary" class="grid-y" >

    <!-- Filter out Category: Banner Post and the beginning of the X Y grid -->
    <?php
    $args = array(
    'category_name' => 'tour'            
    );      
 
    $query = new WP_Query( $args ); ?>
           
    <?php if ( $query->have_posts() ) : while ($query->have_posts()) : $query->the_post(); ?>            
    
    <div class="cell large-10 medium-10 small-10 japan" >
        <?php the_post_thumbnail() ?>
    </div>
    
    <div class="cell large-12 medium-12 small-12" >
        <div class="tour-title tour-summary">
            <?php the_title() ?>
        </div>
        <div class="tour-description">
            <?php the_content() ?>
        </div>
    </div>

    <?php endwhile; else: ?>

        <?php get_template_part( 'template-parts/content', 'none' ); ?>

    <?php endif; ?>           

<?php get_footer();?>