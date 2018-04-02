<?php
include('config.inc.php');
session_start();

//connect CustomerLogon
function authenticateUserLogin($email, $pword) {
    try{
        $pdo = new PDO(DBCONNSTRING, DBUSER, DBPASS);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT CustomerID
                FROM CustomerLogon
                WHERE UserName = :username
                AND Pass = :pass
                LIMIT 1";
        $statement = $pdo->prepare($sql);
        $statement->bindValue(':username', $email);
        $statement->bindValue(':pass', $pword);
        $statement->execute();
        if($statement->rowCount() == 1) {
            while($row = $statement->fetch()) {
                // this step means authenticate successful
                return true;
            }
        } else {
            // authentication fail
            return false;
        }
    } catch(PDOException $e) {
        die($e->getMessage());
    }
}// end function of authentication


if(isset($_POST['login'])) {
    $requires = array('username','pword');
    $errors = array();
    foreach($requires as $field) {
        if(! isset($_POST[$field]) || empty($_POST[$field])) {
            $errors[] = "The {$field} can not be empty";
            header('Location: ../user-login.php');
        }
    }// end foreach
    if(empty($errors)) {
        $username = $_POST['username'];
        $pword = $_POST['pword'];
        $isAuthenticated = authenticateUserLogin($username, $pword);
        if($isAuthenticated) {
            header('Location: ../index.php');
        } else{
            $errors[] = "The username or password does not match";
            header('Location: ../user-login.php');
        }
    }
}// end if(isset[login])

foreach($errors as $err) {
    $_SESSION['Err'] = $err;
}

?>