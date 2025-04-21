<?php
session_start();

if (!isset($_SESSION['carrinho'])) {
    $_SESSION['carrinho'] = [];
}

function adicionarAoCarrinho($id, $nome, $autor, $preco, $img) {
    if (!isset($_SESSION['carrinho'])) {
        $_SESSION['carrinho'] = [];
    }

    if (isset($_SESSION['carrinho'][$id])) {
        $_SESSION['carrinho'][$id]['quantidade']++;
    } else {
        $_SESSION['carrinho'][$id] = [
            'nome' => $nome,
            'autor' => $autor,
            'preco' => $preco,
            'quantidade' => 1,
            'img' => $img 
        ];
    }
}


function removerDoCarrinho($id) {
    unset($_SESSION['carrinho'][$id]);
}

function limparCarrinho() {
    $_SESSION['carrinho'] = [];
}
?>
