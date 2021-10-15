<?php 
  get_header();
?>

<section class="candidaturas features-head bg-light py-3">
    <div class="container">
      <div>
        <h1 class="title">Notícias</h1>
        <h2>Arquivo de notícias</h2>
        <hr>
      </div>
    </div>
  </section>
  <section class="posts features-head bg-light py-3">
    <div class="container">
      <?php
        if ( have_posts() ) {
          while ( have_posts() ) {
            the_post(); 
      ?>
        <div class="lead post-item">
          <a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
          <span class="post-category"><?php echo get_the_category_list(', '); ?></span>
          <p class="excerpt">
            <?if(has_excerpt()) {
                echo the_excerpt();
              } else {
                echo wp_trim_words(get_the_content(), 10);
              }
            ?>
          </p>
          <hr>
        </div>
      <?php }
        } else { 
      ?>
        <h3>We have found no posts.</h3>
      <?php
        }
      ?>
      <?php echo paginate_links(); ?>
    </div>
  </section>

<?php
  get_footer();
?>