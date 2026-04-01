function carregarProdutos() {
    fetch("progIA.php?listar=1")
    .then(r => r.json())
    .then(dados => {
        let tabela = document.getElementById("tabela");
        tabela.innerHTML = "";

        dados.forEach(p => {
            tabela.innerHTML += `
            <tr>
                <td>${p.id}</td>
                <td>${p.nome}</td>
                <td>${p.preco}</td>
                <td>${p.quantidade}</td>
                <td><button onclick="vender(${p.id})">Vender</button></td>
            </tr>`;
        });
    });
}

function cadastrar() {
    let form = new FormData(document.getElementById("form"));
    form.append("acao", "cadastrar");

    fetch("progIA.php", {
        method: "POST",
        body: form
    }).then(() => {
        carregarProdutos();
    });
}

function vender(id) {
    let qtd = prompt("Quantidade:");

    let form = new FormData();
    form.append("acao", "vender");
    form.append("produto_id", id);
    form.append("quantidade", qtd);

    fetch("progIA.php", {
        method: "POST",
        body: form
    }).then(() => carregarProdutos());
}