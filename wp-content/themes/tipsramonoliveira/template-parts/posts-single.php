<article id="<?php the_ID(); ?>" class="post_body">
    <section class="post_title">
        <img class="img_logo_title" src="<?php echo get_template_directory_uri(); ?>/svg/<?php
                                                                                            foreach (get_the_category() as $category) {
                                                                                                echo str_replace(array("-", " "),"", strtolower($category->name));
                                                                                            }
                                                                                            ?>.svg" alt="logo">
        <h1><?php the_title(); ?></h1>
    </section>


    <section class="post_info">
        <span class="post_author">Postado por <?php the_author_posts_link(); ?><span class="post_date">, em: <?php echo get_the_date(); ?>.</span></span>
    </section>

    <div class="post_content">
        <?php the_content() ?>
    </div>

    <section class="post_footer">
        <span class="post_author">- Escrito por <?php the_author_posts_link(); ?><span class="post_date">, em <?php echo get_the_date(); ?>.</span></span>
        <span class="post_tags"><?php the_tags('Tags: ', ', ') ?></span>
    </section>

</article>