<?php
if(isset($_POST['disciplina']) and isset($_POST['senha'])){
  
   $disciplina = $_POST['disciplina'];
   $senha = $_POST['senha'];
   
   require_once "../conexao.php";
   $sql = "SELECT * FROM `disciplina` WHERE  `login`= ? ; ";
   $comando = $conexao->prepare($sql);

   $comando->bind_param("s", $disciplina);

   $comando->execute();

   $resultado = $comando->get_result();

   $disciplina = $resultado->fetch_assoc();
   
   if($disciplina){
     
      if(password_verify($senha, $disciplina['senha'])){
         
           session_start();
           
           $_SESSION['disciplina'] = $disciplina;

           header("Location: ../disciplina/index.php");
           
      }else{
          $erro_login = "Senha incorreta";
      }
   }else{
      $erro_login = "Não existe usuário com o login informado";
   }

}
