<?php
    namespace PHP\Modelo\Telas;
    require_once('..\Cliente.php');
    require_once('..\DAO\Conexao.php');
    require_once('..\DAO\Inserir.php');
    use PHP\Modelo\Cliente;
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Inserir;
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
            padding: 0;
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
        background-color: #fff;
        color: white;
        border: none;
        border-radius: 4px;
        padding: 10px;
        width: 100%;
    }
    .cor-button:hover {
            background-color: #2a3c38;
        }


    .formularioCadastro{
        margin-left: 40%;
        margin-right: 40%;
        padding: 0px;

    }

    .mb-3{
        color: white;
    }

    .else{
        color: white;
    }
    </style>
</head>
<body>
<header>
</body>
</html>

<!DOCTYPE html>
<html lang="PT-Br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>

    <form class="formularioCadastro" method="POST">
    <div class="mb-3">
        <label for="lCpf" class="form-label">CPF</label>
        <input type="text" class="form-control" id="tCpf" name="tCpf" placeholder="000.000.000-00">
    </div>
    <div class="mb-3">
        <label for="lNome" class="form-label">Nome</label>
        <input type="text" class="form-control" id="tNome" name="tNome" placeholder="Informe seu nome">
    </div>
    <div class="mb-3">
        <label for="lNomeSocial" class="form-label">Nome Social</label>
        <input type="text" class="form-control" id="tNomeSocial" name="tNomeSocial" placeholder="(Opcional)">
    </div>   
    <div class="mb-3">
        <label for="lDtaNascimento" class="form-label">Data de Nascimento</label>
        <input type="text" class="form-control" id="tDtaNascimento" name="tDtaNascimento" placeholder="01/01/1990">
    </div>
    <div class="mb-3">
        <label for="lTelefone" class="form-label">Telefone</label>
        <input type="text" class="form-control" id="tTelefone" name="tTelefone" placeholder="(xx) xxxxx-xxxx">
    </div>
    <div class="mb-3">
    <label for="lEmail" class="form-label">Email</label>
    <input type="text" class="form-control" id="tEmail" name= "tEmail" placeholder="usuario@gmail.com">
    </div>
    <div class="mb-3">
    <label for="lSenha" class="form-label">Senha</label>
    <input type="text" class="form-control" id="tSenha" name= "tSenha" placeholder="letras, números e caracteres">
    </div>
    <div class="mb-3">
    <label for="lSenha" class="form-label">Confirme a Senha</label>
    <input type="text" class="form-control" id="tSenha" name= "tSenha" placeholder="Confirme sua senha">
    </div>
    <div class="mb-3">
        <label for="lEndereco" class="form-label">Endereço</label>
        <input type="text" class="form-control" id="tEndereco" name="tEndereco" placeholder="Av. Senador Vergueiro, 40">
    </div>
    <div class="mb-3">
        <label for="lGenero" class="form-label">Genero</label>
        <input type="text" class="form-control" id="tGenero" name="tGenero" placeholder="Informe seu gênero">
    </div>
 
    <button type="submit" class="btn btn-success">Cadastrar</button>
    <button type="play-button"  class="btn btn-danger"><a href="TelaPrincipal.html">Voltar</a></button>
        <?php
            $conexao = new Conexao();//conectar no banco

            if(isset($_POST['tCpf']) && isset($_POST['tCpf']) == 0){
                $cpf = $_POST['tCpf'];
                $nome = $_POST['tNome'];
                $nomeSocial = $_POST['tNomeSocial'];
                $dtaNascimento = $_POST['tDtaNascimento'];
                $telefone = $_POST['tTelefone'];
                $email = $_POST['tEmail'];
                $senha = $_POST['tSenha'];
                $endereco = $_POST['tEndereco'];
                $genero = $_POST['tGenero'];
                //Instaciar
                $inserir = new Inserir();
                echo $inserir->cadastrarCliente($conexao,$cpf,$nome,$nomeSocial,$dtaNascimento,$telefone,$email,$senha,$endereco,$genero);
            }else{
                echo "<br><br>Preencha os campos!";
            }
        ?>
    </button>
    </form>
</body>
</html>
 