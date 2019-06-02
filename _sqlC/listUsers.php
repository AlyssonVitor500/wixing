<?php 
    include_once 'conexao.php';

    $userId = $_SESSION['idUser'];
    $cmd =  "SELECT * FROM users ORDER BY user";
    $sql = mysqli_query($conn, $cmd);
 
    echo "";
    

        
        while ($dados = $sql->fetch_assoc()) {
           
           $id = $dados['id'];
           $user = mb_convert_case($dados['user'], MB_CASE_TITLE , 'UTF-8');
           $foto = $dados['perfilFoto'];
           $nivel = $dados ['nivel'];
            $foto = "_usersImg/".$foto;
            
           if ($id == 1) {
                    if($userId == 1){
                        echo "
                        <tr id='eu' >
                            
                            <td> $user </td>
                            <td> Usuário Administrador Master</td>
                            <td colspan=''><div id='fotoUser' class='container' style='background-image: url($foto)'> </div> </td>
                            <td> Não é Possível Apagar
                            
                            
                        </tr>";
                }else {
                        echo "
                        <tr  >
                            
                            <td> $user </td>
                            <td> Usuário Administrador Master</td>
                            <td colspan=''><div id='fotoUser' class='container' style='background-image: url($foto)'> </div> </td>
                            <td> Não é Possível Apagar
                            
                            
                        </tr>";
                }
           }else if ($id == $userId) {

            echo "
                <tr id='eu' >

                    <td> $user </td>
                    <td> Usuário Administrador </td>
                    <td colspan=''><div id='fotoUser' class='container' style='background-image: url($foto)'> </div> </td>
                    <td> Não é Possível Apagar
                    
                    
                </tr>";

           }else {

           
                    if ($nivel == 1) {
                            echo "
                            <tr  >
                                
                                <td> $user </td>
                                <td> Usuário Administrador </td>
                                <td><div id='fotoUser' class='container' style='background-image: url($foto)'> </div> </td>
                                
                                
                                <td><a href='confirmDellUserList.php?id=$id' class='btn'><i id='del' style='cursor: pointer' title='Apagar' class='far fa-times-circle fa-1x'></i> </a></td>
                            </tr>
                        "; 
                 }else {
                            echo "
                            <tr  >
                                
                                <td> $user </td>
                                <td> Usuário Padrão </td>
                                
                                <td><div id='fotoUser' class='container' style='background-image: url($foto)'> </div> </td>
                                
                                
                                <td><a href='confirmDellUserList.php?id=$id' class='btn'><i id='del' style='cursor: pointer' title='Apagar' class='far fa-times-circle fa-1x'></i> </a></td>
                                
                            </tr>
                        "; 
                }
            }
            
        }


   
    

?>