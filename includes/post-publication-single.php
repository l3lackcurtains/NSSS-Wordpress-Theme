<div class="publicationlist wrapper">
    <div class="publication-header"><h1><?php the_title(); ?></h1></div>
                    <?php 
                        $first = 1;
                        $args = array(
                                'post_type' => array('publicationlist'),
                                'posts_per_page' => 5,
                            );         
                        $publicationlist = new WP_Query( $args );

                        if ( $publicationlist->have_posts() ) : 
                            while ( $publicationlist->have_posts() ) : $publicationlist->the_post();

                            
                                $publicationlist_meta = get_post_meta( $post->ID, 'custom_publicationlist_options', true ); 
                                $attachment = wp_get_attachment_image_src( $publicationlist_meta['publicationlist_img'], 'full' );
                                        ?>

                            <div class="publication-content row cells6">
                            <div class="cell">
                            <img src="<?php echo $attachment[0] ?>" height="300" width="200" data-role="fitImage" data-format="square">
                            </div>
                            <div class="cell colspan5">
                                <div class="publication-title">
                            <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
                                </div>
                                <div class="publication-meta">Author: <?php echo $publicationlist_meta['publicationlist_author']; ?></div>
                                <div class="publication-desc"><?php echo $publicationlist_meta['publicationlist_desc']; ?></div>
                            </div>
                            </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                 <!-- Page navigation -->
  <?php wp_page_navi(); ?>
  <!-- end of page navigation -->
            <?php else: ?>
                <p><?php _e( 'Sorry, No publication Posted yet.' ); ?></p>
            <?php endif; ?>
</div>
