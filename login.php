<?php
if (isset($_POST['submit'])) { // if submit was pressed
    include_once 'assignmentdb.php';
    $username = mysqli_real_escape_string($conn, $_POST['username']); // adds userid to database (all code is converted to text for security)
    $email = mysqli_real_escape_string($conn, $_POST['email']); // adds email to datbase (all code is converted to text for security)
    $pass = mysqli_real_escape_string($conn, $_POST['pass']); // adds pass to datbase (all code is converted to text for security)

    $hashedPass = password_hash($pass, PASSWORD_DEFAULT)
    $sql = "SELECT * FROM user WHERE username = '$username' && password = '$hashedPass' && email = '$email'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result); // checks how much rows there is from the result
    if ($resultCheck > 0) { // if there is more than 0 results
        header("Location: login.html?login=not-found");
        exit();
    } else {
        header("Location: index.php?login=successful");
        exit();
    }
}