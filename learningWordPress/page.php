<?php

get_header(); // dodajem header.php skriptu

if (have_posts()) :  
    while(have_posts())  : the_post(); ?>      <!-- dok imamo postova, sa svakim postom..., izlazimo iz phpa kako bi imali html -->

    <article class ="post page">  <!-- dodajemo article page kako bi mogli koristiti u style cssu -->
    
        <?php

        if( has_children() OR $post ->post_parent > 0) { ?>

            <nav class="site-nav children-links clearfix">

            <span class ="parent-link"> <a href=" <?php echo get_the_permalink(get_top_ancestor_id()); ?> "> <?php echo get_the_title(get_top_ancestor_id()); ?> </a> </span>

                <ul> 
                    <?php
                    $args = array(
                        'child_of' => get_top_ancestor_id(),
                        'title_li' => ''
                    );

                    ?>


                    <?php wp_list_pages($args); ?>
                </ul>
            </nav> 

                <?Php } ?>


        <h2> <?php the_title(); ?> </h2>  <!-- svaki post neka ima link na sebe i svoj naziv --> 
        <?php the_content();?>   <!-- doda sadrzaj posta -->
    </article>

    <?php endwhile;

    else:
    echo '<p>No content found</p';
    endif;

get_footer(); // dodajem footer. php skriptu
?>