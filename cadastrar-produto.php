<h1>Cadastrar Produto</h1>
<form action="?page=salvar-produto" method="POST">
    <input type="hidden" name="acao" value="cadastrar">
    <div class="mb-3">
        <label>Marca do Veículo</label>
        <select name="marca_id_marca" class="form-control" required>
            <option value="">- Selecione a Marca -</option>
            <?php
            // Código descomentado para buscar os produtos do banco de dados e preencher o select
            $sql = "SELECT * FROM marca ORDER BY nome_marca ASC";
            $res = $conn->query($sql);

            // Verifica se encontrou algum produto e cria as opções do select
            if ($res->num_rows > 0) {
                // Loop para criar uma <option> para cada marca encontrada
                while ($row = $res->fetch_object()) {
                    print "<option value='" . $row->id_produto . "'>" . $row->nome_produto . "</option>";
                }
            } else {
                print "<option>Nenhum produto cadastrado</option>";
            }
            ?>
        </select>
    </div>
    <div class="mb-3">
        <label>Nome do produto</label>
        <input type="text" name="nome_produto" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Receita</label>
        <input type="number" step="0.01" name="receita_produto" class="form-control">
    </div>
    <div class="mb-3">
        <label>Ano</label>
        <input type="number" name="ano_produto" class="form-control">
    </div>
    <div class="mb-3">
        <label>Código</label>
        <input type="text" name="codigo_produto" class="form-control" required>
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>