<!DOCTYPE html>
<html lang="pt-br"> <!-- O Browser detecta que a página está em pt-br -->
<head>
    <meta charset="UTF-8"> <!-- Caracteres especiais -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Sustentabilidade</title> <!-- Título da página -->
    <link rel="shortcut icon" href="https://raw.githubusercontent.com/eu-pedro-miguel/favicon/main/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/estilos.css?v=62"> <!-- Conectando o html com o css root -->
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
    <main class="layout-login">
        <form action="valida_login.php" method="post">
            <h2>Preencha os dados</h2>
            <p>
                <label for="usuario" title="Digite o nome de Usuário">Usuário:</label>
            </p>
            <input type="text" id="usuario" name="usuario" minlength="20" maxlength="20" placeholder="Nome de Usuário" required>
            <p>
                <label for="senha" title="Digite a sua senha">Senha:</label>
            </p>
            <div class="caixa-senha">
                <input type="password" id="senha" name="senha" minlength="6" maxlength="6" placeholder="Digite a senha" required>
                <i class="bi bi-eye-fill" id="btn-password"></i>
            </div>
            <input type="hidden" name="web" value="1">
            <button type="submit" class="validar">
                <strong>Entrar</strong>
            </button>
        </form>
    </main>
    <div class="layout-bottom">
        <a href="index.php" class="btn">
            Retornar ao <strong>Início</strong>
        </a>
    </div>
    <script>
        let btn = document.querySelector('#btn-password')
        let password = document.querySelector('#senha')

        btn.addEventListener('click', function(){
            if (password.type === 'password') {
                password.type = 'text'
                btn.classList.remove('bi-eye-fill')
                btn.classList.add('bi-eye-slash-fill')
            } else {
                password.type = 'password'
                btn.classList.remove('bi-eye-slash-fill')
                btn.classList.add('bi-eye-fill')
            }
        })
    </script>
    </body>
</html>