<?php get_header(); ?>

<div id="cuerpo" class="exterior clearfix">
    <div class="interior clearfix">
        <div id="pagina">gfds
            <?php while (have_posts ()) : the_post(); ?>
                <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
            <?php endwhile; ?>
            </div>
            <?php get_sidebar( ); ?>
        </div>
    </div>

<?php get_footer(); ?>
