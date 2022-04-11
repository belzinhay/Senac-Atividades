<?php session_start();

$login = $_POST["login"];
$senha = md5($_POST["senha"]);

include_once 'conexao.php';

$sql = "select * from usuario where login = '" .$login. "' and senha = '" .$senha."'";

$result = mysqli_query($con,$sql);

if(mysqli_num_rows($result)==1){    

    $_row = mysqli_fetch_array($result); 

    $_SESSION["login"] = $row["login"];    
    $_SESSION["perfil"] = $row ["perfil"];    
    $_SESSION["Tempo"] = time(); 

    //guarda o momento exato do login        
    header("location:painel.php");
}else{
    $msg = "Login ou Senha Invalidos!";
    header("location:index.php?msg=".$msg);
}
?>