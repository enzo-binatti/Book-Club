<h2> Adicionar Categoria</h2>

<form method="POST" action="CategoriaController.php?acao=criar">
    <table border="1" cellpadding="5">
        <tr>
            <td>Nome:</td>
            <td><input type="text" name="nome" required></td>
        </tr>
        <tr>
            <td>Descrição:</td>
            <td><textarea name="descricao" rows="3" cols="30"></textarea></td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <button type="submit">Salvar</button>
            </td>
        </tr>
    </table>
</form>
