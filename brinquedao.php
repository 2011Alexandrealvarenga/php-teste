<?php 
include 'include/head.php';
include 'include/header.php';
 ?>
<div class="container brinquedao pt-5 pb-5"><!--brinquedao -->
  <div class="row pt-4">
    <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 d-flex justify-content-center">
      <div class="dizeres">
        <h3 class="h3_titulo">Brinquedão</h3> 
          <p>Nossos Brinquedões são fabricados com a mais alta segurança, modernidade e qualidade, com emissão de Laudo de Segurança (ART) após cada instalação. Fabricação rápida e
          personalisada para seu espaço e tema, realizada pelos melhores profissionais dísponiveis. Entre em contato e solicite seu projeto e orçamento grátis
        </p>
      
      </div>
    </div>
    <div class="pt-4 pb-4 col-sm-12 col-md-12 col-xs-12 col-lg-6 ">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="img/brinquedao/1.JPG">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/brinquedao/2.JPG">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/brinquedao/3.JPG">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/brinquedao/4.JPG">
          </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    
  </div>

</div><!--brinquedao -->
<div class="container conteudo-categoria-brinquedao pb-5">
  <?php 
    $paged = (get_query_var('paged')) ? absint(get_query_var('paged')):1;
    // args
    $my_args = array(
      'post_type' => 'post',
      'category_name' => 'brinquedao',          
      'paged' => $paged,
    );  
   
    // query
    $the_query = new WP_Query ( $my_args );
  ?> 
  <div class="card-group mt-4 ">
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 col-xl-4 "> 
      <div class="card">                
        <a href="">
          <div class="card-body ">
              <img src="" alt="">
          </div>
          <div class="card-text">
            
          
            <h4>
              titulo
            </h4>

            <button class="btn btn-primary btn-block">Saiba Mais</button>

                
          </div>
        </a>
      </div>
    </div> 
   
  </div>
 
</div>

 <?php include 'include/footer.php';  ?>