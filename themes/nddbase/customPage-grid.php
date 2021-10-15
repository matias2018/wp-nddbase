<?php /* Template Name: CustomPageGrid */ ?>
<?php
get_header();
?>

<?php 
  while( have_posts() ) {
    the_post(); 
?>
  <?php
    }
  ?>

  <section class="candidaturas features-head bg-light py-3">
    <div class="container">
      <h1 class="title"><?php the_title(); ?></h1>
      <h2>Use esta página para baixar e leia atentamente toda a documentação necessária</h2>
      <div class="enrollment-grid">
          <div class="grid-cell grid-cell-1 cell-image grid-area-1">
            <img src="<?php echo get_theme_file_uri('/images/real/temp/Asset-1.jpg'); ?>" alt="Hand with a pen and some documents" class="grid-image" aria-hidden="true">
          </div>
          <div class="grid-cell grid-cell-2 cell-text grid-area-2">
            <h2 class="fff">Regulamentos</h2>
            <hr style="width: 90%;">
            <p>
              O Fundo destina-se a apoiar as Misericórdias portuguesas em duas modalidades:
            </p>
            <ul>
              <li>
                a) Obras e Equipamentos;
              </li>
              <li>
                b) Recuperação de Património;
              </li>
            </ul>
            <p>
              Faça o download dos regulamentos:
            </p>
              <div class="btn-container">
                <a href="#" class="download-btn">
                  Regulamentos
                </a>
              </div>
            
          </div>
      
          <div class="grid-cell grid-cell-1 cell-text grid-area-3">
            <h3 class="fff">Inscrições</h3>
            <h4 class="enrollment-type">Area Social</h4>
            <hr style="width: 90%;">
              <p>
                Entende-se por Inovação Social uma nova ideia - bem, serviço ou modelo - que satisfaça uma necessidade social de forma mais eficiente, eficaz ou sustentável do que as soluções existentes.
              </p>
              <p>
                <strong>Recepção da documentação, devidamente instruída, até 31 de Março.</strong>
              </p>
              <div class="btn-container">
                <a href="#" class="download-btn">
                  Documentação
                </a>
              </div>
          </div>
          <div class="grid-cell grid-cell-2 cell-image grid-area-4">
            <img src="<?php echo get_theme_file_uri('/images/real/temp/Asset-2.jpg'); ?>" alt="Two flags. One is the Santa Casa da Misericordia flag. The other is the Fundo Rainha D. Leonor flag" class="grid-image" aria-hidden="true">
          </div>
        
          <div class="grid-cell grid-cell-1 cell-image grid-area-5">
            <img src="<?php echo get_theme_file_uri('/images/real/temp/Asset-1.jpg'); ?>" alt="Hand with a pen and some documents" class="grid-image" aria-hidden="true">
          </div>
          <div class="grid-cell grid-cell-2 cell-text grid-area-6">
            <h3 class="fff">Inscrições</h3>
            <h4 class="enrollment-type">Area de Patrimócio</h4>
            <hr style="width: 90%;">
              <p>
                As candidaturas à Recuperação de Património são avaliadas pelo FRDL do ponto de vista da legalidade; da qualidade do património, da adequação da intervenção; da sustentabilidade do investimento; e da capacidade financeira da instituição.
              </p>
              <p>
                <strong>Recepção da documentação, devidamente instruída, até 31 de Março.</strong>
              </p>
              <div class="btn-container">
                <a href="#" class="download-btn">
                  Documentação
                </a>
              </div>
          </div>
      </div>
    </div>
  </section>

    <section class="faqs">
      <div class="container">
        <div class="accordion">
          <h2>Perguntas frequentes</h2>
            <button class="faq faq-1">O que é o Fundo Rainha D. Leonor?
              <i class="fas fa-plus faq-rotator"></i>
            </button>
            <p class="answer">
              O Fundo Rainha D. Leonor foi criado pela SCML e pela UMP para ajudar as Misericórdias a concluírem respostas prioritárias que propiciem a inovação social e a recuperação do património.
            </p>
          
          
            <button class="faq faq-2">Quem pode candidatar-se ao Fundo Rainha D. Leonor?
              <i class="fas fa-plus faq-rotator"></i>
            </button>
            <p class="answer">
              Podem concorrer todas as Misericórdias portuguesas legalmente constituídas e ativadas.
            </p>
          
          
            <button class="faq faq-3">Que projectos podem candidatar-se ao Fundo?
              <i class="fas fa-plus faq-rotator"></i>
            </button>
            <p class="answer">
              O Fundo destina-se a projetos nas áreas social e do património previstas no art.º 2 do Regulamento.
            </p>
          
          
            <button class="faq faq-4">O que é valorizado nas candidaturas?
              <i class="fas fa-plus faq-rotator"></i>
            </button>
            <p class="answer">
              O Fundo dá prioridade a projetos com inovação social, que promovam o envelhecimento ativo, o contacto com espaços exteriores e a recuperação de edifícios simbólicos para as Misericórdias. Os parâmetros de avaliação das candidaturas podem ser consultados nos anexos I e II ao Regulamento.
            </p>

            <button class="faq faq-5">Qual o valor máximo a que pode candidatar-se um projeto?
              <i class="fas fa-plus faq-rotator"></i>
            </button>
            <p class="answer">
              Há um teto financeiro de 300 mil euros para o apoio de uma candidatura. São raros os projetos que recebem este valor máximo.
            </p>

            <button class="faq faq-6">E qual a taxa de apoio do Fundo?
              <i class="fas fa-plus faq-rotator"></i>
            </button>
            <p class="answer">
              O Fundo requer uma comparticipação do promotor de mais de 50% do total do projeto. O FRDL financia até 90% dos custos elegíveis. O financiamento do Fundo não é reembolsável.
            </p>

            <button class="faq faq-7">Que candidaturas não são aprovadas?
              <i class="fas fa-plus faq-rotator"></i>
            </button>
            <p class="answer">
              Candidaturas que não sejam necessárias às populações; que não tenham qualidade; ou que não deem garantias de sustentabilidade financeira.
            </p>

            <button class="faq faq-8">Quando abrem as candidaturas?
              <i class="fas fa-plus faq-rotator"></i>
            </button>
            <p class="answer">
              O Conselho de Gestão anuncia, anualmente, se há concurso de candidaturas. Em caso de haver concurso, o período de entrega das candidaturas vai de 1 de janeiro a 31 de março.
            </p>

            <button class="faq faq-9">Como posso apresentar uma candidatura?
              <i class="fas fa-plus faq-rotator"></i>
            </button>
            <p class="answer">
              No Regulamento pode ler-se as condições de admissibilidade e seguir as instruções para preencher o formulário. O vídeo ‘Como candidatar-se’, neste site, explica as etapas das candidaturas.
            </p>

            <button class="faq faq-10">Uma Misericórdia pode apresentar várias candidaturas?
              <i class="fas fa-plus faq-rotator"></i>
            </button>
            <p class="answer">
              Cada entidade só pode submeter uma candidatura por triénio.
            </p>

            <button class="faq faq-11">Posso candidatar-me se o projecto já tiver beneficiado de um Fundo Comunitário?
              <i class="fas fa-plus faq-rotator"></i>
            </button>
            <p class="answer">
              Sim. Nesse caso, o Fundo considera apenas a parte não elegível do apoio europeu.
            </p>
            <button class="faq faq-12">Qual o regime de contratação imposto pelo Fundo?
              <i class="fas fa-plus faq-rotator"></i>
            </button>
            <p class="answer">
              São aplicáveis as regras dos contratos públicos às aquisições de bens e serviços (Art.º 19º do Regulamento). Qualquer aquisição acima de 5000 euros pede consulta a três fornecedores.
            </p>
            <button class="faq faq-13">Exemplos de Custos não elegíveis (Art. 18º)?
              <i class="fas fa-plus faq-rotator"></i>
            </button>
            <p class="answer">
              Despesas com taxas e impostos (por exemplo o IVA); Projectos de Arquitectura e de especialidades; Custo com consultores/assessoria para o projecto de candidatura; Aquisição/instalação do sistema de AVAC.
            </p>

            <button class="faq faq-14">Como são apurados os custos elegíveis?
              <i class="fas fa-plus faq-rotator"></i>
            </button>
            <p class="answer">
              Todos os itens considerados elegíveis são comparados com uma tabela de preços médios de mercado da SCML para evitar injustiças na valoração das rúbricas dos Orçamentos das diferentes Misericórdias.
            </p>
          
        </div>
      </div>
    </section>



<?php get_footer(); ?>