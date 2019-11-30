<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Termo Brusque</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <script src="https://code.jquery.com/jquery-3.4.1.min.js"integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


        <script src="js/clima.js"></script>

        <!-- Tags Gerais -->
        <meta NAME="DESCRIPTION" CONTENT="Site de informações climáticas em tempo real de Brusque - Desenvolvido por Wagner"/>
        <meta NAME="ABSTRACT" CONTENT="Informações Climáticas"/>
        <meta name="keywords" content="Clima, Temparatura, Umidade,Temperatura Máximas em  Brusque, Temperatura Mínima em Brusque, Temperatura em Brusque, Tempo para Brusque, Clima para Brusque, Tempo em Brusque, Temperatura CLimática Brusque,Por do sol em Brusque, Nascer do sol em Brusque, Velocidade do Vento em Brusque,Pressão em Brusque, Previsão do tempo em Brusque"/>
        <meta NAME="title" CONTENT="Termo Brusque" />
        <meta NAME="identifier-url" content="https://paulo-clima.herokuapp.com/" />
        <meta NAME="author" content="Paulo Ranger" />
        <meta NAME="ROBOTS" CONTENT="All" />
        <meta NAME="RATING" CONTENT="general" />
        <meta NAME="DISTRIBUTION" CONTENT="global" />
        <meta NAME="LANGUAGE" CONTENT="pt-br" />
        <meta name="content-language" content="portuguese" />
        <meta name="doc-class" content="Completed" /> 
        <meta name="reply-to" content="Paulo_c_dutra@estudante.sc.senai.br"/> 

        <!-- Tags Para rede social Facebook -->
        <meta property="og:url" content="https://paulo-clima.herokuapp.com/" />
        <meta property="og:locale" content="pt_BR" />
        <meta property="og:type" content="website" />
        <meta property="og:site_name" content="Termo Brusque" />
        <meta property="og:title" content="Termo Brusque" />
        <meta property="og:description" content="Clima, Temparatura, Umidade,Temperatura Máximas em  Brusque, Temperatura Mínima em Brusque, Temperatura em Brusque, Tempo para Brusque, Clima para Brusque, Tempo em Brusque, Temperatura CLimática Brusque,Por do sol em Brusque, Nascer do sol em Brusque, Velocidade do Vento em Brusque,Pressão em Brusque, Previsão do tempo em Brusque" />
        <meta property="og:image" content="https://www.pfizer.com.br/sites/default/files/inline-images/psoriase-melhora-com-a-exposicao-ao-sol.jpg" />
        <meta property="og:image:width" content="400" />
        <meta property="og:image:height" content="120" />
        <meta property="fb:app_id" content="" />

        <!-- Tags Para rede social Twitter -->
        <meta name="twitter:card" content="summary_large_image" />
        <meta name="twitter:description" content="Clima, Temparatura, Umidade,Temperatura Máximas em  Brusque, Temperatura Mínima em Brusque, Temperatura em Brusque, Tempo para Brusque, Clima para Brusque, Tempo em Brusque, Temperatura CLimática Brusque,Por do sol em Brusque, Nascer do sol em Brusque, Velocidade do Vento em Brusque,Pressão em Brusque, Previsão do tempo em Brusque" />
        <meta name="twitter:title" content="Termo Brusque" />
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
