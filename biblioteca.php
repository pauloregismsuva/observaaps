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

        <h2>Biblioteca</h2>
        <ol>
          <li><a href="index.php">Início</a></li>
          <li>Biblioteca</li>
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

              <?php
                if($num_artefatos_pagina > 0) {
                  for($i=0; $i<$num_artefatos_pagina; $i++) {
                      $artefato = mysqli_fetch_array($artefatos_result);
              ?>

              <div class="col-lg-12">
                <article class="d-flex flex-column">
                  <h2 class="title">
                      <a href="<?php print_r($artefato['url'])?>">
                        <?php print_r($artefato['nome'])?>
                      </a>
                    </h2>

                    <div class="meta-top">
                      <ul>
                        <li class="d-flex align-items-center">

                          <i class="bi bi-clock"></i>
                          <a href="<?php print_r($artefato['url'])?>">
                            <time datetime="<?php print_r($artefato['ano'])?>">
                              <?php print_r($artefato['ano'])?>
                            </time>
                          </a>

                        </li>
                        <li class="d-flex align-items-center">
                        
                        <i class="bi bi-person"></i>
                          <a href="">
                            <?php
                              $artefato_id = $artefato['id'];
                              $query = "SELECT p.nome FROM artefato_pesquisador as ap JOIN pesquisador as p ON ap.pesquisador_id = p.id WHERE ap.artefato_id = $artefato_id";
                              $artefato_pesquisador_result = mysqli_query($mysqli, $query);
                              $num_pesquisadores = mysqli_num_rows($artefato_pesquisador_result);

                              for ($j=0; $j<$num_pesquisadores; $j++) {
                                  $pesquisador = mysqli_fetch_array($artefato_pesquisador_result);
                                  if ($j < $num_pesquisadores-1)
                                    print_r($pesquisador['nome'].", ");
                                  else
                                    print_r($pesquisador['nome']);
                              }
                            ?>
                          </a>
                      </li>
                      
                    </ul>
                  </div>

                  <div class="content">
                    <p>
                      <?php print_r($artefato['descricao'])?>
                    </p>
                  </div>

                  <div class="read-more mt-auto align-self-end">
                    <a href="<?php print_r($artefato['url'])?>">
                      Acessar
                      <i class="bi bi-arrow-right"></i>
                    </a>
                  </div>
                </article>
              </div>
              <!-- End post list item -->

              <?php
                  }
                }
                else {
              ?>

                <div class="col-lg-12">
                  <article class="d-flex flex-column">
                    <h2 class="title">
                      <a href="#">
                        Nunhum resultado encontrado.
                      </a>
                    </h2>
                  </article>
                </div>

              <?php
                }
              ?>

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