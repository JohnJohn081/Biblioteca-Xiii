<?php 
if (!isset($_SESSION['perfil'])) {
    $_SESSION['perfil'] = [
        'nome' => 'John Maclebio',
        'saldo' => 150.00,
        'foto' => 'assets/img/perfil.jpg'
    ];
}
$perfil = $_SESSION['perfil'];
?>

<nav style="display: flex; justify-content: space-between; align-items: center; background: #333; padding: 1rem 2rem; color: white;">
    <div>
        <a href="index.php" style="color: white; text-decoration: none; margin-right: 1rem;">🏠 Início</a>
        <a href="livros.php" style="color: white; text-decoration: none; margin-right: 1rem;">📚 Livros</a>
        <a href="carrinho.php" style="color: white; text-decoration: none; margin-right: 1rem;">🛒 Carrinho</a>
        <a href="melhores.php" style="color: white; text-decoration: none;">⭐ Melhores Livros</a>
    </div>
    <div style="display: flex; align-items: center;">
        <img src="<?= $perfil['foto'] ?>" alt="Perfil" style="width: 40px; height: 40px; border-radius: 50%; margin-right: 10px; object-fit: cover;">
        <div>
            <strong><?= $perfil['nome'] ?></strong><br>
            <small>Saldo: R$ <?= number_format($perfil['saldo'], 2, ',', '.') ?></small>
        </div>
    </div>
</nav>
