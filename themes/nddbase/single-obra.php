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
        <a class="backHomeBtn" href="<?php echo get_post_type_archive_link('obra'); ?>"><i class="fa fa-home" aria-hidden="true"></i> Voltar para arquivo de obras</a>
        
      </div>
      <div class="ndd-post-display">
        <h1 class="title"><?php the_title(); ?></h1>
        <h2><?php the_archive_description(); ?></h2>
        <div class="lead-content">
          <?php  the_content(); ?>
        </div>
        <div class="lead">
          <div class="lead-image">
            <img class="obra-card__image" src="<?php the_post_thumbnail_url(); ?>" alt="" style="object-fit: cover;">
          </div>
          <div class="lead-data">
            <h3 class="lead-data-item">Data de conclusão da obra</h3>
            <?php $workDate = new DateTime( get_field('data_da_obra') ); ?>
            <span><?php echo $workDate->format('d'); ?> </span>
            <span><?php echo $workDate->format('M'); ?>, </span>
            <span><?php echo $workDate->format('Y'); ?></span>

            <h3 class="lead-data-item">Estado de conclusão da obra</h3>
            <?php $workDone = get_field('estado_da_obra'); ?>
            <?php if($workDone) { ?>
              <span>Concluída</span>
              <?php } else { ?>
                <span class="data-info">Em processo de conclusão</span>
              <?php } ?>
            <h3 class="lead-data-item">Valor do Projecto</h3>
            <?php $projectValue = get_field('valor_do_projecto'); ?>
            <?php echo '<span class="data-info">'.$projectValue.' €</span>'?>

            <h3 class="lead-data-item">Valor do Apoio</h3>
            <?php $supportValue = get_field('valor_do_apoio'); ?>
            <?php echo '<span class="data-info">'.$supportValue.' €</span>'?>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php
  }
?>

<?php get_footer(); ?>