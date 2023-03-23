<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro</title>
</head>
<body>
    <header id="logo">

        <img src="img/img/senai.png" alt="logo">

        <nav>
            <a href="index.html">Sair</a>
        </nav>
    
    </header>

    <main id="informacoes-cadastro">
        <section>
            <h1>Cadastre-se</h1>

            <div class="container">
            
                <form action="" method="POST">
            
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" placeholder="Informe seu nome" required>

                    <label for="login">Login</label>
                    <input type="text" name="login" id="login" placeholder="Informe seu login" required>
            
                    <label for="email">E-mail</label>
                    <input type="email" name="email" id="email" placeholder="Informe seu email" required>

                    <label for="senha">Senha</label>
                    <input type="password" name="senha" id="senha" placeholder="Informe sua senha" required>

                    <button type="submit">Enviar</button>
            
                </form>

                <?php
                    include("conexao.php");

                    if ($_SERVER["REQUEST_METHOD"] == "POST"){
                        $nome = $_POST["nome"];
                        $email = $_POST["email"];
                        $login = $_POST["login"];
                        $senha = $_POST["senha"];

                        $sql = "INSERT INTO usuario(nome, email, login, senha) VALUES (:nome, :email, :login, :senha)";
                        $stmt = $conexao->prepare($sql);
                        $stmt->bindValue(":nome", $nome);
                        $stmt->bindValue(":email", $email);
                        $stmt->bindValue(":login", $login);
                        $stmt->bindValue(":senha", $senha);
                        $stmt->execute();

                        if($stmt->rowCount() > 0){
                            echo "Registrado com suceeso";

                        }else {
                            echo "falaha ao registrar o usuário";
                        }
                    }
                ?>
        </section>
    </main>

</body>
</html>