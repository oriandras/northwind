<?php
get_header();
?>

<main id="primary" class="site-main">

    <?php
    if ( have_posts() ) :

        if ( is_home() && ! is_front_page() ) :
            ?>
            <header>
                <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
            </header>
            <?php
        endif;

        /* Start the Loop */
        while ( have_posts() ) :
            the_post();
            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
                </header>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
            </article>
            <?php
        endwhile;

    else :
        ?>
        <p><?php esc_html_e( 'No posts found.', 'northwind' ); ?></p>
        <?php
    endif;
    ?>

</main><!-- #main -->

<?php
get_sidebar(); // Included in case user creates one later, though not requested.
get_footer();