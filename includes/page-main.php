<div class="main-content wrapper">
  <div class="container">
    <div class="grid">
      <div class="row">
          <!-- Post loop -->
            <?php
                  if( have_posts() ):
                  while( have_posts() ): the_post();
              ?>
          <div id="page-container">
                  <!-- Post image -->             
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
            <?php if( tif_option('tif_opt_page_comments') == true):  ?>
              <div class="comment-box">
               <?php  comments_template(); ?>
              </div>
        <?php endif; ?>
          <!-- End of post loop -->
     </div>
    </div>
  </div>
</div>