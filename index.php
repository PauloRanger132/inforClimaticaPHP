<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

        
        <script src="js/clima.js"></script>
        
    </head>
    <body>
        
        
        
       
        <div class="jumbotron jumbotron-fluid" style="background-color:#EAECEE">
  <div class="container">
    <h1 class="display-4">TERBRUSQUE</h1>
    <p class="lead">Um site baseado na temperatura de Brusque!.</p>
  

            
    </div>
            
            
            </div>
        
        <div class="jumbotron jumbotron-fluid" style="background-color:orange"> <h2><b>Alerta Laranja, Tempestade</b>": Paraná, Santa Catarina"</h2>
        </div> 
               
               <div class="jumbotron" style="background-color:#CCD1D1" >
                   <h1 >Tempo para Brusque-SC |<span id="temperatura"> </span> </h1>
                   
                   <p>
                       <span id="situacao"></span>
                     
                         <img id ="icone" src="img/icones/02d.png"/>
                        
                   </p>
                   
                   
                     </div>
                   
      <div class="jumbotron"  style="background-color:#D5D8DC  ">
          <h1>Umidade em Brusque | <span id="umidade"> </span></h1>
                   <p>
                       <span id="situacao"></span>
                     
                       
                       
                   </p>
                     </div>
    <div class="media">
  <img class="align-self-center mr-3" src="img/icones/umidade.png" height="100px" width="100px" alt="Imagem de exemplo genérica">
  <div class="media-body">
    <h5 class="mt-0">Úmidade do Ar</h5>
    
  </div>
</div>
        <div class="jumbotron"style="background-color:#B2BABB  ">
            <h1>Pressão em  Brusque-SC |(hPa) <span id="pressao"> </span></h1>

                                   <p>
                       <span id="situacao"></span>
                      
                       
                   </p>
                    </div> 
                   <div class="media">
  <img class="align-self-center mr-3" src="img/icones/pressao.png" height="100px" width="100px" alt="Imagem de exemplo genérica">
  <div class="media-body">
    <h5 class="mt-0">Pressão do Ar</h5>
    
  </div>
</div>
         <div class="jumbotron" style="background-color:#99A3A4">
             <h1>Temperatura Máxima Em  Brusque-SC | <span id="tempmaxima"> </span></h1>
                 
                   <p>
                       <span id="situacao"></span>
                       
                        
                   </p>
                    </div> 
                   <div class="media">
  <img class="align-self-center mr-3" src="img/icones/tma.png" height="100px" width="100px" alt="Imagem de exemplo genérica">
  <div class="media-body">
    <h5 class="mt-0">Temperatura Máxima</h5>
 
  </div>
</div>

        <div class="jumbotron" style="background-color:#7F8C8D   ">
             <h1>Temperatura Mínima Em  Brusque-SC | 
                 <span id="tempminima"> </span></h1>
                   <p>
                       <span id="situacao"></span>
                       
                        
                   </p>
                    </div> 
                   <div class="media">
  <img class="align-self-center mr-3" src="img/icones/tmm.png" height="100px" width="100px" alt="Imagem de exemplo genérica">
  <div class="media-body">
    <h5 class="mt-0">Temperatura Mínima</h5>
 
  </div>
</div>
               <div class="jumbotron" style="background-color:#717D7E    ">
                   <h1 >Velocidade do vento  Brusque-SC | <span id="velocidadevento"> </span> </h1>
                      
                
                       <span id="situacao"></span>
                      
                       
                        
                  
                    </div> 
                   <div class="media">
  <img class="align-self-center mr-3" src="img/icones/vento.jpg" height="100px" width="100px" alt="Imagem de exemplo genérica">
  <div class="media-body">
    <h5 class="mt-0">Velocidade do vento
    </h5>
   
  </div>
</div>
         <div class="jumbotron" style="background-color:#707B7C   ">
                   <h1 >Nascer do Sol em Brusque | <span id="nascerdosol"> </span></h1>
                      
                   
                       <span id="situacao"></span>
                      
                       
                        
                  
                    </div> 
                   <div class="media">
  <img class="align-self-center mr-3" src="img/nascerdosol.png" height="100px" width="100px" alt="Imagem de exemplo genérica">
  <div class="media-body">
    
   
  </div>
</div>
        
        <div class="jumbotron" style="background-color:#616A6B  ">
            <h1 >Por do sol em Brusque | <span id="pordosol"> </span></h1>
                   
                       <span id="situacao"></span>
                      
                       
                        
                    </div> 
                   <div class="media">
  <img class="align-self-center mr-3" src="img/nascerdosol.png" height="100px" width="100px" alt="Imagem de exemplo genérica">
  <div class="media-body">
    
  </div>
</div>
        
        
      
                  
              
               
         
           
       
        
    </body>
</html>
