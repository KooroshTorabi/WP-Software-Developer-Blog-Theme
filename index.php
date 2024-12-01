<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header>
        <h1><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
        <p><?php bloginfo('description'); ?></p>
    </header>
    <main>
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
        ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <h2><?php the_title(); ?></h2>
                    <div class="post-image">
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail('large', ['class' => 'post-image']);
                        } ?>
                    </div>
                    <div class="content">
                        <?php the_content(); ?>
                    </div>
                </article>
        <?php
            endwhile;
        else :
            echo '<p>No posts found.</p>';
        endif;
        ?>
    </main>
    <?php wp_footer(); ?>
</body>


</html>