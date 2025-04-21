<?php 
include 'functions.php';
include 'partials/navbar.php';

if (isset($_GET['remover'])) {
    removerDoCarrinho($_GET['remover']);
    header('Location: carrinho.php');
    exit;
}

$total = 0;
?>

<style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Roboto', sans-serif;
    }

    body {
      background-color: #f5f5f5;
      padding: 20px;
    }

    .carrinho {
      background-color: #fff;
      padding: 20px;
      border-radius: 15px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      max-width: 1100px;
      margin: auto;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }

    th, td {
      padding: 12px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #ecf0f1;
    }

    .produto-img {
      width: 50px;
      height: 70px;
      object-fit: cover;
      border-radius: 5px;
    }

    .remover-btn {
      background-color: #e74c3c;
      color: white;
      border: none;
      padding: 8px 12px;
      border-radius: 5px;
      cursor: pointer;
    }

    .resumo {
      text-align: right;
      margin-top: 10px;
    }

    .resumo p {
      font-size: 18px;
      margin: 5px 0;
    }

    .finalizar {
      background-color: #27ae60;
      color: white;
      padding: 10px 20px;
      font-size: 16px;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      margin-top: 10px;
    }

    .continuar {
      background-color:rgb(0, 132, 255);
      color: white;
      padding: 10px 20px;
      font-size: 16px;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      margin-top: 10px;
    }

    .vazio {
      font-size: 1.2rem;
      color: #666;
      margin-top: 1rem;
    }
</style>


<main class="carrinho">
    <h2 style="margin-bottom: 20px;">🛒 Seu Carrinho</h2>

    <?php if (empty($_SESSION['carrinho'])): ?>
        <p class="vazio">O carrinho está vazio.</p>
    <?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>Imagem</th>
                    <th>Produto</th>
                    <th>Quantidade</th>
                    <th>Preço</th>
                    <th>Total</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($_SESSION['carrinho'] as $id => $item): 
                    $subtotal = $item['preco'] * $item['quantidade'];
                    $total += $subtotal;
                ?>
                <tr>
                    <td><img src="<?= $item['img'] ?? 'https://via.placeholder.com/50x70' ?>" class="produto-img" alt="Livro"></td>
                    <td><?= $item['nome'] ?><br><small>Autor: <?= $item['autor'] ?></small></td>
                    <td><?= $item['quantidade'] ?></td>
                    <td>R$ <?= number_format($item['preco'], 2, ',', '.') ?></td>
                    <td>R$ <?= number_format($subtotal, 2, ',', '.') ?></td>
                    <td><a href="?remover=<?= $id ?>"><button class="remover-btn">Remover</button></a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="resumo">
            <p><strong>Subtotal:</strong> R$ <?= number_format($total, 2, ',', '.') ?></p>
            <p><strong>Total:</strong> R$ <?= number_format($total, 2, ',', '.') ?></p>
            <a href="livros.php"><button class="continuar">Continuar comprando</button></a>
            <a href="finalizar.php"><button class="finalizar">Finalizar Compra</button></a>
        </div>
    <?php endif; ?>
</main>


<?php include 'partials/footer.php'; ?>
