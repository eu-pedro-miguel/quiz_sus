<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Quiz Sustentabilidade - Formulário</title>
        <link rel="shortcut icon" href="https://raw.githubusercontent.com/eu-pedro-miguel/favicon/main/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="css/estilos.css?v=43">
        <script src="https://kit.fontawesome.com/d41c4332fb.js" crossorigin="anonymous"></script> <!-- Ativando os icons do Font Awesome -->
        <style>
            input[type="radio"] {
                width: auto;
                margin: 0;
                display: inline;
            }

            :is(p, #text-email) {
                display: block;
                margin: auto;
                width: fit-content;
                max-width: 300px;
                font-weight: bold;
            }

            .pergunta label {
                display: flex;
                gap: 10px;
                padding: 0 10px;
                margin: 10px 0;
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
        <div class="layout-quiz">
            <form method="POST" action="valida_quiz.php">
                <div class="layout-top">
                    <a href="index.php" class="btn">
                        <strong>Voltar</strong>
                    </a>
                </div>
                <h2>Quiz: Lixo Eletrônico</h2>
                <label for="email" id="text-email" title="Digite o email">Digite seu e-mail:</label>
                <input type="email" id="email" name="email" placeholder="exemplo@dominio.com.br" required>
                <div class="pergunta">
                    <p>1 - O que é lixo eletrônico?</p>
                    <label>
                        <input type="radio" name="q1" value="1" required>
                        <span>Restos de comida jogados no lixo</span>
                    </label>
                    <label>
                        <input type="radio" name="q1" value="2">
                        <span>Equipamentos eletrônicos descartados</span>
                    </label>
                    <label>
                        <input type="radio" name="q1" value="3">
                        <span>Apenas baterias usadas</span>
                    </label>
                    <label>
                        <input type="radio" name="q1" value="4">
                        <span>Papel usado em impressoras</span>
                    </label>
                </div>
                <div class="pergunta">
                    <p>2 - Por que o descarte correto do lixo eletrônico é importante?</p>
                    <label>
                        <input type="radio" name="q2" value="1" required>
                        <span>Porque ocupa menos espaço</span>
                    </label>
                    <label>
                        <input type="radio" name="q2" value="2">
                        <span>Porque contém substâncias tóxicas</span>
                    </label>
                    <label>
                        <input type="radio" name="q2" value="3">
                        <span>Porque os aparelhos param de funcionar</span>
                    </label>
                    <label>
                        <input type="radio" name="q2" value="4">
                        <span>Porque deixa a casa limpa</span>
                    </label>
                </div>
                <div class="pergunta">
                    <p>3 - Qual dessas opções é a forma correta de lidar com lixo eletrônico?</p>
                    <label>
                        <input type="radio" name="q3" value="1" required>
                        <span>Jogar no lixo comum</span>
                    </label>
                    <label>
                        <input type="radio" name="q3" value="2">
                        <span>Queimar os aparelhos</span>
                    </label>
                    <label>
                        <input type="radio" name="q3" value="3">
                        <span>Levar a pontos de coleta</span>
                    </label>
                    <label>
                        <input type="radio" name="q3" value="4">
                        <span>Enterrar em um terreno baldio</span>
                    </label>
                </div>
                <input type="hidden" name="web" value="1">
                <button type="submit" class="validar">
                    <strong>Enviar</strong>
                </button>
            </form>
        </div>
    </body>
</html>
