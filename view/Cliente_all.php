<?php include 'inc/header.php';?>

<?php
if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<a class="btn btn-info" href="?classe=Cliente&acao=create" style="float:right">➕ Novo Cliente</a>

<br>
<br>



<table class="table">



    <thead>
    <tr>
        
        <th>Nome: 🗒️</th>
        <th>Telefone: 📱</th>
        <th>CPF: ✏️</th>
        <th>E-mail: 📧</th>
        <th>Ação: 🎮</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($clientes as $cliente){ ?>
        <tr title="<?=$cliente->ID?>">
            <td><?=$cliente->Nome?></td>
            <td><?=$cliente->Telefone?></td>
            <td><?=$cliente->CPF?></td>
            <td><?=$cliente->Email?></td>
            <td>
                <a class="btn btn-success" href="?classe=cliente&acao=read&id=<?=$cliente->ID?>">🔍 Ver</a>
                <a class="btn btn-primary" href="?classe=cliente&acao=update&id=<?=$cliente->ID?>"> 📋 Alterar</a>


                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal" data-id="<?=$cliente->ID?>">
                    🗑️ Excluir </button>

            </td>
        </tr>
    <?php } ?>
    </tbody>

</table>

<?php include 'inc/footer.php';?>





<!-- Button to Open the Modal -->


<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h3 class="modal-title">Excluir ⚠️</h3>
                <button type="button" class="close" data-dismiss="modal">❌</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
                <h2>Deseja excluir este arquivo?</h2>
            </div>


            <!-- Modal footer -->
            <div class="modal-footer">
                <a class="btn btn-success" id="btn-excluir">👍 Sim</a>
                <button type="button" class="btn btn-danger" data-dismiss="modal">👎 Não</button>

            </div>

        </div>
    </div>
</div>

</div>
<script>
    $('#myModal').on('shown.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var id = button.data('id');
        $("#btn-excluir").attr('href','?classe=cliente&acao=delete&id='+id);

    });
</script>
