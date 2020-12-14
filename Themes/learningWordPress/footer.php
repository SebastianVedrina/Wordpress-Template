<footer class ="site-footer">                                             <!-- klasa koju cu koristiti u style css -->

<nav class ="site-nav">
<?php
                $args = array(
                    'theme_location' => 'footer'                                               //navigation meniju u header dajemo ime footer  
                );
                ?>

                <?php wp_nav_menu($args);?>
            </nav>

    <p> <?php bloginfo('name'); ?> - &copy; <?php echo date('Y');?> </p>  <!-- ime stranice i  datum -->

</footer>

</div>
<?php wp_footer(); ?>

</body>                             <!--body zavrsava u footeru -->
</html>                             <!-- na footeru zavrsavam html -->
