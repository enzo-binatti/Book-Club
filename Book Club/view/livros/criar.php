<h2> Adicionar Livro</h2>

<form method="POST" enctype="multipart/form-data" action="LivroController.php?acao=criar">
    <table border="1" cellpadding="5">
        <tr>
            <td>Título:</td>
            <td><input type="text" name="titulo" required></td>
        </tr>
        <tr>
            <td>Autor:</td>
            <td><input type="text" name="autor" required></td>
        </tr>
        <tr>
            <td>Ano:</td>
            <td><input type="number" name="ano_publicacao"></td>
        </tr>
        <tr>
            <td>Categoria:</td>
            <td>
                <select name="categoria_id">
                    <option value="">--Selecione--</option>
                    <?php foreach($categorias as $cat): ?>
                        <option value="<?= $cat['id'] ?>"><?= $cat['nome'] ?></option>
                    <?php endforeach; ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Disponível:</td>
            <td><input type="checkbox" name="disponibilidade" checked></td>
        </tr>
        <tr>
            <td>Capa:</td>
            <td><input type="file" name="capa"></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <button type="submit">Salvar</button>
            </td>
        </tr>
    </table>
</form>
