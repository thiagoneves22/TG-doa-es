<?php
    include("../Models/DoeFacil.php");
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
  <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/css/aboutUs.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="shortcut icon" href="../assets/images/Doefacillogo.png" type="image/x-icon">
        <title>Sobre Nós</title>
  </head>
  <body>
    <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="../assets/images/Doefacillogo.png" class="logo" alt="Logo do doefacil">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                        <ul class="navbar-nav mx-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="../index.php">Início</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Sobre nós</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="./donations.php">Ações beneficentes</a>
                            </li>
                            <?php
                            if (isset($_SESSION['type_user']) && $_SESSION['type_user'] === 'admin') {
                                echo "<li class='nav-item'><a class='nav-link' href='./createActionsAdmin.php'>Criar ação</a></li>";
                            } else {
                                echo "<li class='nav-item'><a class='nav-link' target='_blank' href='./createActions.php'>Criar ação</a></li>";
                            }
                            ?>
                        </ul>
                        <ul class="navbar-nav">
                            <div id="aDireita">
                                <li class="nav-item">
                                    <?php
                                    if (isset($_SESSION['username'])) {
                                        $username = $_SESSION['username'];
                                        echo "<a class='nav-link' href='./situationDonation.php'>{$username}</a>";
                                        echo "<li class='nav-item'><a class='nav-link' href='../Controllers/Login.php?acao=logout'>Sair</a></li>";
                                    } else {
                                        echo "<a class='nav-link' href='./login.php'>Login</a>";
                                    }
                                    ?>
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
    <hr class="styled-hr">
    <main>
        <br>
        <br>
        <h1 id="h1id1">Sobre Nós</h1>
        <p class="descrição">
            Generosidade é uma virtude poderosa que beneficia a todos e acreditamos que a doação é uma maneira eficaz de construir um mundo melhor e impactar positivamente a vida das pessoas em nossa sociedade. Na Doefacil, nosso propósito é fortalecer a cultura de doações e a generosidade.
            <br>
            <br>
            Somos entusiastas de ideias promissoras e entendemos que a construção de um mundo mais justo e igualitário requer a colaboração de todos. 
            Compreendemos que as organizações filantrópicas devem se concentrar em gerar impacto por meio de ações sociais, sem se preocuparem com tecnologia
            para captação de recursos. Por essa razão, fornecemos tecnologia acessível e oferecemos suporte completo para maximizar o impacto. Acreditamos que 
            ações responsáveis são o primeiro passo para resolver muitos problemas do mundo. Nossa confiança é essencial e permeia todos os nossos relacionamentos
            comerciais, valorizando a qualidade de nossas parcerias e proporcionando canais seguros para doações.
        </p>
        <h1 id="h1id2">Missão</h1>
        <p class="descrição">
        Missão: Facilitar doações online para causas humanitárias e sociais em todo o mundo, promovendo o apoio direto a projetos e organizações que buscam fazer a diferença nas vidas das pessoas.
<br>
<br>
"A missão do nosso site de doações online é conectar pessoas generosas e de coração aberto a projetos e organizações que estão fazendo a diferença no mundo. Nosso objetivo é fornecer uma plataforma segura, transparente e fácil de usar, onde os usuários possam descobrir, apoiar e acompanhar causas humanitárias e sociais que ressoem com seus valores pessoais.

Acreditamos que todos têm o poder de criar um impacto positivo, independentemente de sua localização geográfica ou capacidade financeira. Ao unir doadores comprometidos e projetos significativos, estamos construindo uma comunidade global de solidariedade e compaixão.

Nosso site oferece uma ampla variedade de opções de doação, permitindo que os usuários escolham entre diferentes categorias de causas, como educação, saúde, meio ambiente, ajuda humanitária, direitos humanos e muito mais. Além disso, garantimos a transparência total, fornecendo informações detalhadas sobre cada projeto e a forma como os fundos são utilizados.

Temos o compromisso de estabelecer parcerias com organizações respeitáveis e comprovadas, que passam por um rigoroso processo de seleção para garantir que as doações sejam usadas de maneira eficaz e responsável. Também fornecemos atualizações regulares sobre o progresso dos projetos apoiados, para que os doadores possam ver o impacto tangível de sua contribuição.

Nossa visão é um mundo onde todas as pessoas tenham acesso a oportunidades e recursos para prosperar. Ao capacitar os doadores a contribuírem com causas que lhes tocam pessoalmente, estamos construindo um futuro mais justo e solidário.

Junte-se a nós nessa jornada de generosidade e compaixão. Cada doação conta e, juntos, podemos fazer a diferença."</p>

        <h1 id="h1id3">Conheça a Equipe</h1>
        <br>
        <div class="container">
          <div class="item">
            <h2>CEO</h2>
            <img src="../assets/images/TG.jpg">
            </a>
            <div class="descimg">Thiago costa</div>
            <br>
    <footer>
    
      <h3>Atendimento</h3>
      <br>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
          </svg> (31) 9999-9999
          <br>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
          <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
          </svg> Tgdoaçõessite@gmail.com
          <br>
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
      </svg> Segunda a Sexta de 08:00 ás 18:00
          <br>
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
      </svg>Edifício Tgdoações rua Tgdoações número 4950 sala 3/4
      <br>
          <br>
          <div class="social">
              <a href=""><i class="fab fa-whatsapp"></i></a>
              <a href=""><i class="fab fa-instagram"></i></a>
              <a href=""><i class="fab fa-facebook"></i></a>
          </div>
          <br>
          <br>
      <p>&copy; 2024 GRUPO GLYMTECH Todos os direitos reservados.</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  </body>
</html>
