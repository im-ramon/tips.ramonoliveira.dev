<?php get_header() ?>
<section id="banner">
    <?php get_template_part('template-parts/banner'); ?>
</section>
<main>
    <nav id="languages">
        <div id="languages_area">
            <h3>Escolha uma tecnologia</h3>
            <label class="all"><input type="radio" class="selectlang 'show-grid" id="checkbox-all" name="languages" value="all" checked>Todos</label>
            <?php foreach (get_categories() as $category) { 
                if ($category->name == 'Sem categoria'):
                    continue;
                endif;
                ?>
                <label class="<?php echo str_replace(array("-", " "),"", strtolower($category->name)); ?>"><input type="radio" class="selectlang"  id="checkbox-<?php echo str_replace(array("-", " "),"", strtolower($category->name)); ?>"  name="languages" value="<?php echo str_replace(array("-", " "),"", strtolower($category->name)); ?>"><?php echo $category->name; ?></label>
            <?php } ?>
        </div>
    </nav>
    <section id="main_content">

        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
        ?>

                <?php

                get_template_part('template-parts/posts-home');

                ?>

            <?php
            endwhile;
            the_posts_pagination(array('prev_text' => 'Anterior', 'next_text' => 'Próximo',));
        else :
            ?>
            <p>Não há posts!</p>
        <?php endif; ?>
    </section>

</main>

<?php get_footer() ?>