
<div class="cell large-2 medium-2 small-2 grid-x grid-margin-x grid-padding-x grid-padding-y custom-footer">
    <div class="cell large-8 medium-8 small-24">
        <a href="<?php echo esc_url (home_url( '/' ) ); ?>" rel="home">
            <?php the_custom_logo() ?>
        </a>    
        <br>
        <p id="slogan1"> Memories made that will last you a lifetime... </p>
        <p id="slogan2"> Come fly with us! </p>
    </div>
        <div class="cell grid-x large-8 medium-8 small-24">
            <?php /*
            $args4 = array(
            'category_name' => 'awards'            
            );      
        
            $query4 = new WP_Query( $args4 ); ?>

            <?php if ( $query4->have_posts() ) : while ($query4->have_posts()) : $query4->the_post(); ?>            

                <div class="cell large-12 medium-12 small-24 japan" >
                    <?php the_post_thumbnail() ?>
                </div>
            
            <?php endwhile; else: ?>

                <?php get_template_part( 'template-parts/content', 'none' ); ?>

            <?php endif; */?>           

        </div>
    <div class="cell large-8 medium-8 small-24">
        <h6 id="contact">CONTACT INFO</h6>
        <br>      
        <p id="address"> 
            Address: 112, Collin St, Melbourne <br>
            Phone: +61 3 9825 2166 <br>
            Email: contact@travelasia.com.au
        </p>
        <span><i class="fab fa-facebook" style="color:#4692e7; font-size: 1.3em; margin-right: 10px;" ></i></span>
        <span><i class="fab fa-instagram" style="color:#4692e7; font-size: 1.3em; margin-right: 10px;" ></i></span>
        <span><i class="fab fa-twitter" style="color:#4692e7; font-size: 1.3em; margin-right: 10px;" ></i></span>
        <span><i class="fab fa-pinterest" style="color:#4692e7; font-size: 1.3em; margin-right: 10px;" ></i></span>
    </div>
</div>


</div><!--#grid-y-->
</div><!--#page-->

<?php wp_footer();?>


</body>
</html>