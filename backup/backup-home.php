<?php get_header();?>
<div id="primary" class="content-area extended">

    <h1> <?php single_post_title( 'Post: ' ); ?></h1>    

    <main id="main" class="site-main" role="main">    


<!-- Filter out Category: Banner Post and the beginning of the X Y grid -->

    <?php
    $args1 = array(
    'category_name' => 'banner-front'            
    );      
 
    $query1 = new WP_Query( $args1 ); ?>

<div class="grid-y" style="height: 1680px;"> 
  
    <div class="cell large-10 medium-7 small-4 orbit" role="region" aria-label="Japan Hot Spots" data-orbit data-options="animInFromLeft:fade-in; animInFromRight:fade-in; animOutToLeft:fade-out; animOutToRight:fade-out;" data-orbit data-use-m-u-i="true">
      <ul class="orbit-container">
        <button class="orbit-previous" aria-label="previous"><span class="show-for-sr">Previous Slide</span>&#9664;</button>
        <button class="orbit-next" aria-label="next"><span class="show-for-sr">Next Slide</span>&#9654;</button>

    <?php if ( $query1->have_posts() ) : while ($query1->have_posts()) : $query1->the_post(); ?>            
            
        <?php get_template_part( 'template-parts/content-posts', get_the_category()[0]->category_nicename ); ?>
        
    <?php endwhile; else: ?>
            
        <?php get_template_part( 'template-parts/content', 'none' ); ?>
        
    <?php endif; ?>
    </ul>
      <nav class="orbit-bullets">
       <button class="is-active" data-slide="0"><span class="show-for-sr">First slide details.</span><span class="show-for-sr">Current Slide</span></button>
       <button data-slide="1"><span class="show-for-sr">Second slide details.</span></button>
       <button data-slide="2"><span class="show-for-sr">Third slide details.</span></button>
       <!-- <button data-slide="3"><span class="show-for-sr">Fourth slide details.</span></button> -->
     </nav>
    </div>




<!-- Filter out Category: Credentials -->
<?php 
    $args2 = array(
        'category_name' => 'credentials'  
     );     
    
    $query2 = new WP_Query( $args2 ); ?>

    <div class="cell grid-x grid-margin-x grid-padding-x large-2 medium-3 small-4 credentials">
     
        <?php if ( $query2->have_posts() ) : while ($query2->have_posts()) : $query2->the_post(); ?>            

                <?php get_template_part( 'template-parts/content-posts', get_the_category()[0]->category_nicename ); ?>
            
        <?php endwhile; else: ?>

                <?php get_template_part( 'template-parts/content', 'none' ); ?>
            
        <?php endif; ?>
    
    </div>    
    
    <?php 
    $args3 = array(
    'post_type'   => 'tour',
     );
     
    $query3 = new WP_Query( $args3 ); ?>
     
     <div class="cell grid-x grid-margin-x grid-padding-x large-12 medium-14 small-16">

        <?php if ( $query3->have_posts() ) : while ($query3->have_posts()) : $query3->the_post(); ?>            

                <?php get_template_part( 'template-parts/content-posts', get_post_type() ); ?>
            
        <?php endwhile; else: ?>

                <?php get_template_part( 'template-parts/content', 'none' ); ?>
            
        <?php endif; ?>    
        
    </div>
<!-- <div class="single-item" data-slick='{"slidesToShow": 4, "slidesToScroll": 4}'>
  <div><h3>1</h3></div>
  <div><h3>2</h3></div>
  <div><h3>3</h3></div>
  <div><h3>4</h3></div>
  <div><h3>5</h3></div>
  <div><h3>6</h3></div>
</div> -->
    
</div><!--grid-y end-->

    

    </main>

</div>

<?php get_footer();?>