<?php
include_once "header.php";
$user = $_POST["user"];
$pass = $_POST["pass"];
 include("bd.php");


//if(empty($user && $pass)){
if (!empty($user) && empty($pass)){ 
echo "<div class='alert alert-danger'>
    O<strong> usuário</strong> ou <strong> senha</strong> está incorreto.
  </div>";



}

elseif($valida[$user]==$pass){
setcookie("logado", "1");
 echo "<script>location.href='cadastro.php'</script>";
 }
 else{

 echo "<div class='alert alert-warning'>
    O<strong> usuário</strong> ou <strong> senha</strong> está incorreto.
  </div>";

 }
?>
