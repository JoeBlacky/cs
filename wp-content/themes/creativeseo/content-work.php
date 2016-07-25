<article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
    <?php if(is_single()): ?>
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    <?php else: ?>
        <a href="<?php echo esc_url(get_permalink()); ?>">
            <?php if (get_field('work_post_image', $post->ID)): ?>
                <img src="<?php echo get_field('work_post_image', $post->ID); ?>" alt="<?php echo $post->post_name; ?>" class="post-image" />
            <?php else: ?>
                <img src="<?php echo getPlaceholder(); ?>" alt="<?php echo $post->post_name; ?>" class="post-image" />
            <?php endif; ?>
            <h2 class="post-title">
                <?php echo $post->post_title; ?>
            </h2>
        </a>
    <?php endif; ?>
</article>
