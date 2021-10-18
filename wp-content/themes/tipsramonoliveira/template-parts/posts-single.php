<article id="<?php the_ID(); ?>" class="post_body">
    <h1 class="post_title"><img class="img_logo_title" src="<?php echo get_template_directory_uri(); ?>/svg/<?php
                                            foreach (get_the_category() as $category) {
                                                echo strtolower($category->name);
                                            }
                                            ?>.svg" alt="python"> | <?php the_title() ?></h1>

    <section class="post_info">
        <span class="post_author">Postado por <?php the_author_posts_link(); ?><span class="post_date">, em: <?php echo get_the_date(); ?>.</span></span>
        <span class="post_tags"><?php the_tags() ?></span>
    </section>

    <div class="post_content">
        <?php the_content() ?>
    </div>

    <span class="post_author"><?php the_author_posts_link(); ?><span class="post_date">, <?php echo get_the_date(); ?>.</span></span>
</article>