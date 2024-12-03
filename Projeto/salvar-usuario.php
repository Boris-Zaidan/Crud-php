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
            //code
            break;
        case'excluir' :
            //code
            break;
    
}
?>

    
        