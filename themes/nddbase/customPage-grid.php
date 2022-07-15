<?php /* Template Name: CustomPageGrid */ ?>
<?php
get_header();
?>

<section class="candidaturas features-head bg-light py-3 init">
    <div class="container">
      <div>
        <div class="page_header">
          <h1>Candidaturas</h1>
          <div class="page_header--intro">
            <p class="page_header--intro-p">
              Desde 2015 que este Fundo ajuda as Misericórdias portuguesas em causas sociais prioritárias e inovadoras, contribuindo para a coesão social e territorial do país.
            </p>
          </div>
        </div>
        <p class="width-40 m-4">
          O Fundo continuará a acompanhar as dezenas de projetos em curso e dará informações sobre o Concurso de 2023 até dezembro de 2022.
        </p>
      </div>
    </div>
  </section>

<?php 
  while( have_posts() ) {
    the_post(); 
?>
  <?php
    }
  ?>

  <section class="candidaturas features-head bg-light py-3 init">
    <div class="jh">
      <div class="container">
        <?php the_content(); ?>
      </div>
      
      <div id="target" class="enrollment-grid">
          <div class="grid-cell grid-cell-1 cell-image grid-area-1">
            <img src="<?php echo get_theme_file_uri('/images/real/temp/Asset-1.jpg'); ?>" alt="Hand with a pen and some documents" class="grid-image" aria-hidden="true">
          </div>
          <div class="grid-cell grid-cell-2 cell-text grid-area-2">
            <div class="cell-text-container">
            <h2 class="fff">Regulamentos</h2>
            <hr class="cell-hr">
            <p>
              O Fundo destina-se a apoiar as Misericórdias portuguesas em duas modalidades:
            </p>
            <ul>
              <li style="padding: 20px 0 10px 20px;">
                > Obras e Equipamentos;
              </li>
              <li style="padding: 20px 0 10px 20px;">
                > Recuperação de Património;
              </li>
            </ul>
            <p>
              Faça o download dos regulamentos:
            </p>
            <div class="btn-container">
                <?php
                  $file = get_field('regulamentos');
                  $filename = get_field('regulamentos_name');
                  if( $file ):
                    $url = wp_get_attachment_url( $file );
                    $title = get_the_title( $file );
                    $bytes = filesize( get_attached_file( $file ) );
                ?>
                  <a href="<?php echo esc_html($url); ?>" class="download-btn tooltip">
                    Baixar <?php echo esc_html($filename); ?>
                    <div class="tooltiptext">Download <?php echo esc_html($filename); ?> | <?php echo size_format($bytes); ?></div>
                  </a>
                  <?php elseif( $file == '' ): ?>
                    <span>Documentos Indisponíveis</span>
                    <br>
                    <a href="mailto:geral@fundorainhadonaleonor.pt?subject=Site&nbsp;FRDL:&nbsp;Pedido&nbsp;de&nbsp;informação" class="uppercase cta-link"><small>Contacte-nos para mais informação</small></a>
                <?php endif; ?>
              </div>
            </div>
          </div>
      
          <div class="grid-cell grid-cell-1 cell-text grid-area-3">
            <div class="cell-text-container">
              <h2 class="fff">Inscrições</h2>
              <h4 class="enrollment-type">Area Social</h4>
              <hr class="cell-hr">
                <p>
                  Entende-se por Inovação Social uma nova ideia - bem, serviço ou modelo - que satisfaça uma necessidade social de forma mais eficiente, eficaz ou sustentável do que as soluções existentes.
                </p>
                <p>
                  <strong>Recepção da documentação, devidamente instruída, até 31 de Março.</strong>
                </p>
                <div class="btn-container">
                <?php
                  $file = get_field('inscricoes_area-social');
                  $filename = get_field('inscricoes_area-social_name');
                  if( $file ):
                    $url = wp_get_attachment_url( $file );
                    $title = get_the_title( $file );
                    $bytes = filesize( get_attached_file( $file ) );
                ?>
                  <a href="<?php echo esc_html($url); ?>" class="download-btn tooltip">
                    Baixar <?php echo esc_html($filename); ?>
                    <div class="tooltiptext">Download <?php echo esc_html($filename); ?> | <?php echo size_format($bytes); ?></div>
                  </a>
                  <?php elseif( $file == '' ): ?>
                    <span>Documentos Indisponíveis</span>
                    <br>
                    <a href="mailto:geral@fundorainhadonaleonor.pt?subject=Site&nbsp;FRDL:&nbsp;Pedido&nbsp;de&nbsp;informação" class="uppercase cta-link"><small>Contacte-nos para mais informação</small></a>
                  <?php endif; ?>
              </div>
            </div>
          </div>
          <div class="grid-cell grid-cell-2 cell-image grid-area-4">
            <img src="<?php echo get_theme_file_uri('/images/real/temp/Asset-2.jpg'); ?>" alt="Two flags. One is the Santa Casa da Misericordia flag. The other is the Fundo Rainha D. Leonor flag" class="grid-image" aria-hidden="true">
          </div>
        
          <div class="grid-cell grid-cell-1 cell-image grid-area-5">
            <img src="<?php echo get_theme_file_uri('/images/real/temp/Asset-1.jpg'); ?>" alt="Hand with a pen and some documents" class="grid-image" aria-hidden="true">
          </div>
          <div class="grid-cell grid-cell-2 cell-text grid-area-6">
          <div class="cell-text-container">
            <h2 class="fff">Inscrições</h2>
            <h4 class="enrollment-type">Area de Patrimócio</h4>
            <hr class="cell-hr">
              <p>
                As candidaturas à Recuperação de Património são avaliadas pelo FRDL do ponto de vista da legalidade; da qualidade do património, da adequação da intervenção; da sustentabilidade do investimento; e da capacidade financeira da instituição.
              </p>
              <p>
                <strong>Recepção da documentação, devidamente instruída, até 31 de Março.</strong>
              </p>
              <div class="btn-container">
                <?php
                  $file = get_field('inscricoes_area-patrimonio');
                  $filename = get_field('inscricoes_area-patrimonio_name');
                  if( $file ):
                    $url = wp_get_attachment_url( $file );
                    $title = get_the_title( $file );
                    $bytes = filesize( get_attached_file( $file ) );
                ?>
                  <a href="<?php echo esc_html($url); ?>" class="download-btn">
                    Baixar <?php echo esc_html($filename); ?> | <?php echo size_format($bytes); ?>
                  </a>
                  <?php elseif( $file == '' ): ?>
                    <span>Documentos Indisponíveis</span>
                    <br>
                    <a href="mailto:geral@fundorainhadonaleonor.pt?subject=Site&nbsp;FRDL:&nbsp;Pedido&nbsp;de&nbsp;informação" class="uppercase cta-link"><small>Contacte-nos para mais informação</small></a>
                <?php endif; ?>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php get_footer(); ?>