<?php 
include 'functions.php';
include 'partials/navbar.php';

$valor_total = 0;
foreach ($_SESSION['carrinho'] as $item) {
    $valor_total += $item['preco'] * $item['quantidade'];
}

$saldo = $_SESSION['perfil']['saldo'] ?? 150.00;

if ($valor_total > 0 && $saldo >= $valor_total) {
    $_SESSION['perfil']['saldo'] = $saldo - $valor_total;
    limparCarrinho();
    $mensagem = "Compra finalizada com sucesso! 🎉";
} elseif ($valor_total > 0) {
    $mensagem = "Saldo insuficiente para finalizar a compra.";
} else {
    $mensagem = "Seu carrinho está vazio.";
}
?>

<main style="padding: 2rem; text-align: center;">
    <h2><?= $mensagem ?></h2>
    <a href="livros.php" style="margin-top: 2rem; display: inline-block; padding: 1rem 2rem; background: #4CAF50; color: white; border-radius: 8px; text-decoration: none;">Voltar aos Livros</a>
</main>

<?php include 'partials/footer.php'; ?>
