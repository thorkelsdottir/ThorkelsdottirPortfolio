<?php
/**
 * The template for displaying all single showcase works and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<?php get_template_part('template-parts/page-menu-black'); ?>
<?php get_template_part('template-parts/page-title-logo'); ?>
<?php get_template_part('template-parts/page-ticker-vertical'); ?>
<?php while( have_posts() ) : the_post(); ?>

<div class="casestudy_page">

		<div class="casestudy_page_title">
		  <h1>	<?php the_field('project_title'); ?></h1>
		</div>

		<?php
		// check if the flexible content field has rows of data
		if( have_rows('eliments') ):
		?>

			<?php
			// loop through the rows of data
			while ( have_rows('eliments') ) : the_row();
			?>

      	<?php if( get_row_layout() == 'flex_pic_intro_1' ):
				$image1 = get_sub_field('flex_image_1');

					// vars
					$url = $image1['url'];
					// thumbnail
					$size = 'fp-medium';
					$thumb = $image1['sizes'][ $size ];
				?>

					<div class="elementsIntro">
							<div class="introPic" style="background-image: url(<?php echo $thumb;?>)"></div>

						<div class="elementsIntroText">
							<div class="elementsIntroText_main">
								<h2><?php the_sub_field('flex_intro_title'); ?></h2>
								<p><?php the_sub_field('flex_intro_1'); ?></p>
							</div>
							<div class="elementsIntroText_under">
								<div class="elementsIntroText_under_left">
									<h3><?php the_sub_field('flex_intro_undertitle1'); ?></h3>
									<p><?php the_sub_field('flex_intro_undertext1'); ?></p>
								</div>
								<div class="elementsIntroText_under_right">
									<h3><?php the_sub_field('flex_intro_undertitle2'); ?></h3>
									<p><?php the_sub_field('flex_intro_undertext2'); ?></p>
								</div>
							</div>

							<?php if( get_sub_field('flex_link_to_site') ): ?>
								<div class="elementsIntroText_link">
									<a href=" <?php the_sub_field('flex_link_to_site'); ?> " target="_blank" ><i class="fa fa-long-arrow-right" aria-hidden="true"></i> To Project</a>
								</div>
							<?php endif; ?>


						</div>
					</div>

					<?php elseif( get_row_layout() == 'flex_photograpy_intro' ):
					$photograpy_intro_pic = get_sub_field('flex_photograpy_intro_pic');
					// vars
					$url = $photograpy_intro_pic['url'];
					// thumbnail
					$size = 'fp-medium';
					$thumb1 = $photograpy_intro_pic['sizes'][ $size ];
					?>

						<div class="photography_elementsIntro">
							<div class="photo_intro_left">
								<div class="photo_introPic" style="background-image: url(<?php echo $thumb1;?>)"></div>
								<div class="underpictext">
									<p><?php the_sub_field('flex_intro_underpictext'); ?></p>
								</div>
							</div>
							<div class="photo_intro_right">
								<div class="elementsPhotoIntroText">
									<div class="elementsPhotoIntroText_main">
										<h2><?php the_sub_field('flex_photo_intro_title'); ?></h2>
										<p><?php the_sub_field('flex_photo_intro_main'); ?></p>
									</div>
									<div class="elementsIntroText_link">
										<a href=" <?php 						the_sub_field('flex_photo_link_to_site'); ?> " target="_blank" ><i class="fa fa-long-arrow-right" aria-hidden="true"></i> More projects</a>
									</div>

								</div>
							</div>
						</div>

					<?php elseif( get_row_layout() == 'flex_poster_intro' ):
					$poster_intro_pic = get_sub_field('flex_poster_intro_pic');
					// vars
					$url = $poster_intro_pic['url'];
					// thumbnail
					$size = 'fp-medium';
					$thumb2 = $poster_intro_pic['sizes'][ $size ];
					?>

						<div class="poster_elementsIntro">
							<div class="poster_intro_left">
								<div class="poster_introPic" style="background-image: url(<?php echo $thumb2;?>)"></div>

							</div>
							<div class="poster_intro_right">
								<div class="elementsPosterIntroText">
									<div class="elementsPosterIntroText_main">
										<h2><?php the_sub_field('flex_poster_intro_title'); ?></h2>
										<p><?php the_sub_field('flex_poster_intro_main'); ?></p>
									</div>
									<div class="elementsIntroText_under_left">
										<h3><?php the_sub_field('flex_poster_intro_undertitle1'); ?></h3>
										<p><?php the_sub_field('flex_poster_intro_undertext1'); ?></p>
									</div>

								</div>
							</div>
						</div>

					<?php elseif( get_row_layout() == 'flex_poster_intro2' ):
					$poster_intro_pic2 = get_sub_field('flex_poster_intro_pic2');
					// vars
					$url = $poster_intro_pic2['url'];
					// thumbnail
					$size = 'fp-medium';
					$thumb3 = $poster_intro_pic2['sizes'][ $size ];
					?>

						<div class="poster_elementsIntro2">

							<div class="poster_intro_right2">
								<div class="elementsPosterIntroText2">
									<div class="elementsPosterIntroText_main2">
										<h2><?php the_sub_field('flex_poster_intro_title2'); ?></h2>
										<p><?php the_sub_field('flex_poster_intro_main2'); ?></p>
									</div>
									<div class="elementsIntroText_under_left2">
										<h3><?php the_sub_field('flex_poster_intro_undertitle2'); ?></h3>
										<p><?php the_sub_field('flex_poster_intro_undertext2'); ?></p>
									</div>
								</div>
							</div>
							<div class="poster_intro_left2">
								<div class="poster_introPic2" style="background-image: url(<?php echo $thumb3;?>)"></div>
							</div>
						</div>

				<?php elseif( get_row_layout() == 'flex_scroll_display' ):
				$image2 = get_sub_field('scroll_pic_1');
				?>
					<div class="elements_scroll pinned-trigger0">
						<div class="elements_scroll_text pinned-element0">
							<h2><?php the_sub_field('flex_scroll_title'); ?></h2>
							<p><?php the_sub_field('flex_scroll_text'); ?></p>
						</div>
						<div class="scrollPic" >
							<img src="<?php echo $image2['url'];?>" alt="" class="stylesheetImg">
						</div>
					</div>


	      <?php elseif( get_row_layout() == 'flex_wide_pic_1' ):
				$image3 = get_sub_field('wide_pic_1');
				// vars
				$url = $image3['url'];
				// thumbnail
				$size = 'fp-xlarge';
				$thumb4 = $image3['sizes'][ $size ];
				?>
					<div class="elements_wide_pic">
						<div class="widePic" style="background-image: url(<?php echo $thumb4;?>)"></div>
						</div>

					<?php elseif( get_row_layout() == 'flex_wide_pic_2' ):
					$imagewidepic2 = get_sub_field('wide_pic_2');
					// vars
					$url = $imagewidepic2['url'];
					// thumbnail
					$size = 'fp-xlarge';
					$thumb5 = $imagewidepic2['sizes'][ $size ];
					?>
						<div class="elements_wide_pic2">
							<div class="widePic" style="background-image: url(<?php echo $thumb5;?>)"></div>
							</div>
							<div class="elements_wide_full_pic_text">
								<p><?php the_sub_field('wide_pic_undertext'); ?></p>
							</div>

					<?php elseif( get_row_layout() == 'flex_wide_full_pic' ):
  				$imagewidefull = get_sub_field('wide_full_pic');
					// vars
					$url = $imagewidefull['url'];
					// thumbnail
					$size = 'fp-xlarge';
					$thumb6 = $imagewidefull['sizes'][ $size ];
  				?>
  					<div class="elements_wide_full_pic">
  						<div class="widefullPic" style="background-image: url(<?php echo $thumb6;?>)"></div>
							<div class="elements_wide_full_pic_text">
								<p><?php the_sub_field('elements_wide_full_pic_text'); ?></p>
							</div>
							</div>


				<?php elseif( get_row_layout() == 'flex_two_pics' ):
				$image4 = get_sub_field('flex_two_pics_pic_1');
				// vars
				$url = $image4['url'];
				// thumbnail
				$size = 'fp-medium';
				$thumb7 = $image4['sizes'][ $size ];

				$image5 = get_sub_field('flex_two_pics_pic_2');
				// vars
				$url = $image5['url'];
				// thumbnail
				$size = 'fp-medium';
				$thumb8 = $image5['sizes'][ $size ];
				?>
					<div class="elements_two_pics">
						<div class="elements_two_pics_text">
							<h2><?php the_sub_field('flex_two_pics_title'); ?></h2>
							<p><?php the_sub_field('flex_two_pics_text'); ?></p>
						</div>
						<div class="two_pics_pic1" style="background-image: url(<?php echo $thumb7;?>)"></div>
						<div class="two_pics_pic2" style="background-image: url(<?php echo $thumb8;?>)"></div>
					</div>

				<?php elseif( get_row_layout() == 'flex_two_pics_photograpy' ):
				$imagephotoleft = get_sub_field('flex_two_pics_photo_1');
				// vars
				$url = $imagephotoleft['url'];
				// thumbnail
				$size = 'fp-medium';
				$thumb9 = $imagephotoleft['sizes'][ $size ];

				$imagephotoright = get_sub_field('flex_two_pics_photo_2');
				// vars
				$url = $imagephotoright['url'];
				// thumbnail
				$size = 'fp-medium';
				$thumb10 = $imagephotoright['sizes'][ $size ];
				?>
					<div class="elements_two_pics_photos">


						<div class="elements_two_pics_photo_text_right">
							<div class="two_pics_photo_2" style="background-image: url(<?php echo $thumb9;?>)"></div>
							<p><?php the_sub_field('flex_two_pics_underpictext_right'); ?></p>
						</div>

						<div class="elements_two_pics_photo_text_left">
							<div class="two_pics_photo_1" style="background-image: url(<?php echo $thumb10;?>)"></div>
							<p><?php the_sub_field('flex_two_pics_underpictext_left'); ?></p>
						</div>

					<?php elseif( get_row_layout() == 'flex_two_pics_photograpy2' ):
					$imagephoto3left = get_sub_field('flex_two_pics_photo_3');
					// vars
					$url = $imagephoto3left['url'];
					// thumbnail
					$size = 'fp-medium';
					$thumb11 = $imagephoto3left['sizes'][ $size ];

					$imagephoto4right = get_sub_field('flex_two_pics_photo_4');
					// vars
					$url = $imagephoto4right['url'];
					// thumbnail
					$size = 'fp-medium';
					$thumb12 = $imagephoto4right['sizes'][ $size ];
					?>
						<div class="elements_two_pics_photos">


							<div class="elements_two_pics_photo_text_right">
								<div class="two_pics_photo_3" style="background-image: url(<?php echo $thumb11;?>)"></div>
								<p><?php the_sub_field('flex_two_pics_underpictext3_right'); ?></p>
							</div>

							<div class="elements_two_pics_photo_text_left">
								<div class="two_pics_photo_4" style="background-image: url(<?php echo $thumb12;?>)"></div>
								<p><?php the_sub_field('flex_two_pics_underpictext4_left'); ?></p>
							</div>

					</div>
</div>
  			<?php endif; ?>
    		<?php endwhile; ?>

					<?php else : ?>

					<?php
					// no layouts found
					endif; ?>




<?php endwhile;?>
<div class="prev_next_work">
	<?php
/**
 *  Infinite next and previous post looping in WordPress
 */
global $post;

//previous post
if( get_adjacent_post(false, '', true) ) {
	$previuspostID = get_previous_post_id( $post->ID );
	$previuspost = new WP_Query('p='.$previuspostID.'posts_per_page=1&order=DESC&post_type=showcase'); $previuspost->the_post();
	$firstTitle = get_field('showcase_work_title');

		echo '<div class="previousPost">';

			echo '<a href="' . get_permalink() . '">';

			echo '<div class="prev_work_page">';
				$this_showcase_work_image = get_field('showcase_work_image');
					if( !empty($this_showcase_work_image) ):

					echo '<div class="prev_showcase_work" style="background-image: url(' .$this_showcase_work_image['url'].')"></div>';
				 endif;
			echo '</div>';
			echo '</a>';
			echo '<p>' .$firstTitle. '</p>';
		echo '</div>';


	wp_reset_query();
} else {
    $first = new WP_Query('posts_per_page=1&order=DESC&post_type=showcase'); $first->the_post();
		$firstTitle = get_field('showcase_work_title');

			echo '<div class="previousPost">';

				echo '<a href="' . get_permalink() . '">';

				echo '<div class="prev_work_page">';
					$this_showcase_work_image = get_field('showcase_work_image');
						if( !empty($this_showcase_work_image) ):

						echo '<div class="prev_showcase_work" style="background-image: url(' .$this_showcase_work_image['url'].')"></div>';
					 endif;
				echo '</div>';
				echo '</a>';
				echo '<p>' .$firstTitle. '</p>';
			echo '</div>';

  	wp_reset_query();
};

//current post
$currentTitle = get_field('showcase_work_title');
echo '<div class="thisPost">';

	echo '<div class="this_work_page">';
		$this_showcase_work_image = get_field('showcase_work_image');
			if( !empty($this_showcase_work_image) ):

				echo '<div class="this_showcase_work" style="background-image: url(' .$this_showcase_work_image['url'].')"></div>';
			 endif;
		echo '</div>';
		echo '<p><i class="fa fa-angle-double-left" aria-hidden="true"></i>' .$currentTitle. '<i class="fa fa-angle-double-right" aria-hidden="true"></i></p>';
	echo '</div>';


//next post
if( get_adjacent_post(false, '', false) ) {
	$nextpostID = get_next_post_id( $post->ID );
	$nextpost = new WP_Query('p='.$nextpostID.'posts_per_page=1&order=ASC&post_type=showcase'); $nextpost->the_post();
	$lastTitle = get_field('showcase_work_title');

	echo '<div class="nextPost">';
		echo '<a href="' . get_permalink() . '">';
		echo '<div class="prev_work_page">';
			$this_showcase_work_image = get_field('showcase_work_image');
				if( !empty($this_showcase_work_image) ):

				echo '<div class="prev_showcase_work" style="background-image: url(' .$this_showcase_work_image['url'].')"></div>';
			 endif;
		echo '</div>';
		echo '</a>';
		echo '<p>' .$lastTitle. '</p>';
	echo '</div>';

	wp_reset_query();
} else {
	$last = new WP_Query('posts_per_page=1&order=ASC&post_type=showcase'); $last->the_post();
		$lastTitle = get_field('showcase_work_title');

		echo '<div class="nextPost">';
    	echo '<a href="' . get_permalink() . '">';
			$lastID = $last->posts[0]->ID;

			echo '<div class="prev_work_page">';
				$this_showcase_work_image = get_field('showcase_work_image');
					if( !empty($this_showcase_work_image) ):

					echo '<div class="prev_showcase_work" style="background-image: url(' .$this_showcase_work_image['url'].')"></div>';
				 endif;
			echo '</div>';
			echo '</a>';
			echo '<p>' .$lastTitle. '</p>';
		echo '</div>';

    wp_reset_query();
};
	?>
</div>








<?php get_footer();
