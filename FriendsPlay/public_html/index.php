<?php
session_start(); 
?>
<!doctype html>
<html xmlns:fb="http://www.facebook.com/2008/fbml">
  <head>
    <title>Friend's Play</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="_css/estilo.css"/>
        <link rel="stylesheet" type="text/css" href="_css/criarEvento.css"/>
 </head>
  <body>
  <?php if ($_SESSION['FBID']): ?>      <!--  After user login  -->

  <!--
<div class="container">
<div class="hero-unit">
  <h1>Hello <?php echo $_SESSION['USERNAME']; ?></h1>
  <p>Welcome to "facebook login" tutorial</p>
  </div>
<div class="span4">
 <ul class="nav nav-list">
<li class="nav-header">Image</li>
	<li><img src="https://graph.facebook.com/<?php echo $_SESSION['FBID']; ?>/picture"></li>
<li class="nav-header">Facebook ID</li>
<li><?php echo  $_SESSION['FBID']; ?></li>
<li class="nav-header">Facebook fullname</li>
<li><?php echo $_SESSION['FULLNAME']; ?></li>

<li class="nav-header">Facebook Email</li>
<li><?php echo $_SESSION['EMAIL']; ?></li>
<li class="nav-header">Facebook Amigos</li>
<li><?php echo $_SESSION['AMIGOS']; ?></li>
<div><a href="logout.php">Logout</a></div>
</ul></div></div>
-->

 <div id="interface">
            <header id="cabecalho">
                <hgroup>
                    
                    <!--<h1>Friend's Play</h1>-->
                    <!--Adicionando a foto do perfil-->
                     <figure class = "foto-legenda">
                        <img src="https://graph.facebook.com/<?php echo $_SESSION['FBID']; ?>/picture">
                        <figcaption>
                            <p>
                                📷 Atualizar foto 
                            </p>
                        </figcaption>
                    </figure>

<h1>  <?php echo $_SESSION['FULLNAME'];?>  </h1>
                          <h2 id="cidade-atual">Cidade atual</h2>
                </hgroup>

                <nav id="menu">
                    <ul>
                        
                        <li><a href="index.php">Criar Evento</a></li>
                        <li><a href="convites.php">Convites</a></li>
                        <li><a href="eventosCriados.php">Eventos Criados</a></li>
                        <li><a href="partipacaoEventos.php">Participação em Eventos</a></li>
                    </ul>
                </nav>
                <iframe name="janela-calendario" id="calendario-evento" src="https://www.google.com/calendar/embed?src=86c4o9bhc1p9shjob2pcf7sbq4%40group.calendar.google.com&ctz=America/Fortaleza"></iframe>
                <!--<a target="_blank" href="https://www.google.com/calendar/event?action=TEMPLATE&tmeid=a3RvYTJpcWR2bTIxdmRkdTluZGZmY2ozMmcga2Fpb3NiLjE0QG0&tmsrc=kaiosb.14%40gmail.com"><img border="0" src="https://www.google.com/calendar/images/ext/gc_button1_pt-BR.gif"></a>-->
                <!--<iframe src="https://www.google.com/calendar/embed?src=86c4o9bhc1p9shjob2pcf7sbq4%40group.calendar.google.com&ctz=America/Fortaleza" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>-->
            </header>
            <section id="principal">
                <article id="noticia-pricipal">
                    <header id="cabecalho-artigo">
                        <hgroup>
                            <h1>Menu > Criar Evento</h1>
                        </hgroup>
                     </header>

                   
                    CRIAR EVENTO
                </article>
                <footer id="rodape">
                <p>
                    Copyright 2015 - by MangSoftware
                    <a href="logout.php">Logout</a>
                    <br>
                    <a href="https://www.facebook.com/kaio.ribeiro.984" target="_blank">Facebook</a>
                </p>
            </footer>
            </section>
        </div>

        <div><a href="logout.php">Logout</a></div>

    <?php else: ?>     <!-- Before login --> 
<div class="container">
<img id="img-logo" src="_imagens/tela-principal.png"/>
                <nav id="figuras">
                    <ul>
                        <li id="login-fig"><a href="fbconfig.php" ><img src="_imagens/login.png"/></a></li><br/>
                        <li id="login-nome"><a href="http://www.facebook.com/" target="_blank">Ainda não é cadastrado?</a></li>
                    </ul>
                </nav>
    <?php endif ?>
  </body>
</html>
