<?php
include("banco.php");
if (isset($_GET['p'])) { $page = stripcslashes($_GET['p']); }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/foxicon.png">
    <title><?php if ((isset($page)) && (file_exists("page/$page.php"))) { echo ucfirst($page)." | "; } ?> Scripting Studios Art | Tecnologia da Informação | Cachoeira do Sul, Santa Cruz do Sul, Santa Maria, Cruz Alta e Porto Alegre</title>
    <meta name="description" content="">
    <meta name="author" content="Scripting Studios Art - André Machado, Guacimar Mello | Tecnologia da Informação | CRM para Petshops e RMA">
    <META NAME="Keywords" CONTENT="Tecnologia da Informação, Cachoeira do Sul, Santa Cruz do Sul, Santa Maria, Cruz Alta, Porto Alegre, Tecnologia da Informação | CRM para Petshops e RMA">
    <META NAME="Description" CONTENT="Tecnologia da Informação, Cachoeira do Sul, Santa Cruz do Sul, Santa Maria, Cruz Alta, Porto Alegre">

    <META NAME="Subject" CONTENT="Cachoeira do Sul, Santa Cruz do Sul, Santa Maria, Cruz Alta, Porto Alegre, Scripting Studios Art | Tecnologia da Informação | CRM para Petshops e RMA">
    <META NAME="Classification" CONTENT="Computers/Internet">
    <META NAME="Abstract" CONTENT="Cachoeira do Sul, Santa Cruz do Sul, Santa Maria, Cruz Alta, Porto Alegre - Scripting Studios Art | Tecnologia da Informação | CRM para Petshops e RMA">
    <META NAME="Copyright" CONTENT="© Sistemas Web | CRM para Petshops e RMA">
    <META NAME="Contact" CONTENT="contato@scripting.com.br">
    <META NAME="Publisher" CONTENT="Scripting Studios Art - André Machado, Guacimar Mello | Tecnologia da Informação | CRM para Petshops e RMA">
    <META NAME="Robots" CONTENT="ALL">
    <META NAME="Robots" CONTENT="INDEX,FOLLOW">
    <META NAME="Revisit-After" CONTENT="5 Days">
    <META NAME="Distribution" CONTENT="Global">
    <META NAME="Rating" CONTENT="General">

    <link rel="canonical" href="http://www.scripting.com.br/" >
    <meta name="geo.region" content="BR-RS" >
    <meta name="geo.placename" content="Cachoeira do Sul, Rio Grande do Sul, Brasil" >
    <meta name="geo.position" content="-30.0483822;-52.8872863,17" >
    <meta name="dcterms.title" content="Cachoeira do Sul, Santa Cruz do Sul, Santa Maria, Cruz Alta, Porto Alegre, Tecnologia da Informação | CRM para Petshops e RMA, Scripting Studios Art" >
    <meta name="dcterms.type" content="text" >
    <meta name="dcterms.format" content="text/html" >
    <meta name="dc.language" content="pt-BR" >
    <meta name="dcterms.subject" content="Tecnologia da Informação, Cachoeira do Sul, Santa Cruz do Sul, Santa Maria, Cruz Alta, Porto Alegre" >
    <meta name="dcterms.creator.address" content="contato@scripting.com.br" >
    <meta name="dcterms.identifier" content="http://www.scripting.com.br/" >
    <meta property="og:title" content="Scripting Studios Art - Cachoeira do Sul, Santa Cruz do Sul, Santa Maria, Cruz Alta, Porto Alegre | Tecnologia da Informação | CRM para Petshops e RMA" >
    <meta property="og:url" content="http://www.scripting.com.br/" >
    <meta property="og:image" content="images/foxicon.png" >
    <meta property="og:site_name" content="Scripting Studios Art - Cachoeira do Sul, Santa Cruz do Sul, Santa Maria, Cruz Alta, Porto Alegre | Tecnologia da Informação | CRM para Petshops e RMA" >
    <meta property="fb:admins" content="scriptingstudiosart">
    <meta property="og:description" content="Tecnologia da Informação, Cachoeira do Sul, Santa Cruz do Sul, Santa Maria, Cruz Alta, Porto Alegre" >
    <meta property="og:latitude" content="-30.0483822" >
    <meta property="og:longitude" content="-52.8872863,17" >
    <meta property="og:street-address" content="Rua Riachuelo 517" >
    <meta property="og:locality" content="Cachoeira do Sul" >
    <meta property="og:region" content="RS" >
    <meta property="og:country-name" content="BR" >
    <meta property="og:email" content="contato@scripting.com.br" >
    <meta property="og:phone_number" content="(51) 9684-6630" >
    <meta itemprop="name" content="Scripting Studios Art - Cachoeira do Sul, Santa Cruz do Sul, Santa Maria, Cruz Alta, Porto Alegre | Tecnologia da Informação | CRM para Petshops e RMA" >
    <meta itemprop="image" content="images/foxicon.png" >
    <meta name="alexaVerifyID" content="gaBEFg-Vtlufz8aLpC_7r7_EwPA"/>
    <script type="text/javascript">
    _atrk_opts = { atrk_acct:"gH9Cf1a8Md00aq", domain:"scripting.com.br",dynamic: true};
    (function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://d31qbv1cthcecs.cloudfront.net/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
    </script>


    <link rel="alternate" hreflang="pt-BR" href="http://scripting.com.br/" />
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="css/andremachado.css" rel="stylesheet"/>
    <link rel="stylesheet" href="css/lightbox.css">

    <link rel="stylesheet" href="foundation/css/foundation.css" />
    <script src="foundation/js/vendor/modernizr.js"></script>

</head>
<body >
<?php


                ?>
    <!-- Inicio do Container -->

    <div class="container">
        <!-- Inicio do Conteúdo Header -->
        <header class="row">

            <h1 style="display:none;">Scripting Studios Art / Com espírito inovador, a Scripting Studios Art desenvolve soluções criativas e inteligentes</h1>

        <!-- Fim do Conteúdo Header -->
        </header>
        <!-- Inicio da Linha -->
        <div class="row" >
            <!-- Inicio da Tag Main com 12 C -->
            <div role="main" class="col-md-12" >
              <!-- Inicio do Tab Content -->
                <div class="tab-content">
            <?php
            if ((isset($page)) && (file_exists("page/$page.php"))){
                ?>
                    <!-- Página dinâmica -->
                    <?php @include("page/$page.php"); ?>
                <?php
            }
            else if ((isset($page)) && (!file_exists("page/$page.php"))) {
                include("page/404.php");
            }
            else if (!isset($page)) {
            ?>
                    <!-- Homepage -->
                    <div id="1" class="tab-pane fade in active">
                        <div class="box-content">

                                                  <div class="boxtop-subpage">
                                                      <img class="subpage-image fl" src="images/foxicon.png" width="50" height="50"/>
                                                      <h3 class="box-subpage fl">Scripting Studios Art</h3>
                                                      <div style="clear:both;"></div>
                                                  </div>
                                                      <?php @include("sub-p/quemsomos.php"); ?>


                  <div class="blocos row">
                      <div class="col-sm-4">
                        <h3>Facebook</h3>
                          <a href="https://www.facebook.com/scriptingstudiosart" target="_blank">
                            <img style="margin-bottom:15px;" src="images/facebook.png" width="105" height="105"/>
                          </a>
                          <p class="p-bloco">facebook.com/scriptingstudiosart</p>
                      </div>
                      <div class="col-sm-4">
                        <h3>Twitter</h3>
                          <a href="https://twitter.com/scriptingsart" target="_blank">
                          	<img style="margin-bottom:15px;" src="images/twitter.png" width="100" height="100"/>
                          </a>
                          <p class="p-bloco">twitter.com/scriptingsart</p>

                      </div>
                      <div class="col-sm-4">
                        <h3>E-mail p/ contato</h3>
                          <img style="margin-bottom:15px;" src="images/email.png" width="100" height="100"/>
                        <p class="p-bloco">contato@scripting.com.br</p>
                      </div>
                  </div>








                        </div>
                    </div>


                    <!-- Abre -->
                                            <div class="boxtop-subpage">
                                                <img alt="Portfólio" title="Portfólio" class="subpage-image fl" src="images/potfolio.png" width="50" height="50"/>
                                                <h3 class="box-subpage fl">Portfólio</h3>
                                                <div style="clear:both;"></div>
                                            </div>
                    <div class="row linhasuperior">
                     <div class="col-sm-4">
                         <h4 class="crms-p">The Chinese Dragon - Jogo</h4>
                         <div class="crms-box">
                             <a href="projects/tcd" title="The Chinese Dragon - Jogo">
                                 <img class="portfolio-thumbnail" src="portfolio/chinesedragon.png" alt=""/>
                             </a>
                             <div class="portfolio-url"><a href="projects/tcd">Jogo mmorpg baseado em turnos</a></div>
                             <div style="clear:both;"></div>
                         </div>
                     </div>

                     <div class="col-sm-4">
                         <h4 class="crms-p">Sistema de RMA</h4>
                         <div class="crms-box">
                             <a href="projects/rma" title="Sistema de RMA">
                                 <img class="portfolio-thumbnail" src="portfolio/rma.png" alt=""/>
                             </a>
                             <div class="portfolio-url"><a href="projects/rma">CRM ágil para controle de produtos em garantia</a></div>
                             <div style="clear:both;"></div>
                         </div>
                     </div>
                     <div class="col-sm-4">
                         <h4 class="crms-p">Sistema para Petshop</h4>
                         <div class="crms-box">
                             <a href="projects/petshop" title="Sistema de Petshop">
                                 <img class="portfolio-thumbnail" src="portfolio/pet.png" alt=""/>
                             </a>
                             <div class="portfolio-url"><a href="projects/pet">CRM para controle e organização da petshop</a></div>
                             <div style="clear:both;"></div>
                         </div>
                     </div>
                    </div>


                    <!-- Fecha -->

<!-- Abre -->
                        <div class="boxtop-subpage">
                            <img alt="Tecnologias" title="Tecnologias" class="subpage-image fl" src="images/tecnologias.png" width="50" height="50"/>
                            <h3 class="box-subpage fl">Tecnologias e linguagens de programação</h3>
                            <div style="clear:both;"></div>
                        </div>
                        <div class="box-content" style="padding:0px;background-color:#FFF;padding-bottom:50px;">

<div style="text-align:left;">
  <p style="font-size:12px;">

     <a href="https://www.ruby-lang.org/pt/documentation/" target="_blank">clique aqui</a> para aprender <strong style="color:#38C;font-family:'Fira mono';letter-spacing:1px;">Ruby</strong></p>
  <p style="font-size:12px;">

     <a href="http://br.phptherightway.com/" target="_blank">clique aqui</a> para aprender <strong style="color:#38C;font-family:'Fira mono';letter-spacing:1px;">PHP</strong>
   </p>
   <p style="font-size:12px;">

     <a href="https://wiki.postgresql.org/wiki/10_Dicas_para_come%C3%A7ar_a_usar_o_PostgreSQL" target="_blank">clique aqui</a> para aprender <strong style="color:#38C;font-family:'Fira mono';letter-spacing:1px;">Postgresql</strong>
     </p>
        <p style="font-size:12px;">
     <a href="http://blog.thiagobelem.net/guia-pratico-de-mysqli-no-php/" target="_blank">clique aqui</a> para aprender <strong style="color:#38C;font-family:'Fira mono';letter-spacing:1px;">Mysql Improved Extension p/ PHP</strong>
   </p>


</div>

                        <div class="boxtop-subpage">
                            <img alt="Frameworks" title="Frameworks" class="subpage-image fl" src="images/framework.png" width="50" height="50"/>
                            <h3 class="box-subpage fl">Frameworks para desenvolvimento ágil</h3>
                            <div style="clear:both;"></div>
                        </div>
                        <div class="box-content" style="padding:0px;background-color:#FFF;padding-bottom:50px;">
<div style="text-align:left;">
  <p style="font-size:12px;">

    <a href="http://www.maujor.com/railsgirlsguide/" target="_blank">clique aqui</a> para aprender <strong style="color:#38C;font-family:'Fira mono';letter-spacing:1px;">Ruby On Rails</strong>
  </p>
  <p style="font-size:12px;">

    <a href="http://book.cakephp.org/3.0/pt/quickstart.html" target="_blank">clique aqui</a> para aprender <strong style="color:#38C;font-family:'Fira mono';letter-spacing:1px;">CakePHP</strong>
  </p>
</div>



                        </div>


                        <!-- Fecha -->

                                <!-- Inicio do Copyright -->
                                <div class="copyright row" style="margin-top:5px;">
                                  <div style="text-align:right;">
                                    <p>Scripting Studios Art ® 2015 </p>
                                  </div>
                                <!-- Fim do Copyright -->
                                </div>


            <?php
            }
            ?>
                <!-- Fim do Tab Content -->
                </div>

            <!-- Fim da tag Main com 12 C -->
            </div>
        <!-- Fim da Linha -->
        </div>

        <!-- Inicio do Footer -->
        <!-- Inicio do Copyright -->
    <!-- Fim do Conainer -->
    </div>

    <!-- Inicio do Google Analytics -->
    <div>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-64994314-1', 'auto');
          ga('send', 'pageview');

        </script>
    <!-- Fim do Google Analytics -->
    </div>

    <!-- Google Tag Manager -->
    <div>
        <noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-5VQ92L"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        '//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5VQ92L');</script>
    <!-- End Google Tag Manager -->
    </div>
    <?php include("inc/seo.php"); ?>

    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="js/lightbox.js"></script>
</body>
</html>
