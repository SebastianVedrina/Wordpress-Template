<!DOCTYPE html>
<html>   <!-- na headeru zapocinjem html -->
    <head> 
        <meta charset="<?php bloginfo('charset'); ?>">          <!-- bloginfo prikazuje informacije o trenutnom siteu --> 
        <meta name= "viewport" content ="width=device-width">
        <title> <?php bloginfo('name'); ?> </title>             <!-- automatski prilagodava naslov trenutnom siteu -->
        <?php wp_head(); ?>                                     <!--word pressu dajemo pravo da doda bilo kakav kod nakon naseg -->
    </head>

    <body <?php body_class(); ?>>   <!-- body zapocinje u headeru --> 

        <div class= "container">                                                                <!-- klasa container koja zavrsava nakon bodyja kako bi dali izgled stranici -->

            <!--site-header -->
            <header class = "site-header">                                                      <!-- stvaram klasu "site-header" koja se sastoji od header1 i header 5, koristim u style cssu-->
               
               <div class = "search-box">
                    <?php get_search_form(); ?>
               </div>
               
                <h1> <a href="<?php echo home_url() ?>"> <?php bloginfo('name'); ?> </a> </h1>  <!-- href - link, home_url - ispisuje link od trenutne stranice -->
                <h5> <?php bloginfo('description')?></h5>                                      <!-- opis stranice -->
           
            

            <nav class ="site-nav">

                <?php
                $args = array(
                    'theme_location' => 'primary'                                               //navigation meniju u header dajemo ime primary  
                );

                ?>

                <?php wp_nav_menu(  $args );?>                                                     <!-- daje nam navigation menu unordered list -->
            </nav>

            </header> <!-- /site-header -->