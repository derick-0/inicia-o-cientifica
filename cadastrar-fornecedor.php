<h1>Cadastrar Fornecedor</h1>
<form action="?page=salvar-fornecedor" method="POST">

    <!-- CORREÇÃO: trocado 'values' por 'value' -->
    <input type="hidden" name="acao" value="cadastrar">

    <div class="mb-3">
        <label for="nome_fornecedor">Nome</label>
        <input type="text" name="nome_fornecedor" id="nome_fornecedor" class="form-control" required>
    </div>

    <!-- CAMPO CNPJ ADICIONADO -->
    <div class="mb-3">
        <label for="cnpj_fornecedor">CNPJ</label>
        <input type="text" name="cnpj_fornecedor" id="cnpj_fornecedor" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="email_fornecedor">E-mail</label>
        <input type="email" name="email_fornecedor" id="email_fornecedor" class="form-control" required>
    </div>

    <div class="mb-3">
        <label for="telefone_fornecedor">Telefone</label>
        <input type="text" name="telefone_fornecedor" id="telefone_fornecedor" class="form-control">
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>