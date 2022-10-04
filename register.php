<?php
//include the function file

include_once('functions.php');

//object creation of databse class

$newUserData =new user();
if(isset($_POST['submitBtn']))
{

    //posted values
    $adm =$_POST['adm'];
    $fname =$_POST['fname'];
    $sname =$_POST['sname'];
    $email =$_POST['email'];
    $pass =$_POST['pass'];
    $user =$_POST['user'];

    //function calling
$sql=$newUserData->registration($adm,$fname,$sname,$email,$pass,$user);
 if($sql){
    for( $i=1;$i<3;$i++){

        echo "<script>alert('<span style='font-size:100px;'>&#128077;</span>');</script>";


    }
    echo "<script>alert('Registration successfull.');</script>";
    echo "<script>window.location.href='register.php'</script>";
 }
 else
 {
    echo "<script>alert('Something went wrong !! ');</script>";
    for( $i=1;$i<3;$i++){

        echo "<script>alert('<span style='font-size:100px;'>&#128128;</span>');</script>";


    }

    echo "<script>window.location.href='signin.php'</script>";

 }

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Account Creation</title>
    <style>
         *{
    padding: 0;
    border: 0;
    margin: 0;

}
        .account {

            background-color: #DED5D0;
            width: 100%;
            align-items: center;

        }
        .title{
            background-color: #ca9e93


        }
        form{

            margin-left: 30%;
        }

        h1 {

            text-decoration: underline;
            text-align: center;
            margin-top: 20px;
            margin-bottom: 15px;

        }

        label {
            width: 40px;
            height:30px ;
            margin-top: 20px;
            margin-bottom: 15px;
            margin-left: 100px;
            padding-left: 30px;
            color: black;
        }

        input {
            width: 200px;
            margin-left: 130px;
            padding-left: 30px;
            height:30px ;
            margin-top: 20px;
            margin-bottom: 15px;


        }

        select {
            width: 200px;
          padding-left: 30px;
          margin-left: 130px;

            width: 200px;
            height:30px ;

        }
    </style>
</head>

<body>
    <div class="account">
        <div class="title">
            <h1>ACCOUNT CREATION</h1>
        </div>

        <form action="register.php" method="post">
            <label for="adm">ID Number</label><br>
            <input type="text" name="adm" id="adm" placeholder="ID No"><br>

            <label for="fname">First Name</label><br>
            <input type="text" name="fname" id="fname" placeholder="First Name"><br>

            <label for="fname">Second Name</label><br>
            <input type="text" name="sname" id="sname" placeholder="SecondName"><br>


            <label for="email">Email Address</label><br>
            <input type="email" name="email" id="email" placeholder="Email address "><br>

            <label for="pass"> PASSWORD</label><br>
            <input type="password" name="pass" id="pass" placeholder="Password "><br>


            <label for="user"> User Type</label><br>
            <select name="user" id="user">
                <option value="student">Student</option>
                <option value="lecturer">lecturer</option>
                <option value="admin">Administrator</option>
            </select><br>

            <input type="submit" name="submitBtn">

        </form>

    </div>
</body>

</html>