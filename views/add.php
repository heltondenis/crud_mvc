<h3>Adicionar</h3>

<form method="POST" action="<?php echo BASE_URL; ?>contatos/addSave">
    
    Nome: <br/>
    <input type="text" name="nome" />
    <br/><br/>
    E-mail: <br/>
    <input type="email" name="email" />
    <br/>
    <input type="submit" value="Cadastrar" />
</form>