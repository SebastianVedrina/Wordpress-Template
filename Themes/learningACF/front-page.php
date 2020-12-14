<?php 
get_header();
?>

<section class="page">
    <div class="container">



                <h1><?php the_title();?></h1>

                <?php if(have_rows('content')):?>

                    <?php while(have_rows('content')): the_row(); ?>

                        <?php if (get_row_layout()== 'column_section'): ?>

                            <?php get_template_part('parts/section','columns');?>
                     
                        <?php endif; ?>
                        
                        
                        <?php if(get_row_layout() == 'textarea_with_image'): ?>
        
                            <?php get_template_part('parts/section','textwithimage');?> 
        
                        <?php endif;?>


                    <?php endwhile;?>

                <?php endif;?>



    </div>
</section>

<?php get_footer();?>