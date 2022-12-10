<?php
session_start();
print_r($_POST);

include "dataBase.php";

if(isset($_POST['submit'])){
     $email=$_POST['email'];
     $senha=md5($_POST['senha']);
     $sql= "SELECT  id, nome, email
     FROM usuario
     WHERE
        email='$email' AND senha='$senha'";
      echo $sql;
      //var_dump($_POST);
     
     $resultado=$con->query($sql);
     //var_dump($resultado);   

     if($resultado){
      if($resultado->num_rows>0){
       
       $user=$resultado->fetch_array();
        
        $_SESSION['user']=$user;
        
        $_SESSION['msg']="Sucesso!";
      }
     }else{
     
        $_SESSION['msg']="Falha!";
    }  
}   
 
header("Location: index.php");
?>


