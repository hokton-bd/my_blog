<?php get_header() ; ?>

<div class="primary">
    <div class="inner">
        <div class="post">

            <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
            <div class="post__post-head post-head">
                <time class="post-head__time"><?php the_time('Y/n/j') ; ?></time>
                <h1 class="post-head__title"><?php the_title() ; ?></h1>
                <?php the_category(' / ') ; ?>
            </div>

            <div class="post__post-thumbnail">
                <?php the_post_thumbnail('large') ; ?>
            </div>

            <div class="content post__content">
                <?php 
                    $content_string = get_the_content();

                    $content_string = str_replace('<p','<p class="paragraph" ',$content_string);
                    $content_string = str_replace('<h2','<h2 class="heading-2" ',$content_string);
                    $content_string = str_replace('<h3','<h3 class="heading-3" ',$content_string);
                    $content_string = str_replace('<h4','<h4 class="heading-4" ',$content_string);
                    
                    echo $content_string;
                
                ; ?>

            </div>

            <?php endwhile ; endif ?>
        </div><!-- content -->
    </div>
</div>

<?php get_footer() ; ?>