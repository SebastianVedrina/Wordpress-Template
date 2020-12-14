<?php

/*
Template Name: Special Layout
*/

get_header(); // dodajem header.php skriptu

if (have_posts()) :  
    while(have_posts())  : the_post(); ?>      <!-- dok imamo postova, sa svakim postom..., izlazimo iz phpa kako bi imali html -->

    <article class ="page">  <!-- dodajemo article page kako bi mogli koristiti u style cssu -->
        <h2> <?php the_title(); ?> </h2>  <!-- svaki post neka ima link na sebe i svoj naziv --> 
        
        <div class = "info-box">
        <h4>Disclaimer title</h4>
        <p>hsdjfkhdkjsdhskjfhwsdj dskjfdhsjkshfsjkdsb sfkjhs</p>
        </div>

        <?php the_content();?>   <!-- doda sadrzaj posta -->
    </article>

    <?php endwhile;

    else:
    echo '<p>No content found</p';
    endif;

get_footer(); // dodajem footer. php skriptu
?>