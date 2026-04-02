<h1>Editar fornecedor</h1>
<?php
$sql = "SELECT * FROM fornecedor WHERE id_fornecedor = " . $_REQUEST["id"];
$res = $conn->query($sql);
$row_fornecedor = $res->fetch_object();
?>
<h1>Editar Produto</h1>
<form action="?page=salvar-produto" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row_produto->id_produto; ?>">

    <div class="mb-3">
        <label>Marca do Veículo</label>
        <select name="marca_id_marca" class="form-control" required>
            <option>-Selecione a Marca-</option>
            <?php
            $sql_marcas = "SELECT * FROM marca";
            $res_marcas = $conn->query($sql_marcas);
            while ($row_fornecedor = $res_fornecedores->fetch_object()) {
                // Adiciona o atributo 'selected' se o ID da marca for igual ao do modelo
                $selected = ($row_fornecedor->id_fornecedor == $row_fornecedor->fornecedor_id_fornecedor) ? 'selected' : '';
                print "<option value='" . $row_fornecedor->id_fornecedor . "' " . $selected . ">" . $row_fornecedor->nome_fornecedor . "</option>";
            }
            ?>
        </select>
    </div>
    <div class="mb-3">
        <label>Nome do produto</label>
        <input type="text" name="nome_produto" value="<?php print $row_produto->nome_produto; ?>" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Código</label>
        <input type="text" name="codigo_produto" value="<?php print $row_produto->codigo_produto; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>Ano</label>
        <input type="number" name="ano_produto" value="<?php print $row_produto->ano_produto; ?>" class="form-control">
    </div>
    <div class="mb-3">
        <label>receita</label>
        <input type="text" name="receita_produto" value="<?php print $row_produto->receita_produto; ?>" class="form-control" required>
    </div>
    <div>
        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
    </div>
</form>