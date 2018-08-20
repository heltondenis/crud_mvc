<table border="1" width="100%"> 
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>E-MAIL</th>
            <th>AÇÕES</th>
        </tr>
    <tbody>
        <?php foreach ($lista as $linha): ?>
        <tr>
            <td><?php echo $linha['id']; ?></td>
            <td><?php echo $linha['nome']; ?></td>
            <td><?php echo $linha['email']; ?></td>
            <td>Excluir/Editar</td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
