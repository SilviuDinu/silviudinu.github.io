<?php
$db="proiect";
if (isset($_POST['login'])) {
    $con=mysqli_connect("localhost", "root", "", "proiect");
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    $username=$_POST['name'];
    $password=$_POST['password'];
    $result = mysqli_query($con,"SELECT * FROM users WHERE username='$username' and password='$password'");
    $row = mysqli_fetch_array($result);
    if(mysqli_num_rows($result) > 0 ) { //check if there is already an entry for that username
        include 'welcome.php';
    }
    else {
        echo "Parola sau Username gresit. Daca nu aveti cont, mergeti inapoi si apsati pe Register";
    }
} else if (isset($_POST['register'])){
    include 'register.php';
}
?>