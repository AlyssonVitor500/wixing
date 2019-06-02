<?php 
    include_once 'conexao.php';

    $tipo = isset($_POST['tipo'])?$_POST['tipo']:"";
    $cmd =  "SELECT * FROM users WHERE nivel = '$tipo' ORDER BY user";
    $sql = mysqli_query($conn, $cmd);
 
   
    

        
        while ($dados = $sql->fetch_assoc()) {
           
           $id = $dados['id'];
           $user = mb_convert_case($dados['user'], MB_CASE_TITLE , 'UTF-8');
           $foto = $dados['perfilFoto'];
           $nivel = $dados ['nivel'];
            $foto = "_usersImg/".$foto;
            
           if ($id == 1) {
                echo "
                <tr  >
                    
                    <td> $user </td>
                    <td> Usuário Administrador Master </td>
                    <td colspan='2'><div id='fotoUser' class='container' style='background-image: url($foto)'> </div> </td>
                    
                    
                    
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