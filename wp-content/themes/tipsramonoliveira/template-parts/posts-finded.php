<article class="iten <?php 
    foreach(get_the_category() as $category) {
        echo strtolower($category->name);
     }
?>">
    <div class="iten_img">
        <i class="fab fa-python"></i>
    </div>
    <div class="iten_info">
        <a href="<?php the_permalink(); ?>">
            <h1><?php the_title() ?></h1>
            <p>Categoria: <?php the_category() ?></p>
            <p><?php the_content() ?></p>
        </a>
    </div>
</article>