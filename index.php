<?php 
include 'include/head.php';
include 'include/header.php';
 ?>
<div class="container">
  <div class="row">
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block" src="img/banner/banner1.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block" src="img/banner/banner2.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block" src="img/banner/banner2.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

      
  </div>

</div>
<div class="container-fluid nossos-produtos">
  <div class="row">
    <div class="container">
      <div class="col">
        <div class="titulo">
          <h3 class="h3_titulo">Nosso Produtos</h3>
        </div>
        
      </div>

      <!-- LOOP DE PRODUTOS -->
      <div class="card-group ">
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 justify-content-center pt-5 card-item">
          <div class="card">
            <a href="https://diverbrink.com.br/brinquedao/">
              <div class="titulo">
                <h4 class="card-title">Brinquedão</h4>
              </div>
              
              <div class="justify-content-center d-flex">
                <img src="img/brinquedao.jpg" class="card-image-top img-fluid">
                
              </div>          
              <div class="card-body">
                <p class="card-text">
                  Desenvolvido e Fabricado especialmente para seu espaço
                </p>
              </div>
            </a>
          </div> 
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 justify-content-center pt-5 card-item">
          <div class="card">
            <a href="https://diverbrink.com.br/eletronico/ ">
              <div class="titulo">
                <h4 class="card-title">Eletrônicos</h4>
              </div>
              
              <div class="justify-content-center d-flex">
               <img src="img/eletronico.jpg" class="card-image-top img-fluid">
              </div>
              <div class="card-body">
                <p class="card-text">
                   Os Jogos mais Atuais e Realistas com um toque de Diversão.
                </p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4 justify-content-center pt-5 card-item">
          <div class="card">
            <a href="https://diverbrink.com.br/obstaculo/">
              <div class="titulo">
                <h4 class="card-title">Àrea Baby e Cenografia</h4>
              </div>
              
              
              <div class="justify-content-center d-flex">

                <img src="img/kids-play.jpg" class="card-image-top img-fluid">
              </div>
              <div class="card-body">
                <p class="card-text">
                   Segurança, Conforto e muita Alegria em um espaço exclusivo para os bebês.
                </p>
              </div>
            </a>
          </div>
        </div>
      
      </div>
    </div>
  </div>
</div>
<div class="container-fluid areas-atendidas "> <!--AREAS ATENDIDAS  -->
   
  <div class="row">
    <div class="col">
      <div class="titulo">
        <h3 class="h3_titulo">Áreas Atendidas</h3>
      </div>
     
      <div class="card-group ">
        <div class="col-sm-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
          <div class="card pt-3" >
            <div class="titulo">
              <h4>Buffet</h4>
            </div>
              
            <div class="card-body">

              <img src="img/icones/self.png" class="card-image-top img-fluid">
            </div>
            
            <div class="card-body" id="card-1">
            
                       
              <p>Festas e Eventos</p>
              <p>Infantil</p>
              <p>Coorporativo</p>
              <p>Casamento</p>
              
            </div>

          </div>
        </div>
        <div class="col-sm-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
          <div class="card pt-3" >
            <div class="titulo">
              <h4>Condominio</h4>
            </div>
            

            <div class="card-body" id="card-2">
              <p>Mobiliàrio Infantil</p>
              <p>Salão de Jogos</p>
              <p>Àrea Kids</p>
            </div>
            <div class="card-body">

             <img src="img/icones/condominio.png" class="card-image-top img-fluid">
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">
          <div class="card pt-3" >
            <div class="titulo">
              <h4>Parques</h4>
            </div>
            
            <div class="card-body">
              <img src="img/icones/parque.png" class="card-image-top img-fluid">
            </div>
            <div class="card-body" id="card-3">
              <p>Brinquedotecas</p>
              <p>Guarda Infantil</p>
              <p>Shopping</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-sm-6 col-md-3 col-lg-3 col-xl-3">   
          <div class="card pt-3">
            <div class="titulo">
              <h4>Restaurantes</h4>
            </div>
            
            <div class="card-body" id="card-4">
              <p>Pizzarias</p>
              <p>Àreas Kids</p>
              <p>Bares</p>
            </div>
    
            <div class="card-body">

             <img src="img/icones/restaurante.png" class="card-image-top img-fluid">
            </div>
          </div>
        </div>

        
        
      </div>
    </div>
  </div>
</div><!--AREAS ATENDIDAS  -->
<div class="container-fluid contato2">
  <div class="row">
    <div class="col">
      <div class="formulario-contato">
        
      </div>
    </div>
  </div>
</div>
<div class="container-fluid conhecanos2">
  
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3659.3155207154205!2d-46.65066958528601!3d-23.48514218472085!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef7a2e83add13%3A0x6fe1aacf7929d021!2sDiver%20Brink!5e0!3m2!1spt-BR!2sbr!4v1596306819925!5m2!1spt-BR!2sbr"frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
 <?php include 'include/footer.php';  ?>