<?php get_header(); ?>        
<?php get_template_part('includes/newsticker' );?>
<!-- Main website container -->
<div class="main-content">
  <div class="container">
    <div class="grid">
      <div class="row">
          <!-- Post loop -->
            <?php
                  if( have_posts() ):
                  while( have_posts() ): the_post();
              ?>
          <div id="single-container">
                  <!-- Post image -->
                            <div class="post-title"><h2><a href="<?php the_permalink();?>"><span class="title"><?php the_title(); ?></span></a></h2></div>
            <div class="entry-meta">
          <div class="row cells2">
          	<div class="cell">
            Published on <span class="fa fa-event"> <?php the_date(); ?></span> by <span class="fa fa-user"> <?php the_author_posts_link(); ?> </span>
                          <span class="fa fa-bubble"> <?php comments_popup_link( "0","1", "%", "" ); ?> Comments</span>
            </div>
            <div class="cell">
          	<div class="split-button">
          	    <button class="button">Categories</button>
          	    <button class="split dropdown-toggle"></button>
          	    <ul class="split-content d-menu" data-role="dropdown">
          	     	<?php if( has_category() ): ?>
          		               <li><?php echo get_the_category_list( __( '</li><li> ', 'tif-theme' ) ); ?></li>
          			<?php endif; ?>

          	    </ul>
              </div>
              <?php if (has_tag() ): ?>
              	<div class="split-button">
              	    <button class="button">Tags</button>
              	    <button class="split dropdown-toggle"></button>
              	    <ul class="split-content d-menu" data-role="dropdown">
              	    

              		               <li><?php the_tags( '', '</li><li> ', '' );?></li>
              	    
              	    </ul>
              </div>
          <?php endif; ?>
        </div>

                      </div> 
                      </div>
          <?php if( has_post_thumbnail() ):?> 
          <div class="single-image">
                  <?php the_post_thumbnail(); ?>
          </div>
          <?php endif; ?>
                  <!-- Post content -->
                  <div class="post-content">

                
                <p class="post-content">
                <?php
                the_content( );
                ?>
                </p>
                  
           </div>       
              <?php
                  endwhile;
                  else: echo _e('No post match your citeria','tif-theme');
                  endif;
              ?>
          <!-- End of post loop -->
          <!-- .post-navigation -->
          		<div class="post-navigation">
          			<div class="post-previous"><?php previous_post_link( '%link', '<span>'. __( 'Previous' ,'tif-theme').'</span> %title' ); ?></div>
          			<div class="post-next"><?php next_post_link( '%link', '<span>'. __( 'Next' ,'tif-theme').'</span> %title' ); ?></div>
          		</div>
          <!-- end of post navigation -->
          <!-- Author Box -->
          <div id="author-box" class="row cells4">
          <div class="cell">
             <div class="author-pic"><?php echo get_avatar( get_the_author_email(), '80' ); ?></div>
                 <div class="author-name"><h2><?php the_author_meta( "display_name" ); ?></h2></div>
             </div>
             <div class="cell colspan3">
             <div class="author-bio"><p><?php the_author_meta( "user_description" ); ?></p></div>
          </div>
          </div>
          <!-- end of author box -->
          <?php get_template_part('includes/relatedpost' );?>
         <!-- End Of Related Posts -->
          <div class="comment-box">
              <?php  comments_template(); ?>
          </div>
     </div>
    </div>
  </div>
  <!-- End of Main website container -->
</div>
<?php get_footer(); ?>