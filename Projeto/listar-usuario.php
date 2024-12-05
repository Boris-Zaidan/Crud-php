<h1>Listar Usuários</h1>
<?php
    $sql = "SELECT * FROM usuarios";
    $res = $conn->query($sql);
    $qtd = $res->num_rows;

    if ($qtd > 0) {
        print "<table class='table table-striped table-bordered table-hover table-container-sm'>
                <tr>
                    <th>#</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Data de Nascimento</th>
                    <th>Cidade</th>
                    <th>Acões</th>
                </tr>";
        
        while ($row = $res->fetch_object()) {
            print "<tr>";
            print "<td>" . $row->idUsuarios . "</td>";
            print "<td>" . $row->nome . "</td>";
            print "<td>" . $row->email . "</td>";
            print "<td>" . $row->data_nasc . "</td>";
            print "<td>" . $row->cidade . "</td>";
            print "<td class= 'd-flex flex-column gap-2 container-sm-d-flex flex-sm-row'>
                    <button onclick=\"location.href='?page=editar&id=" . $row->idUsuarios . "';\" class='btn btn-success btn-sm'>Editar</button>
                    <button onclick=\"if(confirm('Tem certeza que deseja excluir?')) { location.href='?page=salvar&acao=excluir&id=" . $row->idUsuarios . "'; } else { return false; }\" class='btn btn-danger btn-sm'>Excluir</button>
                </td>";

            print "</tr>";
        }
        print "</table>";
    } else {

        print "<p class='alert alert-danger'>Não encontrou resultados</p>";
    }
?>