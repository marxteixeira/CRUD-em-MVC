<?php $render('header'); ?>

<h2>Editar Usuário</h2>

<form action="<?=$base;?>/usuario/<?=$usuario['id'];?>/editar" method="POST">

<label>
    Nome: <input type="text" name="name" value="<?=$usuario['nome'];?>"><br><br>
</label>

<label>
    Email: <input type="text" name="email" value="<?=$usuario['email'];?>"><br><br>
</label>

<input type="submit" value="Salvar">

</form>
<?php $render('footer'); ?>