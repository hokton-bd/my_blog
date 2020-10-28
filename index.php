<?php get_header() ; ?>
    <?php 
            $pickup_posts = get_posts(array(
                'post_type' => 'post',
                'posts_per_page' => '3',
                'tag' => 'pickup',
                'orderBy' => 'DESC',
            ));
        
        ; ?>
    
        <div class="featured-posts">
        <div class="inner">
        
            <?php foreach($pickup_posts as $post) : setup_postdata( $post ); ?>
            
                <div class="featured-posts__item featured-post">
                
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail('large') ; ?>
                    </div>

                    <div class="post-body">
                        <h2 class="post-title"><a href="<?php echo esc_url(get_permalink()); ?>"></a><?php the_title(); ?></h2>

                        <a href="<?php echo esc_url(get_permalink()); ?>" class="read-more">read more</a>
                    </div>
                    
                </div>

            <?php endforeach ; wp_reset_postdata(); ?>

        </div>
        </div>

    <div class="primary">
    <div class="inner primary__inner">

        <div class="posts">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>

            <div class="posts__item post">

                <div class="post__date"><time><?php the_time('Y/n/j') ; ?></time></div>

                <div class="post__title">
                    <h2 class="title"><?php the_title() ; ?></h2>
                </div>

                <div class="post__category">
                    <p class="category">カテゴリー : <?php the_category(' / ') ; ?></p>
                </div>

                <div class="post__thumbnail">
                    <?php the_post_thumbnail('large') ; ?>
                </div>

                <div class="post__excerpt">
                    <?php the_excerpt() ; ?>
                </div>

                <a href="<?php the_permalink(); ?>" class="read-more">read more</a>

            </div>

        <?php endwhile; endif; ?>
        </div>
    </div>    
    </div>

<?php get_footer() ; ?>