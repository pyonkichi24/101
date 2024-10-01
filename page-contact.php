<?php get_header(); ?>
<main>
    <!-- ループの基本形の文章です -->
    <?php if(have_posts()): while(have_posts()): the_post(); ?>
    <?php the_title(); ?>
    <?php the_content(); ?>
    <!-- コンテンツのHTMLやPHPを書く -->
    <?php endwhile; else: ?>
    <!-- コンテンツがないときのHTMLやPHPを書く -->
    <?php endif; ?>
</main>
<?php get_footer();