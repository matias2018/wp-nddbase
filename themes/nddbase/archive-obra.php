<?php 
  get_header();
?>

<section class="candidaturas features-head bg-light py-3">
    <div class="container">
      <div>
        <h1 class="title">Obras</h1>
        <h2>Arquivo de obras realizadas</h2>
        <hr>
      </div>
    </div>
  </section>
  <section class="posts-container features-head bg-light py-3">
    <div class="container obras_container">
      <?php
        if ( have_posts() ) {
          while ( have_posts() ) {
            the_post(); 
      ?>
        <div class="obra">
          <div class="lead obra-card">
            <a href="<?php the_permalink(); ?>">
              <img class="obra-card__image" src="<?php the_post_thumbnail_url(); ?>" alt="" style="object-fit: cover;">
              <span class="obra-card__name"><?php the_title(); ?></span>
            </a>
          </div>
          <div class="obra-card-excerpt">
            <p><?php the_title(); ?></p>
            <p><?php echo wp_trim_words(get_the_content(), 10); ?></p>
          </div>
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