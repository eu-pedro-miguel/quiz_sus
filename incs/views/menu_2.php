<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Quiz Sustentabilidade - Menu</title>
        <link rel="shortcut icon" href="https://raw.githubusercontent.com/eu-pedro-miguel/favicon/main/favicon.ico" type="image/x-icon">
        <script src="https://kit.fontawesome.com/d41c4332fb.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/estilos.css">
        <style>
            .layout-menu {
                background-color: #fbfff7;
                margin: 120px auto 0;
                border-radius: 20px;
                display: flex;
                width: fit-content;
                padding-inline: 90px;
                flex-direction: column;
                box-shadow: 0 5px 40px 0 rgba(0, 0, 0, 0.2);
                justify-content: center;
            }

            h3 {
                text-align: center;
            }

            .botao {
                text-decoration: none;
                color: #333;
                background-color: #4CAF50;
                padding: 8px ;
                width: fit-content;
                margin: 5px auto;
                border-radius: 8px;
                display: inline-block;
                transition: all 0.3s ease;
                font-weight: bold;
                height: fit-content;
            }

            .botao:hover {
                background-color: #45a049;
                transform: scale(1.05);
            }
        </style>
    </head>
    <body>
        <nav>
            <header> <!-- Cabeçalho -->
                <h1>
                    <a href="index.php">
                        <img class="img_index" src="https://raw.githubusercontent.com/eu-pedro-miguel/favicon/main/logomarca.png" alt="">
                    </a>
                </h1>
            </header>
        </nav>
        <div class="layout-menu">
            <h2>MENU</h2>
            <h3><a href="lista_quiz.php" class="botao">Resultados do QUIZ</a></h3>
            <h3><a href="limpa_quiz.php" class="botao">Limpar Resultados</a></h3>     
            <h3><a href="sair.php" class="botao">Sair</a></h3>
        </div>
    </body>
</html>