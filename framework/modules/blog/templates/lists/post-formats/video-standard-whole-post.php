<article id="post-<?php the_ID(); ?>" <?php post_class($featured_class); ?>>
	<div class="eltd-post-content">
		<?php if($featured_class != ''){ ?>
			<div class="eltd-featured-triangle-holder">
				<div class="eltd-featured-triangle"></div>
				<span class="icon_star_alt"></span>
			</div>	
		<?php } ?>
		<div class="eltd-post-image">
			<?php flow_elated_get_module_template_part('templates/parts/video', 'blog'); ?>
		</div>
		<div class="eltd-post-text">
			<div class="eltd-post-text-inner">
				<?php flow_elated_get_module_template_part('templates/lists/parts/title', 'blog'); ?>
				<div class="eltd-post-info">
					<?php flow_elated_post_info(array('date' => 'yes', 'author' => 'yes', 'category' => 'yes', 'comments' => 'yes', 'share' => 'yes', 'like' => 'yes')) ?>
				</div>
				<?php
					the_content();
				?>
			</div>
		</div>
	</div>
</article>