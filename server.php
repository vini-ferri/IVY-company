<?php
session_start();

// initializing variables
$fullname    = "";
$email       = "";
$password_1  = "";
$password_2  = "";
$cep         = "";
$logradouro  = "";
$bairro      = "";
$uf          = "";
$numero      = "";
$complemento = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'pac');
error_reporting(E_ERROR | E_WARNING | E_PARSE);
// REGISTER USER
if (isset($_POST['reg_user'])) {
    // receive all input values from the form
    $fullname = mysqli_real_escape_string($db, $_POST['fullname']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
    $cep = mysqli_real_escape_string($db, $_POST['cep']);
    $logradouro = mysqli_real_escape_string($db, $_POST['logradouro']);
    $bairro = mysqli_real_escape_string($db, $_POST['bairro']);
    $uf = mysqli_real_escape_string($db, $_POST['uf']);
    $numero = mysqli_real_escape_string($db, $_POST['numero']);
    $complemento = mysqli_real_escape_string($db, $_POST['complemento']);

    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if ($password_1 != $password_2) {
        array_push($errors, "As duas senhas não são compatíveis, tente novamente");
    }

    // first check the database to make sure 
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $email = mysqli_fetch_assoc($result);

    if ($email) { // if user exists

        if ($email['email'] === $email) {
            array_push($errors, "Este e-mail já está cadastrado");
        }
    }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $password = md5($password_1); //encrypt the password before saving in the database

        $query = "INSERT INTO users (fullname, email, password, cep, logradouro, numero, complemento, bairro, uf) 
  			  VALUES('$fullname', '$email', '$password', '$cep', '$logradouro', '$numero', '$complemento', '$bairro', '$uf')";
        mysqli_query($db, $query);
        $_SESSION['fullname'] = $fullname;
        $_SESSION['success'] = "Você está logado!";
        header('location: pag_reg2.php');
    }
}
// LOGIN USER
if (isset($_POST['login_user'])) {
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['email'] = $email;
            $_SESSION['success'] = "You are now logged in";
            header('location: registro2.php');
        } else {
            array_push($errors, "Combinação incorreta de email e senha. Por favor tente novamente");
        }
    }
}
