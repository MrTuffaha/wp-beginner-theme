<div class="bg-surface text-on-surface p-8 rounded-sm">
    <h1 class="text-text-headers text-3xl font-bold"><?php echo wp_title(''); ?></h1>

    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();

            get_template_part('template-parts/blog/posts', 'row');
        // Display post content
        endwhile;
        get_template_part('template-parts/blog/posts', 'pagination');
    endif;
    ?>
</div>