<?php get_header() ?>

<main>
    <nav id="languages">
        <div id="languages_itens">
            <label><input type="checkbox" name="languages" value="Todos">Todos</label>
            <label><input type="checkbox" name="languages" value="HTML">HTML</label>
            <label><input type="checkbox" name="languages" value="CSS">CSS</label>
            <label><input type="checkbox" name="languages" value="JS">Javascript</label>
            <label><input type="checkbox" name="languages" value="Python">Python</label>
        </div>
    </nav>
    <section id="main_content">
       
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
        ?>

         <article class="iten python">
            <div class="iten_img">
                <i class="fab fa-python"></i>
            </div>
            <div class="iten_info">
                <h1><?php echo get_tags() ?></h1>
                <h1><?php the_title() ?></h1>
                <p>Tags: <?php the_tags() ?></p>
                <p><?php the_content() ?></p>
            </div>
        </article>

        <?php
            endwhile;
        else :
        ?>
        <p>Não há posts!</p>
        <?php endif; ?>
    </section>

</main>

<?php get_footer() ?>