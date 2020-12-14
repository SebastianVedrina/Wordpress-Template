<?php 

$columns = get_sub_field('columns');  

foreach($columns as $column): ?>


<?php if($column['title']):?> 

    <h3><?php echo $column['title']; ?> </h3> 

<?php endif; ?>

<p> <?php echo $column['content']; ?> </p>

<?php if($column['link']): ?>
    <a href="<?php echo $column['link']['url'];?>">Find out more</a>
<?php endif; ?>


<?php endforeach;?>