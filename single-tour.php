<?php get_header(); ?>

<div id="primary" class="grid-y">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <div class="cell large-6 medium-5 small-4">            
            <?php the_post_thumbnail() ?>        
        </div>
        
        <div class="cell large-5 medium-4 small-3 tour-summary">
            <div class="tour-details">
                <div class="tour-title">
                    <?php the_title() ?>
                </div>
                <div class="departure">
                    <span><i class="fas fa-plane-departure" style="color:#4692e7; font-size: 1.3em; margin-right: 10px;" ></i><?php the_field('tour_departure'); ?></span>
                </div>
                <div class="arrival">
                    <span><i class="fas fa-plane-arrival" style="color:#4692e7; font-size: 1.3em; margin-right: 10px;" ></i><?php the_field('tour_return'); ?></span>
                </div>
                <div class="min-age">
                    <span><i class="fas fa-child" style="color:#4692e7; font-size: 1.3em; margin-right: 10px;" ></i><span id="min-age"> <?php the_field('min_age'); ?></span> years </span>
                </div>
                <div class="max-age">
                    <span><i class="fas fa-male" style="color:#4692e7; font-size: 1.3em; margin-right: 10px;" ></i><span id="max-age"><?php the_field('max_age'); ?></span> years </span>
                </div>  
                <div class="slots">
                    <span><i class="fas fa-chair" style="color:#4692e7; font-size: 1.3em; margin-right: 10px;" ></i><span id="slots"><?php the_field('max_slots'); ?></span> max </span>
                </div>
                <div class="slots-left">
                    <span><i class="fas fa-chair" style="color:red; font-size: 1.3em; margin-right: 10px;" ></i><span id="slots-left"><?php the_field('slots_left'); ?></span> left </span>
                </div>
                <div class="price">
                    <span><i class="fas fa-dollar-sign" style="color:#4692e7; font-size: 1.3em; margin-right: 10px;" ></i><span class="amount" ><?php the_field('tour_price'); ?></span></span>
                </div>               
            </div>
        </div>
        
        <div class="cell large-11 medium-13 small-15 tour-description">
            <?php the_content() ?>
        </div>
    <?php endwhile; else: ?>
        
        <?php get_template_part( 'template-parts/content', 'none' ); ?>
       
    <?php endif; ?>
 
<?php get_footer(); ?>