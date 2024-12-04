<h1>Novo Usuário</h1>
<div class="container-sm">
<form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3 form-label">
        <label>Nome</label>
        <input type="text"  name="nome" class="form-control" require>
    </div>
    <div class="mb-3 form-label">
        <label>E-mail</label>
        <input type="email"  name="email" class="form-control" require>
    </div>
    <div class="mb-3 form-label">
        <label>Senha</label>
        <input type="password"  name="senha" class="form-control" require>
    </div>
    <div class="mb-3 form-label">
        <label>Data De Nascimento</label>
        <input type="date"  name="data_nasc" class="form-control" require>
    </div>
    <div class="mb-3 form-label">
        <label>Cidade</label>
        <input type="text"  name="cidade" class="form-control" require>
    </div>
    <div class="mb-3">
       <button type="submit" class="btn  btn-secondary">
        Enviar
       </button>
    </div>
    </div>
</form>