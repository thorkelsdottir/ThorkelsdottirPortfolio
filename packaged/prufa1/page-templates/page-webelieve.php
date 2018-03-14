<?php
/*
Template Name: We Believe
*/
get_header(); ?>

  <?php get_template_part('template-parts/page-menu-black-mobile'); ?>
  <?php get_template_part('template-parts/page-menu-white-mobile'); ?>
  <?php get_template_part('template-parts/page-title-logo-mobile'); ?>
  <?php get_template_part('template-parts/page-title-logo-white-mobile'); ?>
  <?php get_template_part('template-parts/page-ticker-vertical'); ?>
  <?php the_content(); ?>



<div class="webelieve_page">
  <div class="pageTitle">
    <h1>WE BELIEVE</h1>
  </div>

  <div class="elementsIntro">
    <div class="webelievePic" style="background-image: url(<?php echo get_template_directory_uri().  "/assets/images/aboutPic1.jpg"; ?>)"></div>


    <div class="elementsIntroText">
      <div class="elementsIntroText_main">
        <h2>In collaboration</h2>
          <p>Two is stronger than one. Our workforce consists of 20 fingers and two brains, our projects are under the scrutiny of four eyes. Sometimes we joke that we are like a two headed design-monster. In reality we have founded a great team. We truly believe in collaboration.
            <br>...Oh and did we mention we are sisters?
          <br>Thorkelsdottir is a multidisciplinary studio, our work ranges from design to photography, from coding to web development and all those amazing projects that fall in between or outside those definitions. Our strength lies in idea-making and the fact that we have visual control over every aspect because of our photography skills.
          </p>
      </div>

    </div>
  </div>


  <div class="pageTitle2">
    <p class="first_name">Thorkelsdottir</p>
    <div class="plussign">
      <p>+</p>
    </div>
    <p class="second_name">Thorkelsdottir</p>
  </div>

    <div class="about_us_both">
      <div class="about_birna">
        <h2>Birna Bryndis Thorkelsdottir</h2>
        <p>B. 1982, Birna is a designer and web developer with a mean eye for details and photography. For the past years she has worked with companies and individuals, visualizing their brand identity and online presence. Birna holds a BA degree in graphic design from the Iceland Academy of the Arts and is currently working towards a degree in Web development expecting to graduate in 2018. From July 2017 she will be living in Copenhagen where she plans to finish her studies. Birna is passionate about the web and loves designing and coding. She also loves secondhand finds, a good cappuccino and most of all spending quality time with her family.
        </p>
        <ul class="links">
          <?php if(get_field('social_facebook', 'options')) : ?>
            <li><a href="<?php the_field('social_facebook', 'options'); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <?php endif; ?>
          <?php if(get_field('social_instagram', 'options')) : ?>
            <li><a href="<?php the_field('social_instagram', 'options'); ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
          <?php endif; ?>
          <?php if(get_field('social_linkedin', 'options')) : ?>
            <li><a href="<?php the_field('social_linkedin', 'options'); ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
          <?php endif; ?>
          <?php if(get_field('social_tumblr', 'options')) : ?>
            <li><a href="<?php the_field('social_tumblr', 'options'); ?>" target="_blank"><i class="fa fa-tumblr" aria-hidden="true"></i></a></li>
          <?php endif; ?>
          <?php if(get_field('contact_email', 'options')) : ?>
            <li><a href="mailto:<?php the_field('contact_email', 'options'); ?>" target="_blank"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
          <?php endif; ?>
        </ul>
      </div>
      <div class="about_johanna">
        <h2>Johanna Helga Thorkelsdottir</h2>
        <p>B. 1978, lives and works in Reykjavík. Jóhanna is a hands on creative with more than 10 years of experience working in the creative field of Fine Art, Design and Photography. Jóhanna has a Masters degree in Sculpture from The School of The Art Institute of Chicago, BA from the Iceland Art Academy and is currently studying Web Development at Reykjavík Technical College.
          <br>Jóhanna loves the web and it´s unlimited possibilities. She also loves making art, strumming the guitar with fellow singers and above all her husband and three kids.
      </p>
      <ul class="links">
        <?php if(get_field('social_facebook2', 'options')) : ?>
          <li><a href="<?php the_field('social_facebook2', 'options'); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
        <?php endif; ?>
        <?php if(get_field('social_instagram2', 'options')) : ?>
          <li><a href="<?php the_field('social_instagram2', 'options'); ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        <?php endif; ?>
        <?php if(get_field('social_linkedin2', 'options')) : ?>
          <li><a href="<?php the_field('social_linkedin2', 'options'); ?>" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
        <?php endif; ?>
        <?php if(get_field('social_tumblr2', 'options')) : ?>
          <li><a href="<?php the_field('social_tumblr2', 'options'); ?>" target="_blank"><i class="fa fa-tumblr" aria-hidden="true"></i></a></li>
        <?php endif; ?>
        <?php if(get_field('contact_email2', 'options')) : ?>
          <li><a href="mailto:<?php the_field('contact_email2', 'options'); ?>" target="_blank"><i class="fa fa-envelope" aria-hidden="true"></i></a></li>
        <?php endif; ?>
      </ul>
      </div>
    </div>


    <div class="contact_us">
      <h2>Contact</h2>
      <p>Do you want to have an open discussion about your project and see how
        it can grow with brainstorming and development? Be in touch.</p>
    </div>
</div>

<?php echo do_shortcode('[gravityform id="1" title="true" description="true"]'); ?>
<div class="wethink" style="background-image: url(<?php echo get_template_directory_uri().  "/assets/images/aboutThinking.jpg"; ?>)"></div>

<?php get_footer(); ?>
