<?php get_header(); ?>

<div id="primary" class="grid-y">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="cell large-6 medium-5 small-4">            
            <?php the_post_thumbnail() ?>        
        </div>
        
        <div class="cell card grid-x grid-margin-x grid-padding-x grid-padding-y large-5 medium-4 small-3 tour-summary">
            <div class="cell large-24 medium-24 small-24">
                <h3 class="tour-summary-title"><?php the_title() ?></h3>
            </div>
            <div class="cell large-8 medium-12 small-24 departure">
                <span><i class="fas fa-plane-departure" style="color:#4692e7; font-size: 1.3em; margin-right: 10px;" ></i><?php the_field('tour_departure'); ?></span>
            </div>
            <div class="cell large-8 medium-12 small-24 min-age">
                <span><i class="fas fa-child" style="color:#4692e7; font-size: 1.3em; margin-right: 10px;" ></i><?php the_field('min_age'); ?> years </span>
            </div>
            <div class="cell large-8 medium-12 small-24 slots">
                <span><i class="fas fa-chair" style="color:#4692e7; font-size: 1.3em; margin-right: 10px;" ></i><?php the_field('max_slots'); ?> max </span>
            </div>
            <div class="cell large-8 medium-12 small-24 arrival">
                <span><i class="fas fa-plane-arrival" style="color:#4692e7; font-size: 1.3em; margin-right: 10px;" ></i><?php the_field('tour_return'); ?></span>
            </div>
            <div class="cell large-8 medium-12 small-24 max-age">
                <span><i class="fas fa-male" style="color:#4692e7; font-size: 1.3em; margin-right: 10px;" ></i><?php the_field('max_age'); ?> years </span>
            </div>  
            <div class="cell large-8 medium-12 small-24 slots-left">
                <span><i class="fas fa-chair" style="color:red; font-size: 1.3em; margin-right: 10px;" ></i><?php the_field('slots_left'); ?> left </span>
            </div>
            <div class="cell large-8 medium-12 small-24 price">
                <span><i class="fas fa-dollar-sign" style="color:#4692e7; font-size: 1.3em; margin-right: 10px;" ></i><?php the_field('tour_price'); ?></span>
            </div>
            <div class="cell large-8 medium-12 small-24 empty-1">              
            </div>
            <div class="cell large-8 medium-12 small-24 empty-2">                
            </div>
        </div>
        
        <div class="cell large-11 medium-13 small-15">
            <?php the_content() ?>
        </div>
    <?php endwhile; else: ?>
        
        <?php get_template_part( 'template-parts/content', 'none' ); ?>
       
    <?php endif; ?>
    <p>Template: single-tour.php</p>
    

<?php get_footer(); ?>