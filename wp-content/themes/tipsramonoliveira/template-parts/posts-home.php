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
                        ?>" src="wp-content/themes/tipsramonoliveira/svg/<?php
                                                                                                                foreach (get_the_category() as $category) {
                                                                                                                    echo strtolower($category->name);
                                                                                                                }
                                                                                                                ?>.svg" alt="python">
    </div>
    <div class="iten_info">
        <a href="<?php the_permalink(); ?>">
            <h1><?php the_title() ?></h1>
            <!-- <p class="hidden">Tags: <?php the_tags() ?></p> -->
            <!-- <p class="hidden"><?php the_content() ?></p> -->
        </a>
    </div>
</article>