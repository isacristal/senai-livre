<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>login</title>
</head>
<body>
    <header id="logo">
        <img src="img/img/senai.png" alt="logo">

        <nav>
            <a href="index.html">Sair</a>
        </nav>
    </header>

    <main class="inscreva-se">
        <section id="form">

            <h1>Por favor, inscreva-se</h1>
            
            <div id="form-formulario">

                <form action="" method="POST">

                    <div class="form-formulario-nome">
                        <label for="login">Login</label>
                        <input type="text" name="login" id="login" placeholder="Informe seu login" required> 
                    </div>

                    <div class="form-formulario-senha">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" id="senha" placeholder="Informe sua senha" required> 
                    </div>

                    <div class="login">
                        <button type="submit">Enviar</button>
                    </div>
                </form>

                <div class="nao-cadastrado">
                    <a href="cadastro.html"><button type="submit">Ainda não cadastrado? Cadastra-se</button></a>
                </div>

            </div>
        </section>
    </main>
</body>
</html>

<?php
    include("conexao.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        $login = $_POST["login"];
        $senha = $_POST["senha"];

        $sql = "SELECT * FROM usuario WHERE login = :login and senha = :senha";
        $stmt = $conexao->prepare($sql);
        $stmt->bindValue(":login", $login);
        $stmt->bindValue(":senha", $senha);
        $stmt->execute();

        if($stmt->rowCount() > 0){

        }else {
            
        }
    }
?>