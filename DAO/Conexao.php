<?php
    namespace PHP\Modelo\DAO;
   
    class Conexao{
        function conectar(){
        try{
           
            $conn = mysqli_connect('localhost','root','','RGN');
            if($conn){
                echo "<br>";
                    return $conn;
                }
                echo "<br>Algo deu errado!";    
        }
        catch(Except $erro)
        {
            return "Algo deu errado!<br><br>".$erro;
        }//fim do conectar
        }
    }//fim da classe
?> 