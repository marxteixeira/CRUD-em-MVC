<?php $render('header'); ?>

<h2>Adicionar novo Usuário</h2>

<form action="<?=$base;?>/novo" method="POST">

<label>
    Nome: <input type="text" name="name" id=""><br><br>
</label>

<label>
    Email: <input type="email" name="email" id=""><br><br>
</label>

<input type="submit" value="Adicionar">

</form>
<?php $render('footer'); ?>