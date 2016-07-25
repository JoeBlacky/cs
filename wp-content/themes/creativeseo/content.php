<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Creative_Seo
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post flex'); ?>>
    <?php if(is_single()): ?>
       <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    <?php else: ?>
        <a class="post-image" href="<?php echo esc_url(get_permalink()); ?>">
                <?php if(has_post_thumbnail()): ?>
                    <?php the_post_thumbnail(); ?>
                <?php else: ?>
                    <img src="<?php echo getPlaceholder(); ?>" alt="<?php echo $post->post_name; ?>" />
            <?php endif;?>
        </a>
        <div class="post-entry">
            <h2 class="post-title">
                <a href="<?php echo esc_url(get_permalink()); ?>">
                    <?php echo $post->post_title ?>
                </a>
            </h2>
            <div class="post-meta">
                <span class="post-author">
                    <?php _e('by'); ?>
                    <?php the_author_posts_link(); ?>
                </span>
                <span class="post-category">
                    <?php _e('in'); ?>
                    <?php the_category(', '); ?>
                </span>
                <span class="post-date">
                    <?php  the_time('l dS F \'y'); ?>
                </span>
            </div>
            <div class="post-content">
                <?php echo customStringLength($post->post_content, 300); ?>
            </div>
        </div>
    <?php endif; ?>

    <?php /* if ( 'post' === get_post_type() ) : ?>
        by <?php the_author(); ?>
        <p class="postmetadata">in <?php the_category(', '); ?></p>
        <?php  the_time('l dS F \'y'); ?>
    <?php endif; */ ?>
</article>