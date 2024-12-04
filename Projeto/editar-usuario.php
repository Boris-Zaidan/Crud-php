<h1>Editar Usuário</h1>
<?php
$id = intval($_REQUEST["id"]);
$sql = "SELECT * FROM usuarios WHERE idUsuarios = $id";
$res = $conn->query($sql);
$row = $res->fetch_object();
?>

<div class="container-sm">
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->idUsuarios; ?>">
    
    <div class="mb-3 form-label">
        <label>Nome</label>
        <input type="text" name="nome" value="<?php print $row->nome; ?>" class="form-control">
    </div>
    <div class="mb-3 form-label">
        <label>E-mail</label>
        <input type="email" name="email" value="<?php print $row->email; ?>" class="form-control">
    </div>
    <div class="mb-3 form-label">
        <label>Senha</label>
        <input type="password" name="senha" class="form-control" required>
    </div>
    <div class="mb-3 form-label">
        <label>Data De Nascimento</label>
        <input type="date" name="data_nasc" value="<?php print $row->data_nasc; ?>" class="form-control">
    </div>
    <div class="mb-3 form-label">
        <label>Cidade</label>
        <input type="text" name="cidade" value="<?php print $row->cidade; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-secondary">Atualizar</button>
    </div>
</div>
</form>
