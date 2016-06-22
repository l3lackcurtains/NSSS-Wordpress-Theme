<div class="publicationlist wrapper">
                    <?php 
                        $first = 1;
                        $args = array(
                                'post_type' => array('publicationlists'),
                                'posts_per_page' => 5,
                            );         
                        $publicationlists = new WP_Query( $args );

                        if ( $publicationlists->have_posts() ) : 
                            while ( $publicationlists->have_posts() ) : $publicationlists->the_post();
                                       ?>

                            <div class="publication">
                        <?php if(has_post_thumbnail()):?>
                            <div class="publication-img">
                            <img src="<?php $img = wp_get_attachment_image_src( get_post_thumbnail_id() ); echo $img[0]; ?>">
                            </div>
                        <?php endif; ?>
                            <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
                                <div class="publication-meta"><p><i class="fa fa-user"></i> <?php _e('Author: ',TIF_TD); if(!empty($publications_opt['publication_author'])): echo $publications_opt['publication_author']; endif; ?> <i class="fa fa-clock-o"></i> <?php the_time('F jS, Y'); ?></p></div>
                                <div class="publication-desc"><?php the_content(); ?></div>
                            </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                 <!-- Page navigation -->
  <?php wp_page_navi(); ?>
  <!-- end of page navigation -->
            <?php else: ?>
                <p><?php _e( 'No publications Found. ' ); ?></p>
            <?php endif; ?>
</div>
