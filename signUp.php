<?php
if (isset($_POST['submit'])) { // if submit was pressed
    include_once 'assignmentdb.php';
    $first = mysqli_real_escape_string($conn, $_POST['first']); // adds first name to datbase (all code is converted to text for security)
    $last = mysqli_real_escape_string($conn, $_POST['last']); // adds first name to datbase (all code is converted to text for security)
    $userid = mysqli_real_escape_string($conn, $_POST['userid']); // adds userid to datbase (all code is converted to text for security)
    $email = mysqli_real_escape_string($conn, $_POST['email']); // adds email to datbase (all code is converted to text for security)
    $pass = mysqli_real_escape_string($conn, $_POST['pass']); // adds pass to datbase (all code is converted to text for security)
}