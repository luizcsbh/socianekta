<?php

/**
 * Pesquisa um Registro pelo ID em uma Tabela
 */
function find( $table = null, $id = null){

    $database = open_database();
    $found = null;

    try{
        if ($id) {
            $sql = "SELECT * FROM " .$table . " WHERE id_user = " . $id;
            $result = $database->query($sql);

            if ($result->num_rows > 0) {
                $found = $result->fetch_assoc();
            }
        } else{
            $sql = "SELECT * FROM " . $table;
            $result = $database->query($sql);

            if ($result->num_rows > 0) {
                $found = $result->fetch_all(MYSQLI_ASSOC);
            }
        }
    } catch (Exception $e) {
        $_SESSION['mesage'] = $e->GetMessage();
        $_SESSION['type'] = 'danger';
    }

    close_database($database);
    return $found;
}

/**
 * Pesquisa Todos os Registros de uma Tabela
 */
function find_all($table) {
    return find($table);
}

/**
 * Insere um registro no Banco de dados
 */
function save($table = null, $data = null) {
    
    $database = open_database();

    $colums = null;
    $values = null;

    foreach ($data as $key => $value) {
        $colums .= trim($key, "'") . ",";
        $values .= "'$value',";
    }

    // remove a ultima virgula
    $columns = rtrim($columns, ',');
    $values = rtrim($values, ',');

    $sql = "INSERT INTO " . $table . "($columns)" . " VALUES " . "($values);";

    try{
        $database->query($sql);

        $_SESSION['message'] = 'Registro cadastrado com sucesso.';
        $_SESSION['type'] = 'sucess';

    } catch (Exception $e) {

        $_SESSION['message'] = 'Não foi possível realizar a operação.';
        $_SESSION['type'] = 'danger';
    }

    close_database($database);
}



/**
 * Atualiza um registro em uma tabela, por ID
 */

function update($table = null, $id = 0, $data = null) {
    
    $database = open_database();
    
    $items = null;

    foreach ($data as $key => $value) {
        $items .= trim($key, "'") . "='$value',";
    }

    // remove a ultima virgula
    $items = rtrim($items, ',');
    $sql  = "UPDATE " . $table;
    $sql .= " SET $items";
    $sql .= " WHERE id_user =" . $id . ";";

    try {
        $database->query($sql);
        
        $_SESSION['message'] = 'Registro atualizado com sucesso.';
        $_SESSION['type'] = 'success';
    
    } catch (Exception $e) {

        $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
        $_SESSION['type'] = 'danger';
    }
    close_database($database);
}

/**
 * Remove uma linha de uma tabela pelo ID do registro
 */
function remove($table = null, $id = null) {

    $database = open_database();

    try {
        if ($id) {

            $sql = "DELETE FROM " . $table . " WHERE id_user = " .$id;
            $result = $database->query($sql);

            if ($result = $database ->query($sql)) {
                $_SESSION['message'] = "Registro removido com sucesso.";
                $_SESSION['type'] = 'sucesss';
            }
        }
    } catch (Exception $e) {

        $_SESSION['message'] = $e->GetMessage();
        $_SESSION['type'] = 'danger';
    }
}

mysqli_report(MYSQLI_REPORT_STRICT);

function open_database() {
    try {
            $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
            return $conn;
    } catch (Exception $e) {
        echo $e->GetMessage();
        return null;
    }
}

function close_database($conn) {
    try {
        mysqli_close($conn);
    } catch (Exception $e) {
        echo $e->GetMessage();
    }
}

?>