<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Quiz Sustentabilidade - Você não está logado.</title>
        <link rel="shortcut icon" href="https://raw.githubusercontent.com/eu-pedro-miguel/favicon/main/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/estilos.css">
        <style> 
            .botao {
                text-decoration: none;
                color: #333;
                background-color: #4CAF50;
                padding: 8px ;
                width: auto;
                border-radius: 8px;
                display: inline-block;
                transition: all 0.3s ease;
                font-weight: bold;
            }

            .botao:hover {
                background-color: #45a049;
                transform: scale(1.05);
            }

            .layout-menu-nao-respondido {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                height: 88dvh;
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
        <div class="layout-menu-nao-respondido">
            <h2>Você não está logado</h2>
            <a href="login.php" class="botao">Login</a>
        </div>
    </body>
</html>