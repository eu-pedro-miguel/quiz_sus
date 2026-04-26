<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Quiz Sustentabilidade - Dados Maliciosos</title>
        <link rel="shortcut icon" href="https://raw.githubusercontent.com/eu-pedro-miguel/favicon/main/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/estilos.css">
        <style>
            .container {
                background: linear-gradient(to right, #909090, #808080, #757575);
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                min-height: calc(100vh - 11.5dvh);
            }

            @media screen and (max-width: 470px) {
                .container {
                    background: linear-gradient(to right, #909090, #808080, #757575);
                    display: flex;
                    flex-direction: column;
                    align-items: center;
                    justify-content: center;
                    min-height: calc(100vh - 6dvh);
                }
            }

            .container > h2 {
                font-size: 30px;
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
        <div class="container">
            <h2>Dados maliciosos não são permitidos!</h2>
            <a href="login.php" class="btn">Retornar ao Login</a>
        </div>
    </body>
</html>