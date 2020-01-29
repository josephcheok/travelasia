<?php get_header();?>

<div id="primary" class="grid-y" >

    <!-- Filter out Category: Banner-Back -->
    <?php
    $args5 = array(
    'category_name' => 'banner-back'            
    );      
 
    $query5 = new WP_Query( $args5 ); ?>

    <div class="cell large-8 medium-6 small-4 responsive" aria-label="Happy Travellers">
      
    <?php if ( $query5->have_posts() ) : while ($query5->have_posts()) : $query5->the_post(); ?>

        <div class="">
            <?php the_post_thumbnail() ?>
        </div>   
        
        <?php endwhile; else: ?>

            <?php get_template_part( 'template-parts/content', 'none' ); ?>
            
        <?php endif; ?>    
    </div>

    <!-- Filter out Category: Team -->
    <?php 
    $args6 = array(
    'category_name' => 'team',
     );
     
    $query6 = new WP_Query( $args6 ); ?>
     
    <div class="cell large-14 medium-16 small-18 grid-x grid-margin-x grid-padding-x grid-padding-y ">
    
    <div class="cell large-24 medium-24 small-24">
        <h2> Our Friendly Crew </h2>
    </div>

        <?php if ( $query6->have_posts() ) : while ($query6->have_posts()) : $query6->the_post(); ?>            

                <?php get_template_part( 'template-parts/content', get_the_category()[0]->category_nicename ); ?>
            
        <?php endwhile; else: ?>

                <?php get_template_part( 'template-parts/content', 'none' ); ?>
            
        <?php endif; ?>    
        
    </div>


<?php get_footer();?>