<?php global $page_builder;?>
<div class="page-members wrapper">
<div class="container">
	<div class="grid">
	<?php echo tif_title( __('Team Members', TIF_TD)); ?>
		<div class="members">
			<div class="row cells<?php echo $page_builder['members_row'];?>">
				<?php $query = new WP_Query('post_type=members');
				  if($query->have_posts()):
				  	while($query->have_posts()): $query->the_post();
				  	$members_opt = get_post_meta($post->ID, 'custom_members_options', true);
				?>

				<div class="cell member">
					<div class="member-image"><?php the_post_thumbnail();?></div>
					<div class="member-details">
						<h2><?php the_title(); ?></h2>
						<p><?php the_content(); ?></p>
						<ul class="member-social">
							<?php foreach($members_opt as $member_social => $member_social_link ):
									
									if($member_social_link != NULL ){
										switch($member_social){
											case 'members_facebook_url':
											echo '<li><a href="'.$member_social_link.'"><i class="fa fa-facebook fa-lg"></i></a></li>';
											break;
											case 'members_twitter_url':
											echo '<li><a href="'.$member_social_link.'"><i class="fa fa-twitter fa-lg"></i></a></li>';
											break;
											case 'members_linkedin_url':
											echo '<li><a href="'.$member_social_link.'"><i class="fa fa-linkedin fa-lg"></i></a></li>';
											break;
											case 'members_instagram_url':
											echo '<li><a href="'.$member_social_link.'"><i class="fa fa-instagram fa-lg"></i></a></li>';
											break;
											case 'members_pinterest_url':
											echo '<li><a href="'.$member_social_link.'"><i class="fa fa-pinterest fa-lg"></i></a></li>';
											break;
											case 'members_google_url':
											echo '<li><a href="'.$member_social_link.'"><i class="fa fa-google-plus fa-lg"></i></a></li>';
											break;
											case 'members_youtube_url':
											echo '<li><a href="'.$member_social_link.'"><i class="fa fa-youtube-play fa-lg"></i></a></li>';
											break;
											case 'members_skype_url':
											echo '<li><a href="'.$member_social_link.'"><i class="fa fa-skype fa-lg"></i></a></li>';
											break;
										}
									}
						 endforeach; ?>
						</ul>
					</div>				
				</div>
			<?php endwhile; wp_reset_query(); else: echo 'No members added.'; endif;?>
			</div>
		</div>
	</div>
</div>
</div>	