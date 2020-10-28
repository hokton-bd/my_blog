<?php get_header() ; ?>

    <div class="primary">
    <div class="inner">
        
        <div class="category">
            <h2 class="category-title"><?php the_category(); ; ?></h2>
        </div>

        <?php 
            $category = get_the_category();
            if ($category[0] ) {
            echo '<div class="entry-item-tag">' . $category[0]->cat_name . '</div><!-- /entry-item-tag -->';
            }
        ;?>

        <?php if(have_posts()) : ?>              
        <div class="posts">
        
            <?php while(have_posts()) : the_posts() ;?>

            <a href="<?php the_permalink(); ?>" class="post-item post">
                <div class="post__head img-box">
                    <?php the_post_thumbnail('large') ;?>
                </div><!-- /.post__head -->

                <div class="post__body">
                    <h3 class="post__title"><?php the_title() ;?></h3>
                    <p class="post__desc"><?php the_excerpt() ;?></p>
                
                </div>

            </a><!-- /.post -->
        
        </div><!-- /.posts -->
        <?php endwhile; endif; ?>

    </div>
    </div>

<?php get_footer() ; ?>