/*
  Template Name: Home
*/

<?php get_header();  ?>

<div class="main">
  <div class="container">

    <div class="content">

    <h2>Featured Work</h2>

    <?php $portfolioQuery = new WP_Query(
      array(
        'post_type' => 'portfolio',
        'cat' => 7,
        'orderby' => 'title',
        'order' => 'DESC'

        )

    ); ?>

    <?php if ($portfolioQuery->have_posts()): ?>
      <?php while($portfolioQuery->have_posts()): $portfolioQuery->
      the_post();?>
       <!--  stuff goes here -->

        <div class="featured">
          <?php the_title(); ?>
          <?php the_post_thumbnail(); ?>
          <p><?php the_field('short_desc') ?></p>
        </div>  

      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
    <?php endif; ?>

      <?php // Start the loop ?>
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

      <?php endwhile; // end the loop?>
    </div> <!-- /,content -->



    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>