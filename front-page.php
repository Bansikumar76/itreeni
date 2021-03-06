<?php get_header(); ?>

<section class="page-wrap">
<div class="container pt-3 pb-5">
    <!-- <h1><?php the_title(); ?></h1> -->

    <?php get_template_part('includes/section', 'content'); ?>

    <?php
        echo do_shortcode('[smartslider3 slider="2"]');
    ?>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <?php $slider = get_posts(array('post_type' => 'slider', 'posts_per_page' => 2)); ?>
      <?php $count = 0; ?>
      <?php foreach($slider as $slide): ?>
      <div class="carousel-item <?php echo ($count == 0) ? 'active' : ''; ?>">
        <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($slide->ID)) ?>" class="img-responsive"/>
      </div>
      <?php $count++; ?>
    <?php endforeach; ?>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    
</div>
</section>

<?php get_footer(); ?>