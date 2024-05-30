<!DOCTYPE html>
<?php
  require_once('conexao.php');
  // require_once('scripts_php/utils.php');
?>
<html lang="pt-br">

<head>
  <?php
    include('init-page.php');
  ?>
</head>

<body class="page-services">

  <?php
    include('header.php');
  ?>

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/portfolio-header.jpg');">
      <div class="container position-relative d-flex flex-column align-items-center">

        <h2>Repositório</h2>
        <ol>
          <li><a href="index.php">Início</a></li>
          <li>Repositório</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

    <?php
      mysqli_select_db($mysqli, $db) or die("Could not select database");
      
      $pagina = 1;

      if (isset($_GET['pagina'])) {
        $pagina = filter_input(INPUT_GET, "pagina", FILTER_VALIDATE_INT);
      }

      if (!$pagina) {
        $pagina = 1;
      }

      $limite = 10;
      $inicio = ($pagina * $limite) - $limite;

      $query = "SELECT COUNT(nome) num_artefatos FROM artefato";
      $num_artefatos = mysqli_query($mysqli, $query);
      $num_artefatos = mysqli_fetch_array($num_artefatos)['num_artefatos'];

      $paginas = ceil($num_artefatos / $limite);

      $query = "SELECT * FROM artefato ORDER BY ano DESC LIMIT $inicio, $limite";
      $artefatos_result = mysqli_query($mysqli, $query);
      $num_artefatos_pagina = mysqli_num_rows($artefatos_result);
    ?>

    <!-- ======= Seção biblioteca ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row g-5">

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">

          <div class="row gy-5 posts-list">


              <div class="col-lg-12">
                <article class="d-flex flex-column">
                  <h2 class="title">
                      <a href="https://drive.google.com/file/d/1BCvOzHJMZ4BU7XDT-vgnSmXo7FdIq2nX/view?usp=sharing">
                      COMUNICAÇÃO INTERPROFISSIONAL NA ATENÇÃO PRIMÁRIA À SAÚDE:  SCOPING REVIEW
                       
                      </a>
                    </h2>

                    <div class="meta-top">
                      <ul>
                        <li class="d-flex align-items-center">

                          <i class="bi bi-clock"></i>

                          <a href="https://drive.google.com/file/d/1BCvOzHJMZ4BU7XDT-vgnSmXo7FdIq2nX/view?usp=sharing">
                            <time datetime="2024">
                              2024
                            </time>
                          </a>

                        </li>
                        <li class="d-flex align-items-center">
                        
                        <i class="bi bi-person"></i>
                          <a href="">
                          FRANCISCO MARCELO LEANDRO CAVALCANTE
                          </a>
                      </li>
                      
                    </ul>
                  </div>

                  <div class="content">
                    <p>
                      A Comunicação Interprofissional é uma competência essência à colaboração interprofissional na Atenção Primária à Saúde. Possibilita integrar os saberes e práticas multiprofissionais, assim como fomenta a tomada de decisão partilhada, o diálogo aberto e honesto e o reconhecimento do papel de cada membro da equipe... 
                    </p>
                  </div>

                  <div class="read-more mt-auto align-self-end">
                    <a href="https://drive.google.com/file/d/1BCvOzHJMZ4BU7XDT-vgnSmXo7FdIq2nX/view?usp=sharing">
                      Acessar
                      <i class="bi bi-arrow-right"></i>
                    </a>
                  </div>
                </article>
              </div>

              <div class="col-lg-12">
                <article class="d-flex flex-column">
                  <h2 class="title">
                      <a href="https://www.scielo.br/j/icse/a/XRJVNsRHcqfsRXLZ7RMxCks/">
                      Conexões e fronteiras da interprofissionalidade: forma e formação
                       
                      </a>
                    </h2>

                    <div class="meta-top">
                      <ul>
                        <li class="d-flex align-items-center">

                          <i class="bi bi-clock"></i>

                          <a href="https://www.scielo.br/j/icse/a/XRJVNsRHcqfsRXLZ7RMxCks/">
                            <time datetime="2024">
                              2024
                            </time>
                          </a>

                        </li>
                        <li class="d-flex align-items-center">
                        
                        <i class="bi bi-person"></i>
                          <a href="">
                          Ricardo Burg Ceccim
                          </a>
                      </li>
                      
                    </ul>
                  </div>

                  <div class="content">
                    <p>
                    O debate apresenta uma tematização sobre a interprofissionalidade: trajetória e necessidade desse conceito para a gestão do trabalho e da educação na saúde, especialmente quando em cena a segurança do paciente, a formação orientada aos sistemas de saúde e uma coordenação da rede de serviços orientada pela integralidade, resolutividade, satisfação dos usuários e maior conforto dos trabalhadores. Apresenta a distinção entre os prefixos “multi”, “inter” e “entre” ante os termos “profissão” e “disciplina”. Foi realizada uma revisão focal da literatura, buscando a introdução do termo e sua variação em educação, prática, práxis e auditoria das formações e das ações profissionais. Problematiza conexões (desafios) e fronteiras (limites), apontando para o aprender, o pensamento e a criação. A ideia de forma e formação apoia a noção de fixação das formas (normativas) ou movimento das forças (educação permanente em saúde), assim se concluindo.
                    </p>
                  </div>

                  <div class="read-more mt-auto align-self-end">
                    <a href="https://www.scielo.br/j/icse/a/XRJVNsRHcqfsRXLZ7RMxCks/">
                      Acessar
                      <i class="bi bi-arrow-right"></i>
                    </a>
                  </div>
                </article>
              </div>

              <div class="col-lg-12">
                <article class="d-flex flex-column">
                  <h2 class="title">
                      <a href="https://www.scielo.br/j/ean/a/WwTm89wvMWNB33BZ9BXS8Pq/">
                        Interprofissionalidade na atenção primária: intencionalidades das equipes versus realidade do processo de trabalho
                      </a>
                    </h2>

                    <div class="meta-top">
                      <ul>
                        <li class="d-flex align-items-center">

                          <i class="bi bi-clock"></i>

                          <a href="https://www.scielo.br/j/icse/a/XRJVNsRHcqfsRXLZ7RMxCks/">
                            <time datetime="2024">
                              2024
                            </time>
                          </a>

                        </li>
                        <li class="d-flex align-items-center">
                        
                        <i class="bi bi-person"></i>
                          <a href="">
                            Aridiane Alves Ribeiro, Christiane Ricaldoni Giviziez, Elânia Assis Rocha Coimbra, Jeniffer Dayane Duarte dos Santos, Jhonatan Emanuel Maciel de Pontes, Nina Franco Luz, Rafael de Oliveira Rocha, Webster Leonardo Guimarães da Costa
                          </a>
                      </li>
                      
                    </ul>
                  </div>

                  <div class="content">
                    <p>
                      Comparar atitudes relacionadas à colaboração interprofissional autorrelatadas por diferentes equipes da atenção primária com a realidade observada de seus processos de trabalho. Abordagem qualitativa e quantitativa implementada em duas etapas de coleta de dados, entre dezembro de 2019 e outubro de 2020. Na qualitativa, empregou-se a observação sistemática dos atendimentos em unidades de saúde. Utilizou-se roteiro de observação baseado no Referencial para Competências em Interprofissionalidade e no Fluxograma Analisador do processo de trabalho centrado no usuário. As observações foram registradas em diário de campo. Na etapa quantitativa, aplicou-se a Escala de Atitudes Relacionadas à Colaboração Interprofissional. Noventa e um profissionais da atenção básica responderam a escala. Obteve-se uma média de 120 de pontuação, que significa valorização do trabalho colaborativo por respondentes de todas as equipes. Apesar disso, foram observadas divergências entre o falado e o vivido, pois o processo de trabalho estruturado parece limitar atitudes colaborativas. Valorização de atividades programadas para o trabalho interprofissional da equipe de saúde e de enfermagem na atenção primária, como espaços na agenda para reuniões. Necessidade de promoção da educação interprofissional com trabalhadores, bem como de políticas públicas que garantam mecanismos para o trabalho colaborativo na atenção básica
                    </p>
                  </div>

                  <div class="read-more mt-auto align-self-end">
                    <a href="https://www.scielo.br/j/ean/a/WwTm89wvMWNB33BZ9BXS8Pq/">
                      Acessar
                      <i class="bi bi-arrow-right"></i>
                    </a>
                  </div>
                </article>
              </div>

              <div class="col-lg-12">
                <article class="d-flex flex-column">
                  <h2 class="title">
                      <a href="https://acervomais.com.br/index.php/saude/article/view/4076">
                        PET-Saúde Interprofissionalidade, intervenções na atenção primária: um relato de experiência
                      </a>
                    </h2>

                    <div class="meta-top">
                      <ul>
                        <li class="d-flex align-items-center">

                          <i class="bi bi-clock"></i>

                          <a href="https://acervomais.com.br/index.php/saude/article/view/4076">
                            <time datetime="2024">
                              2024
                            </time>
                          </a>

                        </li>
                        <li class="d-flex align-items-center">
                        
                        <i class="bi bi-person"></i>
                          <a href="">
                            Wellington Manoel da Silva, Maria Eduarda da Silva, Thuani Lamenha Costa, Millena Maria Nascimento Silva, Geraldo José Santos Oliveira, Maria Angélica Álvares de Freitas, Nayara Ranielli da Costa, Ana Wladia Silva de Lima, Viviane de Araújo Gouveia, Silvana Gonçalves Brito de Arruda
                          </a>
                      </li>
                      
                    </ul>
                  </div>

                  <div class="content">
                    <p>
                      Comparar atitudes relacionadas à colaboração interprofissional autorrelatadas por dObjetivo: Relatar a experiência da intervenção interprofissional em saúde, destinada à uma família de alto risco social. Relato da Experiência: Trata-se de um estudo descritivo do tipo relato de experiência, realizado com a participação dos estudantes do projeto “Programa de Educação Tutorial em Saúde–Interprofissionalidade” de uma Universidade pública de um município de Pernambuco, Brasil. A amostra do estudo foi composta por uma família, escolhida de forma intencional e não-probabilística. Os dados foram obtidos a partir de visitas domiciliares realizadas à família. Foram utilizados instrumentos como, Escala de estratificação de Risco de Coelho e Savassi, Genograma, Ecomapa e Projeto Terapêutico Singular (PTS). A família apresentou um alto grau de vulnerabilidade social, desta forma foi executado um PTS amplo e holístico, na tentativa de alcançar uma melhora tanto no aspecto de saúde da família quanto no âmbito social. Considerações finais: Os resultados evidenciam que o espaço do Projeto permite aos alunos o aprendizado prático, baseado na diversidade de atividades e nas reflexões sobre a importância do trabalho colaborativo da equipe.
                    </p>
                  </div>

                  <div class="read-more mt-auto align-self-end">
                    <a href="https://acervomais.com.br/index.php/saude/article/view/4076">
                      Acessar
                      <i class="bi bi-arrow-right"></i>
                    </a>
                  </div>
                </article>
              </div>

              <div class="col-lg-12">
                <article class="d-flex flex-column">
                  <h2 class="title">
                      <a href="https://www.scielo.br/j/rgenf/a/YDQZsCw6nLGf7p6Jn7WKb4M/?lang=pt">
                        Retratos da prática interprofissional colaborativa nas equipes da atenção primária à saúde
                      </a>
                    </h2>

                    <div class="meta-top">
                      <ul>
                        <li class="d-flex align-items-center">

                          <i class="bi bi-clock"></i>

                          <a href="https://www.scielo.br/j/rgenf/a/YDQZsCw6nLGf7p6Jn7WKb4M/?lang=pt">
                            <time datetime="2024">
                              2024
                            </time>
                          </a>

                        </li>
                        <li class="d-flex align-items-center">
                        
                        <i class="bi bi-person"></i>
                          <a href="">
                            Giselle Fernanda Previato, Vanessa Denardi Antoniassi Baldissera
                          </a>
                      </li>
                      
                    </ul>
                  </div>

                  <div class="content">
                    <p>
                    O envelhecimento populacional é um fenômeno que ocorre em escala global e nos países em desenvolvimento como o Brasil, esse processo aconteceu rapidamente e não foi acompanhado dos avanços sociais e econômicos necessários. O Ministério da Saúde, ratifica a preservação da capacidade funcional para a promoção do envelhecimento ativo e saudável, e a implementação de ações integradas pela equipe de saúde. A educação interprofissional, aprendizagem compartilhada e interativa entre estudantes ou profissionais de diferentes áreas, enquanto modalidade de formação em saúde, promove o trabalho em equipe integrado e colaborativo, foca nas necessidades de saúde e na melhoria da qualidade e das respostas dos serviços [...]
                    </p>
                  </div>

                  <div class="read-more mt-auto align-self-end">
                    <a href="https://www.scielo.br/j/rgenf/a/YDQZsCw6nLGf7p6Jn7WKb4M/?lang=pt">
                      Acessar
                      <i class="bi bi-arrow-right"></i>
                    </a>
                  </div>
                </article>
              </div>

              <div class="col-lg-12">
                <article class="d-flex flex-column">
                  <h2 class="title">
                      <a href="https://scholar.google.com.br/scholar?hl=pt-BR&as_sdt=0%2C5&q=interprofissionalidade+na+aten%C3%A7%C3%A3o+prim%C3%A1ria&oq=#d=gs_qabs&t=1716733240033&u=%23p%3D_7IOlePczHAJ">
                        Facilidades e dificuldades para implementação da educação interprofissional na atenção primária à saúde: revisão integrativa
                      </a>
                    </h2>

                    <div class="meta-top">
                      <ul>
                        <li class="d-flex align-items-center">

                          <i class="bi bi-clock"></i>

                          <a href="https://scholar.google.com.br/scholar?hl=pt-BR&as_sdt=0%2C5&q=interprofissionalidade+na+aten%C3%A7%C3%A3o+prim%C3%A1ria&oq=#d=gs_qabs&t=1716733240033&u=%23p%3D_7IOlePczHAJ">
                            <time datetime="2024">
                              2024
                            </time>
                          </a>

                        </li>
                        <li class="d-flex align-items-center">
                        
                        <i class="bi bi-person"></i>
                          <a href="">
                            Tayná Martins de Medeiros, MEG Grande, Phaola Micaela Medeiros, D Soares, PF Silva
                          </a>
                      </li>
                      
                    </ul>
                  </div>

                  <div class="content">
                    <p>
                      A Educação Interprofissional (EIP) é um importante subsídio para um processo de trabalho mais integrado, qualificado e resolutivo para a comunidade. No entanto, há dificuldades para sua implementação na atenção à saúde e incorporação das competências colaborativas às práticas desenvolvidas pelos profissionais. Assim, objetiva-se, a partir de uma revisão integrativa, identificar as facilidades e dificuldades para implementação da educação interprofissional na atenção básica em saúde. Para a seleção dos artigos foram utilizadas as bases de dados SciELO, PubMed/MEDLINE, Scopus e a Biblioteca Virtual em Saúde. Foi utilizada a seguinte estratégia de busca: Interprofessional Relations AND Primary Health Care AND Interprofessional Education [...]
                    </p>
                  </div>

                  <div class="read-more mt-auto align-self-end">
                    <a href="https://scholar.google.com.br/scholar?hl=pt-BR&as_sdt=0%2C5&q=interprofissionalidade+na+aten%C3%A7%C3%A3o+prim%C3%A1ria&oq=#d=gs_qabs&t=1716733240033&u=%23p%3D_7IOlePczHAJ">
                      Acessar
                      <i class="bi bi-arrow-right"></i>
                    </a>
                  </div>
                </article>
              </div>

              <div class="col-lg-12">
                <article class="d-flex flex-column">
                  <h2 class="title">
                      <a href="https://www.scielosp.org/article/icse/2018.v22suppl2/1525-1534/">
                        Trabalho em equipe e prática colaborativa na Atenção Primária à Saúde
                      </a>
                    </h2>

                    <div class="meta-top">
                      <ul>
                        <li class="d-flex align-items-center">

                          <i class="bi bi-clock"></i>

                          <a href="https://www.scielosp.org/article/icse/2018.v22suppl2/1525-1534/">
                            <time datetime="2024">
                              2024
                            </time>
                          </a>

                        </li>
                        <li class="d-flex align-items-center">
                        
                        <i class="bi bi-person"></i>
                          <a href="">
                            Marina Peduzzi, Heloise Fernandes Agreli
                          </a>
                      </li>
                      
                    </ul>
                  </div>

                  <div class="content">
                    <p>
                      Prática colaborativa e trabalho em equipe podem contribuir para melhorar o acesso universal e a qualidade da atenção à saúde. Entretanto, a operacionalização do trabalho interprofissional se constitui como um desafio atual. Acrescenta-se a esse desafio a imprecisão conceitual no estudo da temática, em que termos como colaboração e trabalho em equipe são frequentemente utilizados como sinônimos. O presente artigo visa apresentar os conceitos atuais de trabalho interprofissional, problematizando-os no contexto da Atenção Primária à Saúde. Concluímos que trabalho em equipe e prática colaborativa na Atenção Primária à Saúde precisam ser abordados de forma contingencial, ou seja, segundo características dos usuários/população adscrita, segundo contexto e condições de trabalho. Assinalamos que a colaboração envolve profissionais que querem trabalhar juntos para prover melhor atenção à saúde e pode se dar como colaboração na equipe e colaboração em rede intersetorial e com a comunidade.
                    </p>
                  </div>

                  <div class="read-more mt-auto align-self-end">
                    <a href="https://www.scielosp.org/article/icse/2018.v22suppl2/1525-1534/">
                      Acessar
                      <i class="bi bi-arrow-right"></i>
                    </a>
                  </div>
                </article>
              </div>

              <div class="col-lg-12">
                <article class="d-flex flex-column">
                  <h2 class="title">
                      <a href="http://revista.redeunida.org.br/ojs/index.php/rede-unida/article/view/3035">
                        O uso do Projeto Terapêutico Singular como estratégia para o trabalho interprofissional na atenção Primária à saúde: um relato de experiência do Pet Saúde Interprofissionalidade
                      </a>
                    </h2>

                    <div class="meta-top">
                      <ul>
                        <li class="d-flex align-items-center">

                          <i class="bi bi-clock"></i>

                          <a href="http://revista.redeunida.org.br/ojs/index.php/rede-unida/article/view/3035">
                            <time datetime="2024">
                              2024
                            </time>
                          </a>

                        </li>
                        <li class="d-flex align-items-center">
                        
                        <i class="bi bi-person"></i>
                          <a href="">
                            Karina Magrini Carneiro Mendes, Rodinei Vieira Veloso, Débora Milara de Toledo Teixeira, Mariane Borges Banfi, Ester Caroline Fernandes Ribeiro, Gabriel Rosinholi, Weslley Mozart Dias, Lisamara Dias de Oliveira Negrini
                          </a>
                      </li>
                      
                    </ul>
                  </div>

                  <div class="content">
                    <p>
                      As mudanças de perfil epidemiológico, com o aumento da expectativa de vida e das condições crônicas de saúde que requerem acompanhamento prolongado, trazem a necessidade de uma abordagem integral que contemple as múltiplas dimensões das necessidades de saúde dos usuários e população. Isso torna a qualidade da comunicação e a colaboração entre os diferentes profissionais envolvidos no cuidado, fundamental para a resolubilidade dos serviços e a efetividade da atenção à saúde. Pensando nisso, o Projeto Terapêutico Singular (PTS) é adotado como um dispositivo de cuidado que se insere no contexto interdisciplinar e interprofissional para intervenções centralizadas nas necessidades de saúde dos sujeitos em seu contexto social.
                    </p>
                  </div>

                  <div class="read-more mt-auto align-self-end">
                    <a href="http://revista.redeunida.org.br/ojs/index.php/rede-unida/article/view/3035">
                      Acessar
                      <i class="bi bi-arrow-right"></i>
                    </a>
                  </div>
                </article>
              </div>
              


              <!-- End post list item -->

          </div><!-- End blog posts list -->

            

            <div class="blog-pagination">
              <ul class="justify-content-center">
                
                <li>
                  <a href="?pagina=1">
                    1
                  </a>
                </li>
                <li>
                  <a href="?pagina=<?php print_r($pagina-1)?>">
                    <span aria-hidden="true">&laquo;</span>
                  </a>
                </li>
                <li class="active">
                  <a href="?pagina=<?php print_r($pagina)?>">
                    <?php print_r($pagina)?>
                  </a>
                </li>
                <li>
                  <a href="?pagina=<?php print_r($pagina+1)?>">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
                <li>
                  <a href="?pagina=<?php print_r($paginas)?>">
                    <?php print_r($paginas)?>
                  </a>
                </li>
                
              </ul>
            </div><!-- End blog pagination -->

          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">

            <div class="sidebar ps-lg-4">

              <div class="sidebar-item">
                <h3 class="sidebar-title" style="margin-bottom:20px">Busca</h3>
                
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                  <div class="form-group mt-6">
                    <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Título" >
                  </div>

                  <div class="form-group mt-3">
                    <input type="text" class="form-control" name="autor" id="autor" placeholder="Autor" ></textarea>
                  </div>

                  <div class="row" style="margin-top:20px">
                    <div class="col-md form-group mt-3 mt-md-0">
                      <input type="text" class="form-control" name="ano-ini" id="ano-ini" placeholder="Ano (início)" >
                    </div>  
                    <div class="col-md form-group">
                    <input type="text" class="form-control" name="ano-fim" id="ano-fim" placeholder="Ano (fim)" ></textarea>
                    </div>
                  </div>
                  
                  <div class="text-center"><button type="submit">Buscar</button></div>
                </form>

                <!--  
                <form action="" class="mt-3">
                  <input type="text">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
                -->
              </div>
              
              <!-- End sidebar search formn-->

              <div class="sidebar-item categories">
                <h3 class="sidebar-title">Categorias</h3>
                <ul class="mt-3">
                  <li><a href="#">Todas <span>(25)</span></a></li>
                  <li><a href="#">Tese <span>(7)</span></a></li>
                  <li><a href="#">Dissertação <span>(13)</span></a></li>
                  <li><a href="#">Artigo <span>(33)</span></a></li>
                  <li><a href="#">Atenção primária <span>(12)</span></a></li>
                  <li><a href="#">Saúde mental <span>(5)</span></a></li>
                  <li><a href="#">Recurso tecnológico <span>(22)</span></a></li>
                </ul>
              </div><!-- End sidebar categories-->

              <div class="sidebar-item tags">
                <h3 class="sidebar-title">Palavras-chave</h3>
                <ul class="mt-3">
                  <li><a href="#">Revisão</a></li>
                  <li><a href="#">Promoção da Saúde</a></li>
                  <li><a href="#">Tecnologia Educacional</a></li>
                  <li><a href="#">Estudo de Validação</a></li>
                </ul>
              </div><!-- End sidebar tags-->

            </div><!-- End Blog Sidebar -->

          </div>

        </div>

      </div>
    </section><!-- End Blog Section -->

    
     
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php
  include('footer.php');
  ?>
  <!-- End Footer -->

  <?php
  include('end-page.php');
  ?>

</body>

</html>