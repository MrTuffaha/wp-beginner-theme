<hr class="my-10 bg-on-surface-border">
<article class="flex flex-col gap-4">
    <h2 class="font-bold text-2xl text-text-headers transition-colors ease-in-out hover:text-primary w-fit">
        <a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a>
    </h2>
    <p class="text-sm">Last updated on <?php echo the_modified_date() ?> by <a href="<?php the_author_meta('url'); ?>" class="text-primary hover:underline"><?php the_author(); ?></a></p>

    <div class="flex flex-row gap-4 items-center">
        <img class="min-w-[200px] min-h-[200px]" src="<?php the_post_thumbnail_url("200x200") ?>" width="200" alt="">
        <p><?php echo get_the_excerpt(); ?> <a class="text-primary hover:underline" href="<?php echo the_permalink() ?>">Read More!</a></p>
    </div>
</article>