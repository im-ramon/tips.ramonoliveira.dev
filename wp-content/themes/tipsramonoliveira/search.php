<?php get_header() ?>
<main>
    <section id="main_content">
       
        <?php
        if (have_posts()) :
            while (have_posts()) :
                the_post();
        ?>

            <?php 
            
            get_template_part('template-parts/posts-finded');
            
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