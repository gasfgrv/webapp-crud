<?php

mysqli_report(MYSQLI_REPORT_STRICT);

function open_database() {
    try {
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        return $conn;
    } catch(Exception $e) {
        echo $e->getMessage();
        return null;
    }
}

function close_database($conn) {
    try {
        mysqli_close($conn);
    } catch (Exception $e){
        echo $e->getMessage();
    }
}

function find($table = null, $id = null) {
    $database = open_database();
    $found = null;

    try {
        if ($id) {
            $sql = "SELECT * FROM " . $table . " WHERE id = " . $id;
            $result = $database->query($sql);
            if ($result->num_rows > 0) {
                $found = $result->fetch_assoc();
            }
        } else {
            $sql = "SELECT * FROM " . $table;
            $result = $database->query($sql);
            if ($result->num_rows > 0) {
                $found = $result->fetch_all(MYSQLI_ASSOC);
            }
        }
    } catch (Exception $e) {
        $_SESSION['message'] = $e->GetMessage();
        $_SESSION['type'] = 'danger';
    }
    close_database($database);
    return $found;
}

function find_all($table){
    return find($table);
}

function save($table = null, $data = null) {
    $database = open_database();
    $columns = null;
    $values = null;
    foreach ($data as $key => $value) {
        $columns .= trim($key, "'") . ",";
        $values .= "'$value',";
    }
    $columns = rtrim($columns, ',');
    $values = rtrim($values, ',');
    $sql = "INSERT INTO" . $table . "($columns)" . " VALUES " . "($values);";
    try {
        $database->query($sql);
        $_SESSION['message'] = "Registro cadastrado com sucesso.";
        $_SESSION['type'] = "success";
    } catch (Exception $e) {
        $_SESSION['message'] = "Não foi possível realizar a operação.";
        $_SESSION['type'] = "danger";
    }
    close_database($database);
}

function edit() {
    $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
        if (isset($_POST['customer'])) {
            $customer = $_POST['customer'];
            $customer['modified'] = $now->format("Y-m-d H:i:s");
            update('customers', $id, $customer);
            header('location: index.php');
        } else {
            global $customer;
            $customer = find('customers', $id);
        }
    } else {
        header('location: index.php');
    }
}

function update($table = null, $id = 0, $data = null) {
    $database = open_database();
    $itens = null;
    foreach ($data as $key => $value) {
        $itens .= trim($key, "'") . "= '$value',";
    }
    $itens = rtrim($itens, ',');
    $sql = "UPDATE " . $table . " SET $itens" . " WHERE id=" . $id . ";";
    try {
        $database->query($sql);
        $_SESSION['message'] = "Registro atualizado com sucesso.";
        $_SESSION['type'] = 'success';
    } catch (Exception $e) {
        $_SESSION['message'] = "Registro atualizado com sucesso.";
        $_SESSION['type'] = 'success';
    }
    close_database($database);
}

function remove($table = null, $id = null) {
    $database = open_database();
    try {
        $sql = "DELETE FROM " . $table . " WHERE id =" . $id;
        $resyult = $database->query($sql);
        if ($result = $database->query($sql)) {
            $_SESSION['message'] = "Registro Removido com Sucesso.";
            $_SESSION['type'] = 'success';
        }
    } catch (Execption $e) {
        $_SESSION['message'] = $e->GetMessage();
        $_SESSION['type'] = 'danger';
    }
    close_database($database);
}