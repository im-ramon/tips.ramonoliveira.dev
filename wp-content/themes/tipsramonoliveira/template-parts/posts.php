<article class="iten <?php 
    foreach(get_the_category() as $category) {
        echo strtolower($category->name);
     }
?>">
    <div class="iten_img">
        <i class="fab fa-python"></i>
    </div>
    <div class="iten_info">
        <h1><?php the_title() ?></h1>
        <p>Tags: <?php the_tags() ?></p>
        <p><?php the_content() ?></p>
    </div>
</article>