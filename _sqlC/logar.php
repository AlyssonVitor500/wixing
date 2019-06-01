<?php
    include_once 'conexao.php';
    session_start();
    $_SESSION['setor'] = 0;
    if (empty($_POST['senhaTxt']) || empty($_POST['userTxt'])){
        $_SESSION['empty'] = true;
        header("Location: ../index.php");
    }else{
        $user = strtolower($_POST['userTxt']);

     $senha = strtolower($_POST['senhaTxt']);
        $senha = md5($senha);
    
     $sql = $conn->query("SELECT * FROM users WHERE user = '$user' and senha = '$senha'");
    

    if(mysqli_affected_rows($conn) > 0) {
        $_SESSION['logado'] = true;
       
        $setor = null;
        while($dados = $sql->fetch_assoc()){
            $nivel = $dados['nivel'];
            $user = $dados['user'];
         }
         $_SESSION['user'] = $user;
         $_SESSION['nivel'] = $nivel;
        header("Location: ../home.php");
    }else {
       $_SESSION['naoLogado'] = true;
       header("Location: ../index.php");
    }
}
    

   

?>