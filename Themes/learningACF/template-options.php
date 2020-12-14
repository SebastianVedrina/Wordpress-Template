<?php 

/* Template Name: Options */

$color = get_field('choose_your_color');

$flavours =get_field('choose_flavour');

$consent = get_field('do_you_consent');

get_header();?>

<section class="page">
    <div class="container">



                <h1><?php the_title();?></h1>

                <?php echo $consent;  ?>
    </div>
</section>

<?php get_footer();?>