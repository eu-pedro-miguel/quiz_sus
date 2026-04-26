<!-- Este Arquivo apresenta boas práticas com indentação, comentários e a ordem semântica do HTML -->
<!DOCTYPE html>
<html lang="pt-br"> <!-- O Browser detecta que a página está em pt-br -->
<head>
    <meta charset="UTF-8"> <!-- Caracteres especiais -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Sustentabilidade</title> <!-- Título da página -->
    <link rel="shortcut icon" href="https://raw.githubusercontent.com/eu-pedro-miguel/favicon/main/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/estilos.css?v=66"> <!-- Conectando o html com o css root -->
    <script src="https://kit.fontawesome.com/d41c4332fb.js" crossorigin="anonymous"></script> <!-- Ativando os icons do Font Awesome -->
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
      <main> <!-- Principal -->
            <h2>Escolha uma das opções abaixo:</h2>
            <section class="layout"> <!-- Caixa das colunas e cards -->
                <a href="login.php"> <!-- Link externo -->
                  <article class="layout-img" title="Professores"> <!-- Porta para acessar o login dos professores -->
                        <img class="img_index" src="https://www.gov.br/pt-br/noticias/educacao-e-pesquisa/2022/11/mestrado-em-letras-abre-590-vagas-em-todo-o-pais/capes.jpeg/@@images/f0b6ef35-d3b5-4482-b9ae-6dd3c28f7b4d.jpeg" alt="Professores"> <!-- Indicação Ilustrativa do card Professor -->
                        <div class="img-content"> <!-- Conteúdo escrito com o título do card -->
                              <h3><i class="fa-solid fa-book-open-reader"></i>&nbsp;Login do Professor</h3>
                        </div>
                  </article>
                  </a>
                  <a href="quiz.php"> <!-- Link externo -->
                  <article class="layout-img" title="Alunos"> <!-- Porta para acessar o login dos alunos -->
                        <img class="img_index" src="https://metodosupera.com.br/wp-content/uploads/2022/07/porque-escrever-te-ajuda-a-ser-uma-pessoa-melhor-supera-ginastica-para-o-cerebro-3.jpg" alt="Alunos"> <!-- Indicação Ilustrativa do card Aluno -->
                        <div class="img-content"> <!-- Conteúdo escrito com o título do card -->
                              <h3><i class="fa-solid fa-file-lines"></i>&nbsp;Quiz Sustentabilidade</h3>
                        </div>
                  </article>
                  </a>
            </section>
            <div class="layout-obs"> <!-- Layout das observações -->
                  <h4 id="obs"><i class="obs-icon bi bi-caret-down-fill"></i>Observações</h4>
                  <p><strong>*</strong>Para realizar o login do Professor clique/toque na imagem com a escrita <i>"Login do Professor"</i></p>
                  <p><strong>*</strong>Para realizar o Quiz Sustentabilidade clique/toque na imagem com a escrita <i>"Quiz Sustentabilidade"</i></p>
            </div>
      </main>
    <script>
        let btn_obs = document.querySelector('#obs')
        let icon_obs = document.querySelector('.obs-icon')
        let p = document.querySelectorAll('p')

        btn_obs.addEventListener('click', function() {
            p.forEach(function(p) {
                p.classList.toggle('obs-sumir')
            })

            if (icon_obs.classList.contains('bi-caret-down-fill')) {
                icon_obs.classList.replace('bi-caret-down-fill', 'bi-caret-up-fill')
            } else {
                icon_obs.classList.replace('bi-caret-up-fill', 'bi-caret-down-fill')
            }
        })
    </script>
</body>
</html>