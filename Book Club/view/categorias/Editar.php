<h2> Editar Categoria</h2>

<form method="POST" action="CategoriaController.php?acao=editar&id=<?= $categoria['id'] ?>">
    <table border="1" cellpadding="5">
        <tr>
            <td>Nome:</td>
            <td><input type="text" name="nome" value="<?= htmlspecialchars($categoria['nome']) ?>" required></td>
        </tr>
        <tr>
            <td>Descrição:</td>
            <td>
                <textarea name="descricao" rows="3" cols="30"><?= htmlspecialchars($categoria['descricao']) ?></textarea>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <button type="submit">Atualizar</button>
            </td>
        </tr>
    </table>
</form>
