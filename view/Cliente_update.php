<?php include 'inc/header.php';?>

<h2>Atualizar Cliente</h2>

<form action="" method="post">

    <div class="form-group">
        <label>Nome:</label>
        <input type="text" class="form-control" name="nome"  value="<?=$cliente->getnome()?>">
    </div>

    <div class="form-group">
        <label>Telefone:</label>
        <input type="number" class="form-control" name="telefone"  value="<?=$cliente->gettelefone()?>">
    </div>
    <div class="form-group">
        <label>CPF:</label>
        <input type="text" class="form-control" name="cpf"  value="<?=$cliente->getcpf()?>">
    </div>
    <div class="form-group">
        <label>E-mail:</label>
        <input type="email" class="form-control" name="email"  value="<?=$cliente->getemail()?>">
    </div>

    



    <button class="btn btn-success" type="submit">Salvar</button>

</form>
<?php include 'inc/footer.php';?>

