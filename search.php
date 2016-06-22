<?php get_header(); ?>
<div class="container">
    <div class="grid">
        <header class="row">
            <h2 class="page-title"><?php printf( __( 'Search Results for: %s', 'tif-theme' ), get_search_query() ); ?></h2>
            <?php
            global $wp_query;
            $total_results = $wp_query->found_posts;
            ?>
            <p><?php echo $total_results; ?> results found.</p>
            <?php get_search_form(); ?>
        </header>
        <!-- First Row  -->
        <div class="row cells3">
            <?php
            if( have_posts() ):
            while( have_posts() ): the_post();
            ?>
            <!-- Starting of post -->
            <div class="cell ">
                <div class="panel block-shadow-info">
                    <div class="heading"><a href="<?php the_permalink();?>"><span class="title"><?php the_title(); ?></span></a></div>
                    <div class="content">
                        <?php if( has_post_thumbnail( ) ): ?>
                        <div class="image-container" style="height:200px;">
                            <div class="frame"><?php my_responsive_thumbnail(get_the_ID()); ?></div>
                            <div class="image-overlay">
                                <?php the_excerpt(); ?>
                            </div>
                        </div>
                        <?php else: the_excerpt(); endif;?>
                        <div class="cell bg-grayLighter panel-details">
                            <span class="mif-user"><?php the_author_posts_link(); ?></span>
                            <span class="mif-event-available"><?php the_date(); ?></span>
                            <span class="mif-bubble"> <?php comments_popup_link( "No Comments","One comment", "% Comments", "" ); ?></span>
                            <?php if (has_tag() ): ?><span class="mif-tag"> <button class="button mini-button"><?php the_tags( '', '</button><button class="button mini-button"> ', '' );?></button></span><?php else: ?>
                            <span class="mif-tag"> No tags</span><?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End of post -->
            <?php
            endwhile;
            else: echo _e('No results found.','tif-theme');
            endif;
            ?>
            <!-- End of row -->
        </div>
    </div>
</div>
<?php get_footer(); ?>