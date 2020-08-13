<?php
    require_once('../config.php');
    require_once(CONTROLLER);
    view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Usuário <?php echo $user['id_user']; ?></h2>
<hr>

<?php if (!empty($_SESSION['message'])) : ?>
    <div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>

<dl class="dl-horizontal">
    <dt>CPF</dt>
    <dd><?php echo $user['cpf']; ?></dd>

    <dt>Nome</dt>
    <dd><?php echo $user['name_full']; ?></dd>

    <dt>Data Cadastro</dt>
    <dd><?php echo $user['created']; ?></dd>
</dl>

<dl class="dl-horizontal">
    <dt>Celular</dt>
    <dd><?php echo $user['cellphone']; ?></dd>

    <dt>Email</dt>
    <dd><?php echo $user['email']; ?></dd>

    <dt>Data de Nascimento</dt>
    <dd><?php echo $user['datanasc']; ?></dd>
</dl>

<div id="actions" class="row">
    <div class="col-md-12">
        <a href="edit.php?id=<?php echo $user['id_user']; ?>" class="btn btn-primary">Editar</a>
        <a href="index.php" class="btn btn-light">Voltar</a>
    </div>
</div>

<?php include(FOOTER_TEMPLATE); ?>