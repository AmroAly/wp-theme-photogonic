<div class="w3-col s4 l4 pic">
<?php if(has_post_thumbnail()): ?>
        <div class="post-thumbnail">
            <?php 
                $attr = [
                    'class' => 'w3-animate-opacity w3-hover-opacity'
                ];
             ?>

                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail($size, $attr) ?></a>
        </div>
    <?php endif; ?>
    <p><?php the_excerpt(); ?></p>
</div>
