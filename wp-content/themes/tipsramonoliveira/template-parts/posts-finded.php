<article class="iten <?php
                        foreach (get_the_category() as $category) {
                            echo strtolower($category->name);
                        }
                        ?>">
    <div class="iten_img">
        <img class="img_<?php
                        foreach (get_the_category() as $category) {
                            echo strtolower($category->name);
                        }
                        ?>" src="<?php echo get_template_directory_uri(); ?>/svg/<?php
                                                                                                                foreach (get_the_category() as $category) {
                                                                                                                    echo strtolower($category->name);
                                                                                                                }
                                                                                                                ?>.svg" alt="python">
    </div>
    <div class="iten_info">
        <a href="<?php the_permalink(); ?>">
            <h1><?php the_title() ?></h1>
        </a>
    </div>
</article>