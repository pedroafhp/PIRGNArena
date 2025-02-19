<?php
namespace PHP\Modelo\DAO;
require_once('Conexao.php');
use PHP\Modelo\DAO\Conexao;
 
class Login {
    public function loginPessoa(Conexao $conexao, string $cpf) {
        try {
            $conn = $conexao->conectar();
            $sql  = "select cpf from Cliente where cpf = '$cpf'";
            $result = mysqli_query($conn,$sql);
            while($dados = mysqli_fetch_Array($result))
            {
               
                if($dados['cpf'] == $cpf && $dados['tipo'] == 1){
                    header('Location: ..\Telas\MenuCliente.php');
                }else if($dados['cpf'] == $cpf && $dados['tipo'] == 2){
                    header('Location: ..\Telas\MenuGerente.php');
                }
            }
            return false;
 
            mysqli_close($conn);
        } catch (Exception $erro) {
            echo "Erro: " . $erro->getMessage();
        }
    }
}
?>