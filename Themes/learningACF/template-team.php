<?php 

/* Template Name: Team */

 get_header();?>


<section class="page">
    <div class="container">



                <h1><?php the_title();?></h1>


                <?php if(have_rows('team')):?>

                <ul class="list-group">

                    <?php while(have_rows('team')): the_row();

                    $name = get_sub_field('name');
                    $biography = get_sub_field('biography');

                    $image = get_sub_field('profile_picture');
                    $picture = $image['sizes']['thumbnail'];

                    $link = get_sub_field('link');

                    ?>

                        <li class="list-group-item">
                            
                        <h4> <?php echo $name;?>  </h4>
                        <?php echo $biography;?>


                        <?php if($image):?>
                            <img src="<?php echo $picture;?>">
                        <?php endif;?>
                        
                        <?php if($link):?>
                          <a href="<?php echo $link['url'];?>">View profile</a>
                        <?php endif; ?>

                        </li>

                    <?php endwhile; ?>

                </ul>

                <?php endif; ?>
    </div>
</section>

<?php get_footer();?>