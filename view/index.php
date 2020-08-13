<?php
     require_once('../config.php');
     require_once(CONTROLLER);
    index();
?>

<?php include(HEADER_TEMPLATE);?>

<header>
    <div class="row">
        <div class="col-sm-6">
            <h2>Usuários</h2>
        </div>
        <div class="col-sm-6 text-right h2">
            <a class="btn btn-primary" href="add.php">
                <i class="fa fa-plus"></i>
                Novo Usuário
            </a>
            <a class="btn btn-light" href="index.php">
                <i class="fa fa-refresh"></i>
                Atualizar
            </a>
        </div>
    </div>
</header>

<?php if (!empty($_SESSION['message'])) : ?>
    <div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <?php echo $_SESSION['message']; ?>
    </div>		
    <?php clear_messages(); ?>
<?php endif; ?>

<hr>

<table class="table table-hover table-sm">
    <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">CPF</th>
            <th scope="col">Celular</th>
            <th scope="col">Email</th>
            <th scope="col">Data Nascimento</th>
            <th scope="col">Atualizado em</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>
    <?php if ($users) : ?>
    <?php foreach ($users as $user) : ?>
        <tr>
            <td><?php echo $user['id_user'];?></td>
            <td><?php echo $user['name_full'];?></td>
            <td><?php echo $user['cpf'];?></td>
            <td><?php echo $user['cellphone'];?></td>
            <td><?php echo $user['email'];?></td>
            <td><?php echo $user['datanasc'];?></td>
            <td ><?php echo $user['modified']; ?></td>
            <td class="actions ">
                <a href="view.php?id=<?php echo $user['id_user']; ?>" class="btn btn-sm btn-success">
                    <i class="fa fa-eye"></i>
                    
                </a>
                <a href="edit.php?id=<?php echo $user['id_user']; ?>" class="btn btn-sm btn-warning">
                    <i class="fa fa-pencil"></i>
                   
                </a>
                <a href="#" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#delete-modal" data-customer="<?php echo $user['id_user']; ?>">
                    <i class="fa fa-trash"></i>
                    
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
    <?php else : ?>
        <tr>
            <td colsapn="6">Nenhum registro encontrado.</td>
        </tr>
    <?php endif; ?>
    </tbody>
</table>

<?php include('modal.php'); ?>

<?php include(FOOTER_TEMPLATE); ?>