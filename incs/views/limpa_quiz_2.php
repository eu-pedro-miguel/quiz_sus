<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Quiz Sustentabilidade - Resultados do Quiz</title>
  <link rel="shortcut icon" href="https://raw.githubusercontent.com/eu-pedro-miguel/favicon/main/favicon.ico" type="image/x-icon"> <!-- Favicon hospedado no GitHub -->
  <link rel="stylesheet" href="css/estilos.css">
  <meta http-equiv="Refresh" content="10">
  <style> /* CSS Interno */
        a { /* Estilização de HiperLink apenas nesse arquivo */
            text-decoration: none; /* Remove o traço */
            display: block; /* Largura 100% da ViewPort do Browser */
            width: fit-content; /* Torna a largura apenas o contéudo preenchido */
            margin: 0 auto; /* Espaço externo auto-preenchido na largura e nulo na altura */
        }

        table {
            margin: 0 auto; /* Espaço externo auto-preenchido na largura e nulo na altura */
            width: 70%; /* Largura 70% do Pai(body no caso) */
        }

        p {
            text-align: center; /* O CONTEÚDO da tag a centralizado horizontal */
        }

        th, td { /* Colunas e cabeçalho da table centralizados e espaço interno */
            padding: 4px;
            text-align: center;
        }

        td { /* Bg-color da coluna */
            background-color: #ebebeb;
        }

        .email { /* Largura máxima de 200px, white-space: obriga a não pular linha, scrollbar do texto é escondido, text-overflow faz aparecer ...*/
            max-width: 200px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        img { /* imagem configurada, (corner-shape é uma nova feature do CSS que torna um complemento de border-radius) ;*/
            width: 100%;
            border-radius: 120px;
            corner-shape: round;
            max-width: 20px;
            min-width: 10px;
        }

        /* media-quires adicionada para responsividade */
        @media (max-width: 768px) { 
            table {
                width: 100%;
            }

            th, td {
                padding: 2px;
                font-size: 0.85rem;
            }

            img {
                max-width: 20px;
                min-width: 8px;
            }

            .email {
                max-width: 80px;
            }
        }

        /* media-quires adicionada para responsividade em resoluções pequenas */
        @media (max-width: 480px) {
            th, td {
                padding: 1px;
                font-size: 0.55rem;
            }

            img {
                max-width: 8px;
                min-width: 6px;
            }

            .email {
                max-width: 60px;
            }
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
  <h2>Resultados do Quiz</h2>
  <p>Data: <?php echo date('d/m/Y'); ?></p>
