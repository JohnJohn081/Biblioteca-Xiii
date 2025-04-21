<?php 
include 'functions.php';
include 'partials/navbar.php';

$livros = [
    ['id' => 1, 'nome' => 'Dom Casmurro', 'autor' => 'Machado de Assis', 'preco' => 29.90, 'img' => 'assets/img/livros/1.jpg'],
    ['id' => 2, 'nome' => '1984', 'autor' => 'George Orwell', 'preco' => 39.90, 'img' => 'assets/img/livros/2.jpg'],
    ['id' => 3, 'nome' => 'A Revolução dos Bichos', 'autor' => 'George Orwell', 'preco' => 24.90, 'img' => 'assets/img/livros/3.jpg'],
    ['id' => 4, 'nome' => 'O Pequeno Príncipe', 'autor' => 'Antoine de Saint-Exupéry', 'preco' => 19.90, 'img' => 'assets/img/livros/4.jpg'],
    ['id' => 5, 'nome' => 'Harry Potter e a Pedra Filosofal', 'autor' => 'J.K. Rowling', 'preco' => 49.90, 'img' => 'assets/img/livros/5.jpg'],
    ['id' => 6, 'nome' => 'O Hobbit', 'autor' => 'J.R.R. Tolkien', 'preco' => 44.90, 'img' => 'assets/img/livros/6.jpg'],
    ['id' => 7, 'nome' => 'Capitães da Areia', 'autor' => 'Jorge Amado', 'preco' => 32.90, 'img' => 'assets/img/livros/7.jpg'],
    ['id' => 8, 'nome' => 'A Culpa é das Estrelas', 'autor' => 'John Green', 'preco' => 35.00, 'img' => 'assets/img/livros/8.jpg'],
    ['id' => 9, 'nome' => 'O Código Da Vinci', 'autor' => 'Dan Brown', 'preco' => 39.00, 'img' => 'assets/img/livros/9.jpg'],
    ['id' => 10, 'nome' => 'Percy Jackson e o Ladrão de Raios', 'autor' => 'Rick Riordan', 'preco' => 42.00, 'img' => 'assets/img/livros/10.jpg'],
    ['id' => 11, 'nome' => 'O Senhor dos Anéis: A Sociedade do Anel', 'autor' => 'J.R.R. Tolkien', 'preco' => 59.90, 'img' => 'assets/img/livros/11.jpg'],
    ['id' => 12, 'nome' => 'O Senhor dos Anéis: As Duas Torres', 'autor' => 'J.R.R. Tolkien', 'preco' => 59.90, 'img' => 'assets/img/livros/12.jpg'],
    ['id' => 13, 'nome' => 'O Senhor dos Anéis: O Retorno do Rei', 'autor' => 'J.R.R. Tolkien', 'preco' => 59.90, 'img' => 'assets/img/livros/13.jpg'],
    ['id' => 14, 'nome' => 'O Alquimista', 'autor' => 'Paulo Coelho', 'preco' => 29.90, 'img' => 'assets/img/livros/14.jpg'],
    ['id' => 15, 'nome' => 'A Menina que Roubava Livros', 'autor' => 'Markus Zusak', 'preco' => 34.90, 'img' => 'assets/img/livros/15.jpg'],
/*    ['id' => 16, 'nome' => 'O Diário de Anne Frank', 'autor' => 'Anne Frank', 'preco' => 27.90, 'img' => 'assets/img/livros/16.jpg'],
    ['id' => 17, 'nome' => 'Orgulho e Preconceito', 'autor' => 'Jane Austen', 'preco' => 24.90, 'img' => 'assets/img/livros/17.jpg'],
    ['id' => 18, 'nome' => 'Cem Anos de Solidão', 'autor' => 'Gabriel García Márquez', 'preco' => 39.90, 'img' => 'assets/img/livros/18.jpg'],
    ['id' => 19, 'nome' => 'A Metamorfose', 'autor' => 'Franz Kafka', 'preco' => 19.90, 'img' => 'assets/img/livros/19.jpg'],
    ['id' => 20, 'nome' => 'O Apanhador no Campo de Centeio', 'autor' => 'J.D. Salinger', 'preco' => 29.90, 'img' => 'assets/img/livros/20.jpg'],
    ['id' => 21, 'nome' => 'O Nome do Vento', 'autor' => 'Patrick Rothfuss', 'preco' => 49.90, 'img' => 'assets/img/livros/21.jpg'],
    ['id' => 22, 'nome' => 'A Guerra dos Tronos', 'autor' => 'George R.R. Martin', 'preco' => 59.90, 'img' => 'assets/img/livros/22.jpg'],
    ['id' => 23, 'nome' => 'O Pequeno Príncipe (Edição Ilustrada)', 'autor' => 'Antoine de Saint-Exupéry', 'preco' => 29.90, 'img' => 'assets/img/livros/23.jpg'],
    ['id' => 24, 'nome' => 'Morte Súbita', 'autor' => 'J.K. Rowling', 'preco' => 44.90, 'img' => 'assets/img/livros/24.jpg'],
    ['id' => 25, 'nome' => 'A Garota no Trem', 'autor' => 'Paula Hawkins', 'preco' => 34.90, 'img' => 'assets/img/livros/25.jpg'],
    ['id' => 26, 'nome' => 'A Sombra do Vento', 'autor' => 'Carlos Ruiz Zafón', 'preco' => 39.90, 'img' => 'assets/img/livros/26.jpg'],
    ['id' => 27, 'nome' => 'O Silmarillion', 'autor' => 'J.R.R. Tolkien', 'preco' => 49.90, 'img' => 'assets/img/livros/27.jpg'],
    ['id' => 28, 'nome' => 'Neuromancer', 'autor' => 'William Gibson', 'preco' => 45.00, 'img' => 'assets/img/livros/28.jpg'],
    ['id' => 29, 'nome' => 'As Crônicas de Nárnia', 'autor' => 'C.S. Lewis', 'preco' => 54.90, 'img' => 'assets/img/livros/29.jpg'],
    ['id' => 30, 'nome' => 'It: A Coisa', 'autor' => 'Stephen King', 'preco' => 64.90, 'img' => 'assets/img/livros/30.jpg']
    */
];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    foreach ($livros as $livro) {
        if ($livro['id'] == $id) {
            adicionarAoCarrinho($livro['id'], $livro['nome'], $livro['autor'], $livro['preco'], $livro['img']);
            break;
        }
    }
    header("Location: carrinho.php");
    exit;
}
?>

<div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); gap: 20px; padding: 2rem;">
    <?php foreach ($livros as $livro): ?>
        <div style="border: 1px solid #ccc; border-radius: 10px; padding: 1rem; text-align: center; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
        <img src="<?= $livro['img'] ?>" alt="<?= $livro['nome'] ?>" style="width: 100%; height: 250px; object-fit: contain; border-radius: 10px; background-color: #f5f5f5;">
        <h3><?= $livro['nome'] ?></h3>
            <p><em><?= $livro['autor'] ?></em></p>
            <p><strong>R$ <?= number_format($livro['preco'], 2, ',', '.') ?></strong></p>
            <form method="post">
                <input type="hidden" name="id" value="<?= $livro['id'] ?>">
                <button type="submit" style="padding: 0.5rem 1rem; background: #4CAF50; color: white; border: none; border-radius: 6px;">Adicionar ao Carrinho</button>
            </form>
        </div>
    <?php endforeach; ?>
</div>

<?php include 'partials/footer.php'; ?>
