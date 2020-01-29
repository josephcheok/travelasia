<div class="cell large-8 medium-12 small-24">
    
<a href="<?php the_permalink() ?>">
    <div class="cell card shrink align-spaced align-self-top">
        
        <img src="<?php the_field('cropped_image') ?>" height="286" width="444">
        
        <div class="cell grid-x card-section">
    
            <div class="cell auto title align-self-top">
                <?php the_title() ?>
            </div>
          
            <div class="cell auto time">
                <span><i class="far fa-clock" style="color:#4692e7;" ></i></span>
                <span><?php the_field('tour_duration') ?> days</span>
            </div>
          
            <div class="cell auto price align-right">
               $ <?php the_field('tour_price') ?>
            </div>

        </div>
    
    </div>
</a>
        
</div>

