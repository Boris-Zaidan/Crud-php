<?php 
switch ($_REQUEST["acao"]) {
    case 'cadastrar':
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $senha = md5($_POST["senha"]); // Hash da senha
        $data_nasc = $_POST["data_nasc"];
        $cidade = $_POST["cidade"];

        $sql = "INSERT INTO usuarios (nome, email, senha, data_nasc, cidade) 
                VALUES ('{$nome}', '{$email}', '{$senha}', '{$data_nasc}', '{$cidade}')";


        $res = $conn->query($sql);
        if ($res === true) {
            print "<script>alert('Cadastrado com sucesso');</script>";
            print "<script>location.href='?page=listar';</script>";
        } else {
            print "<script>alert('Não foi possível cadastrar');</script>";
            print "<script>location.href='?page=listar';</script>";
        }
    break;

    default:
        print "<script>alert('Ação não reconhecida!');</script>";
        print "<script>location.href='?page=listar';</script>";
        break;
        
    case'editar' :
            $id = intval($_REQUEST["id"]); 

            $nome = $conn->real_escape_string($_POST['nome']);
            $email = $conn->real_escape_string($_POST['email']);
            $senha = md5($_POST['senha']);
            $data_nasc = $conn->real_escape_string($_POST['data_nasc']);
            $cidade = $conn->real_escape_string($_POST['cidade']);


            $sql = "UPDATE usuarios 
                    SET nome='{$nome}', 
                        email='{$email}', 
                        senha='{$senha}', 
                        data_nasc='{$data_nasc}', 
                        cidade='{$cidade}' 
                    WHERE idUsuarios={$id}";            


            if ($conn->query($sql) === TRUE) {
                print "<script>alert('Atualizado com sucesso');</script>";
                print "<script>location.href='?page=listar';</script>";
            } else {
                print "<script>alert('Não foi possível Editar');</script>";
                print "<script>location.href='?page=listar';</script>" . $conn->error;
            }
        break;
         case'excluir' :
            $sql = "DELETE FROM usuarios WHERE idUsuarios = " . intval($_REQUEST["id"]);
            if ($conn->query($sql) === TRUE) {
                echo "<script>alert('Usuário deletado com sucesso');</script>";
                echo "<script>location.href='?page=listar';</script>";
            } else {
                echo "<script>alert('Erro ao deletar usuário: " . $conn->error . "');</script>";
            }
            
        break;
                
}
?>

    
        