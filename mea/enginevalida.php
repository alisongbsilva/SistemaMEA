<?php
session_start();
if (!isset($_SESSION['id'])){
    header ("location: ../login.php");
}
    
    
 function valida($tipo){
     $tipouser = $_SESSION['tipo'];
     if($tipo != $tipouser){
         session_unset();
         $msg = "Você não tem permissão para acessar essa área.";
         header ("location: ../login.php?msg=$msg");
     }
 }
?>