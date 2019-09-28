<?php include 'inc/header.php';?>

<h2>Novo Cliente</h2>

<form action="" method="post">

    <div class="form-group">
        <label>Nome:</label>
        <input type="text" placeholder="Favor inserir seu nome" class="form-control" name="nome"   value="" required  >
    </div>
    <div class="form-group">
        <label>Telefone:</label>
        <input type="number" placeholder="(31)999999999" class="form-control" name="telefone"   value="" required>
    </div>
    <div class="form-group">
        <label>CPF:</label>
        <input  class="form-control" placeholder="Favor inserir seu CPF aqui" type="number" name="cpf"   value="" required>
    </div>
    <div class="form-group">
        <label>E-mail:</label>
        <input type="email" class="form-control" placeholder="Favor inserir seu e-mail aqui" name="email"   value="" required>
    </div>


    <button class="btn btn-success"  type="submit">Confirmar</button>

</form>
<?php include 'inc/footer.php';?>

