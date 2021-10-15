<?php
get_header();
?>

<?php 
  while( have_posts() ) {
    the_post(); 
?>

<section class="candidaturas features-head bg-light py-3">
    <div class="container">
      <div>
        <h1 class="title"><?php the_title(); ?></h1>
        <div class="lead generic-content">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </section>

<?php
  }
?>

<?php get_footer(); ?>