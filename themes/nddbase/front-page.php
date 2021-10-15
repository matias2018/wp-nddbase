<?php get_header(); ?>

<!-- hero -->
<section class="hero-blue-full">
    <div class="container grid hero-grid">
      <div class="index-hero-text">
        <h1 class="title">Um fundo criado para apoiar projectos das misericórdias portuguesas</h1>
        <p class="intro">É objectivo do grupo concluir projectos sociais prioritários e inovadores</p>
      </div>
      <div class="btn-container">
        <a href="<?= site_url('/obras'); ?>" class="link-btn">
          O que fazemos
        </a>
        <a href="<?= site_url('/sobre-nos'); ?>" class="link-btn">
          Quem somos
        </a>
        <a href="<?= site_url('/candidaturas'); ?>" class="link-btn">
          Candidaturas
        </a>
      </div>
    </div>
  </section>

  <section class="newsHeadlines">
    
    <?php
      $homePagePosts = new WP_Query( array(
        'posts_per_page' => 2
      ));
      


      while($homePagePosts->have_posts()) {
        $homePagePosts->the_post(); ?>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    <?php
      } wp_reset_postdata();
    ?>
   
  </section>

  <section class="worksHeadlines">
    <?php
      $homePageWorks = new WP_Query(
        array(
          'posts_per_page' => 10,
          'post_type' => 'obra'
        )
      );
      while( $homePageWorks->have_posts() ) {
        $homePageWorks->the_post();
    ?>
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    <?php
      }
    ?>
    <?php echo paginate_links(); ?>
  </section>

  <section class="stats">
    <div class="container">
      <h3 class="stats-heading text-center my-1">
        O Fundo Rainha D. Leonor em números
      </h3>

      <div class="grid grid-3 text-center my-4">
        <div>
          <h4 class="counter" data-target="254">0</h4>
          <p class="text-secondary">Instituições</p>
        </div>
        <div>
          <h4 class="counter" data-target="273">0</h4>
          <p class="text-secondary">Projectos de Recuperação</p>
        </div>
        <div>
          <h4 class="counter" data-target="682">0</h4>
          <p class="text-secondary">Apoios</p>
        </div>
        
      </div>
      <p>
        O Fundo Rainha D. Leonor foi criado pela Santa Casa da Misericórdia de Lisboa, em parceria com a União das Misericórdias Portuguesas, para apoiar os valores e as atividades das Misericórdias de todo o País, no princípio da autonomia cooperante.
      </p>
    </div>
  </section>

<?php get_footer(); ?>