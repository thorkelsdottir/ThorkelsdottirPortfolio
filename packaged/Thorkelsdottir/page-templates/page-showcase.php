<?php
/*
Template Name: Showcase
*/
get_header(); ?>


  <?php get_template_part('template-parts/page-menu-black'); ?>
  <?php get_template_part('template-parts/page-title-logo'); ?>

  <div class="pageTitleShowcase">
    <h1>SHOWCASE</h1>
  </div>

  <?php get_template_part('template-parts/page-ticker-vertical'); ?>

  <div class="black-line"></div>

    <?php

    // args
    $args = array(
    	'posts_per_page'	=> -1,
    	'post_type'		=> 'showcase',
      'order' => 'ASC'
    );


    // query
    $the_query = new WP_Query( $args );

    ?>
    <?php if( $the_query->have_posts() ): ?>

  	<?php while( $the_query->have_posts() ) : $the_query->the_post();   $showcase_url = get_permalink(); ?>
      <div class='post'>
          <p class="description" style="display: none;"><?php the_field("showcase_work_title", $post->ID); ?></p>
          <a href="<?php echo $showcase_url ?>">
            <div class="work">
              <?php $image = get_field('showcase_work_image');

                // vars
                $url = $image['url'];
                $title = $image['title'];
                $alt = $image['alt'];
                $caption = $image['caption'];

                // thumbnail
                $size = 'large';
                $thumb = $image['sizes'][ $size ];
                $width = $image['sizes'][ $size . '-width' ];
                $height = $image['sizes'][ $size . '-height' ];

                if( !empty($image) ):
              ?>
                <img  src="<?php echo $url; ?>" alt="<?php echo $alt; ?>" width="" height="" />

              <?php endif; ?>
            </div>
  			  </a>
      </div>
  	<?php endwhile; ?>

  <?php endif; ?>

  <?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>

      <div id='date'></div>

<?php get_footer(); ?>
