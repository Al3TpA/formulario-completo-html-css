<?php
// Sanitizando os dados recebidos
$nome = htmlspecialchars($_GET['nome']);
$email = htmlspecialchars($_GET['email']);
$idade = htmlspecialchars($_GET['idade']);
$data_nascimento = htmlspecialchars($_GET['data_nascimento']);
$senha = htmlspecialchars($_GET['senha']); // Não é recomendado exibir senhas
$tecnologias = isset($_GET['tecnologias']) ? $_GET['tecnologias'] : [];
$nivel = htmlspecialchars($_GET['nivel']);
$sistema_operacional = htmlspecialchars($_GET['sistema_operacional']);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Recebidos</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin-bottom: 20px;
        }
        .data-label {
            font-weight: bold;
        }
        .data-value {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

<div class="container">
    <h2 class="text-center">Dados Recebidos</h2>
    <div class="card">
        <div class="data-value">
            <span class="data-label">Nome:</span> <?php echo $nome; ?>
        </div>
        <div class="data-value">
            <span class="data-label">E-mail:</span> <?php echo $email; ?>
        </div>
        <div class="data-value">
            <span class="data-label">Idade:</span> <?php echo $idade; ?>
        </div>
        <div class="data-value">
            <span class="data-label">Data de Nascimento:</span> <?php echo $data_nascimento; ?>
        </div>
        <div class="data-value">
            <span class="data-label">Senha:</span> <?php echo str_repeat('*', strlen($senha)); // Exibindo a senha como asteriscos ?>
        </div>
        <div class="data-value">
            <span class="data-label">Tecnologias Conhecidas:</span> 
            <?php 
            if (!empty($tecnologias)) {
                echo implode(", ", $tecnologias);
            } else {
                echo "Nenhuma tecnologia selecionada.";
            }
            ?>
        </div>
        <div class="data-value">
            <span class="data-label">Nível de Experiência em HTML:</span> <?php echo $nivel; ?>
        </div>
        <div class="data-value">
            <span class="data-label">Sistema Operacional Principal:</span> <?php echo $sistema_operacional; ?>
        </div>
    </div>
</div>

</body>
</html>