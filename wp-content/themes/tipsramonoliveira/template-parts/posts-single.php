<article id="<?php the_ID(); ?>" class="iten">
    <div class="iten_img">
        <i class="fab fa-<?php
                            foreach (get_the_category() as $category) {
                                echo strtolower($category->name);
                            }
                            ?>"></i>
    </div>
    <div class="iten_info">
        <a href="<?php the_permalink(); ?>">
            <h1><?php the_title() ?></h1>
            <h3>Postado em: <?php echo get_the_date(); ?></h3>
            <h3>Postado por <?php the_author_posts_link(); ?></h3>
            <p>Tags: <?php the_tags() ?></p>
            <p><?php the_content() ?></p>
            <h5><?php the_author_posts_link(); ?></h5>
        </a>
    </div>
</article>