<?php
global $wp_query;
get_header();
?>

    <main>
        <section class="products">
            <h2>Search results</h2>
            <?php
            $args = ['tag' => 'featured', 'posts_per_page' => 3];
            $products = new WP_Query( $args );
            generate_article($wp_query);
            ?>
        </section>
    </main>
<?php
get_sidebar();
get_footer();