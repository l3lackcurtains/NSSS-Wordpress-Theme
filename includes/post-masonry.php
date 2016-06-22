<div class="post-masonry wrapper">
  <div class="row cells3">
       <?php     
          if( have_posts() ):
          while( have_posts() ): the_post();
       ?>
    <!-- Post container -->
    <div id="post-container" class="cell">
          <!-- Post meta -->
          <div class="post-title"><h2><a href="<?php the_permalink();?>"><span class="title"><?php the_title(); ?></span></a></h2></div>
            <div class="entry-meta">
            Published on <span class="fa fa-clock-o"> <?php the_date(); ?></span> by <span class="fa fa-user"> <?php the_author_posts_link(); ?> </span>
          </div>

          <!-- Post image -->
          <?php if( has_post_thumbnail() ):?> 
          <div class="post-image">
                  <?php the_post_thumbnail(); ?>
          </div>
          <?php endif; ?>

          <!-- Post content -->
             <p class="post-content">
             <?php
             $content = get_the_content(); 
             echo substr(strip_tags($content), 0,100) . '<br/><br/><a class="readmore" href="'.get_the_permalink().'">Read More</a>';
             ?>
             </p>       
          <!-- end of post content-->
          <div class="clearfix"></div>

        </div>
    <!-- End of containet -->
    <?php endwhile; ?>
    </div>
    
 </div>

  <!-- Page navigation -->
  <?php wp_page_navi(); ?>
  <!-- end of page navigation -->

     <?php
          else: echo _e('No post match your citeria','tif-theme');
          endif;
     ?>
</div>