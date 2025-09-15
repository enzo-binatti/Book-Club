<h1>Catálogo de Livros</h1>
<a href="LivroController.php?acao=criar">Adicionar Livro</a>
<hr>

<?php
// Garante que $livros seja um array, mesmo que vazio
if (!isset($livros) || !is_array($livros)) {
    $livros = [];
}
?>

<?php foreach($livros as $livro): ?>
<div>
    <h3><?= htmlspecialchars($livro['titulo']) ?> (<?= $livro['ano_publicacao'] ?>)</h3>
    <p><b>Autor:</b> <?= htmlspecialchars($livro['autor']) ?></p>
    <p><b>Categoria:</b> <?= htmlspecialchars($livro['categoria'] ?? "Sem categoria") ?></p>
    <p><b>Disponível:</b> <?= $livro['disponibilidade'] ? "Sim" : "Não" ?></p>
    <?php if(!empty($livro['capa'])): ?>
        <img src="<?= htmlspecialchars($livro['capa']) ?>" width="100"><br>
    <?php endif; ?>
    <a href="LivroController.php?acao=editar&id=<?= urlencode($livro['id']) ?>">Editar</a> |
    <a href="LivroController.php?acao=deletar&id=<?= urlencode($livro['id']) ?>" onclick="return confirm('Tem certeza?')">Excluir</a>
</div>
<hr>
<?php endforeach; ?>

<?php if (empty($livros)): ?>
    <p>Nenhum livro encontrado.</p>
<?php endif; ?>