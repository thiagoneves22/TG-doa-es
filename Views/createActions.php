<?php
    include('../Models/DoeFacil.php');
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../assets/css/createActions.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="shortcut icon" href="../assets/images/Doefacillogo.png" type="image/x-icon">
        <title>Criar ação</title>
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
                                <a class="nav-link" href="./aboutUs.php">Sobre nós</a>
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
            <div class="container">
                <h2 class="text-center mt-5">Entenda como funciona</h2>
                <div class="informations">
                    <p>
                        O Doe Fácil é um site que torna o processo de doação simples e eficiente, tanto para pessoas físicas quanto para pessoas jurídicas. Aqui, você encontrará todas as informações necessárias para fazer sua contribuição de forma descomplicada.
                    </p>
                    <p>
                        Se você é uma pessoa física, basta preencher seus dados pessoais, como nome, CPF, e-mail, telefone, endereço, cidade, estado, país, local de nascimento e renda familiar total. Em seguida, especifique o objeto da doação, forneça um título e uma breve descrição, além de indicar quais itens ou recursos podem ser doados. Por fim, identifique o responsável pela ação de doação e estabeleça uma data de expiração para a doação.
                    </p>
                    <p>
                        Para pessoas jurídicas, é necessário informar o nome da empresa, CNPJ, e-mail, telefone, endereço, cidade, estado e país. Além disso, descreva o objetivo da missão da entidade, tempo de atividade, atividades principais e tamanho da entidade. Assim como nas doações de pessoas físicas, especifique o título e a breve descrição da ação, indique o que pode ser doado, identifique o responsável e estabeleça uma data de expiração.
                    </p>
                    <p>
                        Após preencher os campos necessários, você terá a oportunidade de revisar os dados antes de finalizar a doação. Assim que o processo for concluído, você receberá um comprovante por e-mail. O Doe Fácil não apenas atende pessoas físicas e jurídicas, mas também se dedica a auxiliar instituições beneficentes e ONGs. Se você representa uma organização dessa natureza, o site oferece suporte para divulgar suas ações e receber doações de forma transparente. A plataforma possibilita conectar sua instituição a potenciais doadores, ampliando o alcance e o impacto de suas atividades em prol do bem comum.
                    </p>
                    <p>
                        Portanto, seja você uma pessoa física ou jurídica, o Doe Fácil é seu parceiro confiável para realizar contribuições significativas. Sua generosidade pode fazer a diferença na vida de muitas pessoas e comunidades.
                    </p>
                </div>
            </div>    
            <div class="container">
                <h2 class="text-center mt-5">Cadastrar nova ação</h2>
                <ul class="nav nav-tabs mt-5">
                    <h3 class="mr-3">Escolha como criar a ação: </h3>
                    <li class="nav-item">
                        <a class="nav-link active" id="pessoaFisica-tab" data-bs-toggle="tab" href="#pessoaFisica">Pessoa Física</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="pessoaJuridica-tab" data-bs-toggle="tab" href="#pessoaJuridica">Pessoa Jurídica</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="pessoaFisica">
                        <form action="../Controllers/AdminActions.php" method="post">
                            <?php if (isset($_SESSION['type_user']) && $_SESSION['type_user'] === 'admin') {
                                echo "<input type='hidden' name='acao' value='insert'>";
                            } else {
                                echo "<input type='hidden' name='acao' value='request'>";
                            }
                            ?>
                            <input type="hidden" name="tipoPessoa" value="PF">
                            <input type="hidden" name="myId" value="<?php echo isset($_SESSION['id']) ? $_SESSION['id'] : ''; ?>">
                            <input type="hidden" name="email_creator" value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nome:</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="CPF" class="form-label">CPF:</label>
                                <input type="text" class="form-control" id="CPF" name="CPF" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="contact_number" class="form-label">Telefone:</label>
                                <input type="text" class="form-control" id="contact_number" name="contact_number" required>
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Endereço:</label>
                                <input type="text" class="form-control" id="address" name="address" required>
                            </div>
                            <div class="mb-3">
                                <label for="number" class="form-label">Número:</label>
                                <input type="text" class="form-control" id="number" name="number" required>
                            </div>
                            <div class="mb-3">
                                <label for="city" class="form-label">Cidade:</label>
                                <input type="text" class="form-control" id="city" name="city" required>
                            </div>
                            <div class="mb-3">
                                <label for="state" class="form-label">Estado:</label>
                                <input type="text" class="form-control" id="state" name="state" required>
                            </div>
                            <div class="mb-3">
                                <label for="country" class="form-label">País:</label>
                                <input type="text" class="form-control" id="country" name="country" required>
                            </div>
                            <div class="mb-3">
                                <label for="birthplace" class="form-label">Local de Nascimento:</label>
                                <input type="text" class="form-control" id="birthplace" name="birthplace" required>
                            </div>
                            <div class="mb-3">
                                <label for="family_total_income" class="form-label">Renda Familiar Total:</label>
                                <input type="text" class="form-control" id="family_total_income" name="family_total_income" required>
                            </div>
                            <div class="mb-3">
                                <label for="donation_objective" class="form-label">Objetivo da Doação:</label>
                                <input type="text" class="form-control" id="donation_objective" name="donation_objective" required>
                            </div>
                            <div class="form-group">
                                <label for="title">Título da ação:</label>
                                <input required type="text" class="form-control" name="title" id="title">
                            </div>
                            <div class="form-group">
                                <label for="short_description">Breve descrição:</label>
                                <textarea required class="form-control" name="short_description" id="short_description" cols="30" rows="5" maxlength="154"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="full_description">Descrição completa:</label>
                                <textarea required class="form-control" name="full_description" id="full_description" cols="30" rows="5" maxlength="500"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="donated">O que pode ser doado:</label>
                                <textarea required class="form-control" name="donated" id="donated" cols="30" rows="5" maxlength="500"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="action_creator">Dono da ação:</label>
                                <input required type="text" class="form-control" name="action_creator" id="action_creator">
                            </div>
                            <div class="form-group">
                                <label for="expiration_date">Data de expiração:</label>
                                <input required type="date" class="form-control" name="expiration_date" id="expiration_date">
                            </div>
                            <input type="submit" class="btn btn-primary" value="Cadastrar">
                        </form>
                    </div>
                    <div class="tab-pane fade" id="pessoaJuridica">
                    <form action="../Controllers/AdminActions.php" method="post">
                            <?php if (isset($_SESSION['type_user']) && $_SESSION['type_user'] === 'admin') {
                                echo "<input type='hidden' name='acao' value='insert'>";
                            } else {
                                echo "<input type='hidden' name='acao' value='request'>";
                            }
                            ?>
                            <input type="hidden" name="tipoPessoa" value="PJ">
                            <input type="hidden" name="myId" value="<?php echo isset($_SESSION['id']) ? $_SESSION['id'] : '' ; ?>">
                            <input type="hidden" name="email_creator" value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ''; ?>">
                            <div class="mb-3">
                                <label for="name" class="form-label">Nome:</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="mb-3">
                                <label for="cnpj" class="form-label">CNPJ:</label>
                                <input type="text" class="form-control" id="cnpj" name="cnpj" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail:</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Endereço:</label>
                                <input type="text" class="form-control" id="address" name="address" required>
                            </div>
                            <div class="mb-3">
                                <label for="number" class="form-label">Número:</label>
                                <input type="text" class="form-control" id="number" name="number" required>
                            </div>
                            <div class="mb-3">
                                <label for="city" class="form-label">Cidade:</label>
                                <input type="text" class="form-control" id="city" name="city" required>
                            </div>
                            <div class="mb-3">
                                <label for="state" class="form-label">Estado:</label>
                                <input type="text" class="form-control" id="state" name="state" required>
                            </div>
                            <div class="mb-3">
                                <label for="country" class="form-label">País:</label>
                                <input type="text" class="form-control" id="country" name="country" required>
                            </div>
                            <div class="mb-3">
                                <label for="contact_number" class="form-label">Telefone:</label>
                                <input type="text" class="form-control" id="contact_number" name="contact_number" required>
                            </div>
                            <div class="mb-3">
                                <label for="mission_objective" class="form-label">Objetivo da Missão:</label>
                                <input type="text" class="form-control" id="mission_objective" name="mission_objective" required>
                            </div>
                            <div class="mb-3">
                                <label for="active_time" class="form-label">Tempo de Atividade:</label>
                                <input type="text" class="form-control" id="active_time" name="active_time" required>
                            </div>
                            <div class="mb-3">
                                <label for="main_activities" class="form-label">Atividades Principais:</label>
                                <input type="text" class="form-control" id="main_activities" name="main_activities" required>
                            </div>
                            <div class="mb-3">
                                <label for="size_entity_employees" class="form-label">Tamanho da Entidade (Número de Funcionários):</label>
                                <input type="text" class="form-control" id="size_entity_employees" name="size_entity_employees" required>
                            </div>
                            <div class="form-group">
                                <label for="title">Título da ação:</label>
                                <input required type="text" class="form-control" name="title" id="title">
                            </div>
                            <div class="form-group">
                                <label for="short_description">Breve descrição:</label>
                                <textarea required class="form-control" name="short_description" id="short_description" cols="30" rows="5" maxlength="154"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="full_description">Descrição completa:</label>
                                <textarea required class="form-control" name="full_description" id="full_description" cols="30" rows="5" maxlength="500"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="donated">O que pode ser doado:</label>
                                <textarea required class="form-control" name="donated" id="donated" cols="30" rows="5" maxlength="500"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="action_creator">Dono da ação:</label>
                                <input required type="text" class="form-control" name="action_creator" id="action_creator">
                            </div>
                            <div class="form-group">
                                <label for="expiration_date">Data de expiração:</label>
                                <input required type="date" class="form-control" name="expiration_date" id="expiration_date">
                            </div>
                            <input type="submit" class="btn btn-primary" value="Cadastrar">
                        </form>
                    </div>
                </div>
            </div>    
        </main>
        <footer>
            <h3>Atendimento</h3>
            <br>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
            </svg> (31) 9999-9999
            <br>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
            </svg> TGdoaçõessite@gmail.com
            <br>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock-fill" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z"/>
            </svg> Segunda a Sexta de 08:00 ás 18:00
            <br>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
            <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
            </svg>Edifício TGdoações rua TGdoações número 4950 sala 3/4
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
        <script>
		    feather.replace();
	    </script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </body>
</html>

