    <h2> Editar Livro</h2>

<form method="POST" enctype="multipart/form-data" action="LivroController.php?acao=editar&id=<?= $livro['id'] ?>">
    <table border="1" cellpadding="5">
        <tr>
            <td>Título:</td>
            <td><input type="text" name="titulo" value="<?= htmlspecialchars($livro['titulo']) ?>" required></td>
        </tr>
        <tr>
            <td>Autor:</td>
            <td><input type="text" name="autor" value="<?= htmlspecialchars($livro['autor']) ?>" required></td>
        </tr>
        <tr>
            <td>Ano:</td>
            <td><input type="number" name="ano_publicacao" value="<?= $livro['ano_publicacao'] ?>"></td>
        </tr>
        <tr>
            <td>Categoria:</td>
            <td>
                <select name="categoria_id">
                    <option value="">--Selecione--</option>
                    <?php foreach($categorias as $cat): ?>
                        <option value="<?= $cat['id'] ?>" <?= ($cat['id'] == $livro['categoria_id']) ? 'selected' : '' ?>>
                            <?= $cat['nome'] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Disponível:</td>
                <td><input type="checkbox" name="disponibilidade" <?= $livro['disponibilidade'] ?? 'checked'  ?>></td>
            </tr>
            <tr>
                <td>Capa atual:</td>
                <td>
                    <?php 
                    if($livro['capa']): 
                       endif; ?>
                     <img src="<?= $livro['capa'] ?>" width="100"><br>
                    <input type="hidden" name="capa_existente" value="<?= $livro['capa'] ?>">
                    <input type="file" name="capa">
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <button type="submit">Atualizar</button>
                </td>
            </tr>
    </table>
</form>
