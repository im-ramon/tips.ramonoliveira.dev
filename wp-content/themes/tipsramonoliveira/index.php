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

            <?php 
            
            get_template_part('template-parts/posts');
            
            ?>

        <?php
            endwhile;
        else :
        ?>
        <p>Não há posts!</p>
        <?php endif; ?>
    </section>

</main>

<?php get_footer() ?>