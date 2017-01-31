<?php 
	include 'header.php';
?>

<?php query_posts("showposts=6&paged=$paged"); ?>
<?php if(have_posts()): ?>
	<?php $counter = 1 ; ?>
	<?php while(have_posts()): ?>
		<?php the_post(); ?>
		<section id="publicacao<?php echo $counter ?>">
		<?php if (($counter % 2) == 1 ): ?>
				<div class="col-md-6 col-sm-6 col-xs-12 textoPost<?php echo $counter ?>">
					<h2><?php the_title(); ?></h2>
					<div class="data">
						<p>3 days ago by Jane Doe</p>
					</div>
					<div>
						<p><?php echo the_content(); ?></p>
					</div>
					
					<div class="read<?php echo $counter ?>">
						<a href="">Read More</a>
					</div>
				</div>
			
				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID), 'single-post-thumbnail'); ?>
				<?php if($image): ?>
					<div class="col-md-6 col-sm-6 col-xs-12 post-image" id="<?php echo $counter; ?>" style="background-image: url(<?php echo $image[0]; ?>">
					</div>
				<?php else: ?>
					<div class="col-md-6 col-sm-6 col-xs-12 post-image" id="<?php echo $counter; ?>" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/css/images/post1.png)">
					</div>
				<?php endif ?>

				
			
			<div class="linha"></div>

		<?php else: ?>
			

				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID), 'single-post-thumbnail'); ?>
				<?php if($image): ?>
					<div class="col-md-6 col-sm-6 col-xs-12 post-image" style="background-image: url(<?php echo $image[0]; ?>">
					</div>
				<?php else: ?>
					<div class="col-md-6 col-sm-6 col-xs-12 post-image" style="background-image: url(<?php bloginfo('template_directory'); ?>/assets/css/images/post2.png)">
					</div>
				<?php endif ?>
				<div class="col-md-6 col-sm-6 col-xs-12 textoPost<?php echo $counter ?>">
					<h2><?php the_title(); ?></h2>
					<div class="data">
						<p>3 days ago by Jane Doe</p>
					</div>
					<div>
						<p><?php echo the_content(); ?></p>
					</div>
					
					<div class="read<?php echo $counter ?>">
						<a href="">Read More</a>
					</div>
				</div>
			
			<div class="linha"></div>
		<?php endif ?>			
		</section>
		<?php $counter++  ?>
	<?php endwhile ?>
<?php endif ?>


<?php 
	include 'footer.php'; 
?>