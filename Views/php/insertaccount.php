<?php
include 'dbconnect.php';

$firstName = trim($_POST['inputFirstName']);
$lastName = trim($_POST['inputLastName']);
$userName = trim($_POST['inputUserName']);
$password = trim($_POST['inputPassword']);
$position = (int)trim($_POST['inputPosition']);


$sql="SELECT username FROM users WHERE username='$username'";
$result=mysqli_query($link, $sql);
$count=mysqli_num_rows($result);

if($count==0){
    $sql="INSERT INTO users (Username, Password, FirstName, LastName, Position) VALUES ('$userName', '$password', '$firstName', '$lastName','$position');";
    if ($link->query($sql) === TRUE) {
        echo "<script type='text/javascript'>alert('New User Created!!!');</script>";
        header("Location: ../createAccount.php");
    } else {
        echo "Error: " . $sql . "<br>" . $link->error;
        echo "<script type='text/javascript'>alert('Error User not Created!!!');</script>";
        header("Location: ../createAccount.php");
    }
}
else {
    echo "<script type='text/javascript'>alert('Error Count != 0!!!!');</script>";
    header("Location: ../createAccount.php");
}
?>