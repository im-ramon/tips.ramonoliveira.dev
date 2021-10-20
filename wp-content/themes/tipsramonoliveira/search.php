<?php get_header() ?>
<main>
    <h1 style="text-align: center;">Resultados encontrados:</h1>
    <section id="main_content">
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
        ?>

            <?php 
            
            if( has_category()):
                get_template_part('template-parts/posts-finded');
            endif;
            
            ?>

        <?php
            endwhile;
            the_posts_pagination(array('prev_text' => 'Anterior', 'next_text' => 'Próximo'));
        else :
        ?>
        <p>Não há posts!</p>
        <?php endif; ?>
    </section>

</main>

<?php get_footer() ?>