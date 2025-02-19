<?php
    namespace PHP\Modelo\Tela;
    require_once('..\DAO\Login.php');
    require_once('..\DAO\Conexao.php');
    require_once('..\DAO\Consultar.php');
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Login;
    use PHP\Modelo\DAO\Consultar;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RGN Arena</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            text-align: center;
            background-image: url(../Imagens/estadio3.jpeg);
            background-position: center;
            background-size: cover;
        }
        header {
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
       
        nav a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }
        .hero {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 50px;
            
            
            background-position: center;
            color:#3c5148;
            height: 530px;
        }
        .login-container {
            background-color: #fff;
            padding: 15px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #3c5148;
        }
        .login-container input {
            width: 90%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .login-container button {
            width: 100%;
            padding: 10px;
            color:#3c5148;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
 
        .button-cor {
        color: white;
        background-color: black;
        border: 2px solid #3c5148;
        padding: 5px 10px; /
        text-decoration: none;
        border-radius: 5px;
        }
        .cor-button {
        background-color: #000;
        color: white;
        border: none;
        border-radius: 4px;
        padding: 10px;
        width: 100%;
    }
    .cor-button:hover {
            background-color: #2a3c38;
        }
    </style>
</head>
<body>
<header>
        <img src="" alt="">
        <nav>
        <a href="TelaPrincipal.html" class="button-cor">Inicio</a> <a href="CadastrarCliente.php" class="button-cor">Cadastre-se</a> <a href="ConsultarCliente.php" class="button-cor">Consultar Cadastro</a> <a href="AtualizarCliente.php" class="button-cor">Atualizar Cadastro</a> <a href="ExcluirCliente.php" class="button-cor">Excluir Cadastro</a>
        </nav>
    </header>
    <section class="hero">
    <div class="login-container">
        <h2>Login</h2>
        <form  method="POST">
            <input type="text" name="tCpf" placeholder="Digite seu CPF" required>
            <input type="text" name="tSenha" placeholder="Digite sua senha" required>
            <button href="TelaPrincipal.html" type="submit" class="cor-button">Entrar</button><br>
                <?php
                $msg = "";
                if(isset($_POST['tCpf'])){
                    $msg = "falso";
                    $conexao = new Conexao();  
                    $consultar = new Consultar();
                    $acessar   = new Login();
                    $cCpf = $consultar->consultarCPF($conexao, $_POST['tCpf']);
                    $cSenha = $consultar->consultarSenha($conexao, $_POST['tSenha']);
                    if($cCpf == true and $cSenha == true){
                        header('location:TelaPrincipal.html');
                    }else{
                        $msg = "verdadeiro";
                    }
                }
            ?>
            <?php if($msg == "verdadeiro"){ echo "E-mail e/ou senha inválidos!"; } ?>
        </form>
    <?php
        if(isset($_POST['tCpf'])){
            echo $acessar->loginPessoa($conexao,$cCpf);
        }else{
            return "Preencha os campos vazios!";
        }
    ?>
   </div>
    </section>
   
 
</body>
</html>