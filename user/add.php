<?php
    require_once('functions.php');
    add();
?>

<?php include(HEADER_TEMPLATE); ?>

<h2>Novo Usuário</h2>

<form action="add.php" method="POST">
    <!-- Area de campos do form -->
    <hr />
    <div class= "row">
        <div class="form-group col-md-3">
            <label for="campo1">CPF<span>*</span></label>
            <input type="text" class="form-control" name="user['cpf']" required>
        </div>

        <div class="form-group col-md-7">
            <label for="campo2">Nome Completo<span>*</span></label>
            <input type="text" class="form-control" name="user['name_full']" required>
        </div>
        <div class="form-group col-md-2">
            <label for="campo3">Data de Cadastro</label>
            <input type="text" class="form-control" name="customer['created']" disabled>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-3">
                <label for="campo3">Celular<span>*</span></label>
                <input type="text" class="form-control" name="user['cellphone']"required>
        </div>
        <div class="form-group col-md-7">
                <label for="campo3">Email<span>*</span></label>
                <input type="email" class="form-control" name="user['email']"required>
        </div>
        <div class="form-group col-md-2">
                <label for="campo3">Data de Nascimento</label>
                <input type="date" class="form-control" name="user['datanasc']">
        </div>
    </div>
    <div class="form-group row">
        <div class="col-sm-2">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="ADM">
                <label class="form-check-label" for="ADM">
                    Administração
                </label>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="CON">
                <label class="form-check-label" for="CON">
                    Contabilidade
                </label>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="ENG">
                <label class="form-check-label" for="ENG">
                    Engenharia
                </label>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="MED">
                <label class="form-check-label" for="MED">
                    Medicina
                </label>
            </div>
        </div>
        <div class="col-sm-2">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="TEC">
                <label class="form-check-label" for="TEC">
                    Tecnologia
                </label>
            </div>
        </div>
    </div>
    <div id="actions" class="row">
        <div class="col-md-12">
            <button type="submit" class=" btn btn-primary">Salvar</button>
            <a href="index.php" class="btn btn-light">Cancelar</a>
        </div>
    </div>
</form>

<?php include(FOOTER_TEMPLATE);?>