<?php include 'inc/header.php';?>

<h2>Ver Cliente</h2>

<div class="form-group">
    <label>Nome:</label>
    <input type="text" class="form-control" name="nome" disabled value="<?=$cliente->getnome()?>">
</div>
<div class="form-group">
    <label>Telefone:</label>
    <input type="text" class="form-control" name="telefone" disabled value="<?=$cliente->gettelefone()?>">
</div>
<div class="form-group">
    <label>CPF:</label>
    <input type="text" class="form-control" name="cpf" disabled value="<?=$cliente->getcpf()?>">
</div>
<div class="form-group">
    <label>E-mail:</label>
    <input type="text" class="form-control" name="email" disabled value="<?=$cliente->getemail()?>">
</div>

<a class="btn btn-primary" href="Index.php" >Voltar</a>

<?php include 'inc/footer.php';?>

