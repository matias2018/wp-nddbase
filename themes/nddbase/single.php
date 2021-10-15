<?php
get_header();
?>

<?php 
  while( have_posts() ) {
    the_post(); 
    ?>
    <section class="single-post features-head bg-light py-3">
    <div class="container">
      <div class="backTo">
        <a href="<?php echo get_post_type_archive_link('post'); ?>"><i class="fa fa-home" aria-hidden="true"></i>Voltar para arquivo de notícias</a>
      </div>
      <div>
        <h1 class="title"><?php the_title(); ?></h1>
        <h2><?php the_archive_description(); ?></h2>
        <hr>
        <div class="lead">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </section>
<?php
  }
?>

<?php get_footer(); ?>