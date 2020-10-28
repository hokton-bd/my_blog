<?php get_header() ; ?>

    <div class="primary">
    <div class="inner">

        <?php if(have_posts()) : ?>              
        <div class="posts">
        
            <?php while(have_posts()) : the_post() ;?>

            <div href="<?php the_permalink(); ?>" class="post-item post">
                <div class="post__head img-box">
                    <time class="post__date"><?php the_time('Y/n/j') ;?></time>
                    <a href="<?php the_permalink(); ?>" class="post__title"><?php the_title() ;?></a>
                </div><!-- /.post__head -->
                <div class="post__thumbnail">
                    <?php the_post_thumbnail('large') ;?>
                </div>

                <div class="post__body">
                    <?php the_excerpt() ;?>
                    <a href="<?php the_permalink(); ?>" class="read-more">read more</a>
                </div>

            </div><!-- /.post -->
        
            <?php endwhile ;?>
        </div><!-- /.posts -->
        <?php endif; ?>

    </div>
    </div>

<?php get_footer() ; ?>