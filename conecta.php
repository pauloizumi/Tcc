<?php
//Configuração do Servidor
$dbh = new PDO('mysql:host=localhost;port=3306;dbname=tcc;charset=utf8', 'root', '');
if(!$dbh){ echo 'erro';}
	




//Ação Incluir
if($_POST['acao'] == 'inclusao'){

    $nome= $_POST['cad'];
  
    
    $SQL= "insert INTO colecao (Nome) VALUES ('$nome') ";
    $re= mysql_query($SQL, $dbh);
}



//Ação Listar
if($_POST['acao'] == 'listarcolecao'){

     $SQL = "SELECT * FROM colecao";

     $re = mysql_query($SQL, $dbh);
 
     $num = mysql_num_rows($re);

     if($num > 0){
 
         //Visualizar em Tela
           while($Linha = mysql_fetch_object($re)){
                  echo "<b>Nome:</b> {$Linha->nome} <b><br></b><hr>";
               
           }

      }
      else{
          echo 'nenhum usuário cadastrado.';
      }
}
?>