<?php
    namespace PHP\Modelo\Tela;
    require_once('..\DAO\Excluir.php');
    require_once('..\DAO\Conexao.php');
    use PHP\Modelo\DAO\Conexao;
    use PHP\Modelo\DAO\Excluir;
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">  
    <title>Excluir Cliente</title>
</head>
<body>
    <form method="POST">
        <label>Informe o CPF: </label>
        <input type="text" name="tCpf"/>
        <button type="submit">Excluir
            <?php
                $conexao = new Conexao();
                if(isset($_POST['tCpf'])){
                    $cpf = $_POST['tCpf'];
                }  
            ?>
          </button>
    </form>
    <?php
        if(isset($_POST['tCpf'])){
            $excluir = new Excluir();
            echo $excluir->excluirCliente($conexao,$cpf);
        }else{
            echo "";
        }
    ?>
</body><br><br>
<a href="TelaPrincipal.html"> <button>Voltar</button></a>
</html>