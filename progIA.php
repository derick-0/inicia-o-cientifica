<?php
header("Content-Type: application/json");

$conn = new mysqli("localhost", "root", "", "farmacia");

if ($conn->connect_error) {
    echo json_encode(["erro" => "Erro de conexão"]);
    exit;
}

// LISTAR
if (isset($_GET['listar'])) {
    $res = $conn->query("SELECT * FROM produtos");
    $dados = [];

    while ($row = $res->fetch_assoc()) {
        $dados[] = $row;
    }

    echo json_encode($dados);
    exit;
}

// CADASTRAR
if ($_POST['acao'] == "cadastrar") {
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];

    $conn->query("INSERT INTO produtos (nome, descricao, preco, quantidade)
                  VALUES ('$nome','$descricao','$preco','$quantidade')");

    echo json_encode(["ok" => true]);
    exit;
}

// VENDER
if ($_POST['acao'] == "vender") {
    $id = $_POST['produto_id'];
    $qtd = $_POST['quantidade'];

    $conn->query("INSERT INTO vendas (produto_id, quantidade)
                  VALUES ($id, $qtd)");

    $conn->query("UPDATE produtos SET quantidade = quantidade - $qtd WHERE id = $id");

    echo json_encode(["ok" => true]);
    exit;
}
