<?php 

// define('host', 'database-1.cqjxrkfej1rs.ap-northeast-1.rds.amazonaws.com');
// define('user', 'AlexEnclave');
// define('password', 'enclaveSE');
// define('db', 'enclave');

class DB{
    public $host="database-1.cqjxrkfej1rs.ap-northeast-1.rds.amazonaws.com";
    public $user="AlexEnclave";
    public $password="enclaveSE";
    public $db="enclave";
    public $conn;

  public  function __consruct(){

     $this->conn= mysqli_connect($this->host,$this->user,$this->password,$this->db);
    

        if (mysqli_connect_errno()){

            echo"Failed to connect to the database" . mysqli_connect_error();
        }
    }
}

class User extends DB{

    

    // public function __consruct(){

    //     $db=new DB;
    // }

    public function registration ($adm, $fname, $sname, $email, $pass, $user)
    {
        $checkuser = mysqli_query($this->conn,"Select *from users where identification_number='$adm'");  
        // $result = mysqli_num_rows($checkuser);  
        if (mysqli_num_rows($checkuser)== 0) {  
            $register = mysqli_query($this->conn,"Insert into users (identification_number, fname, sname, email, password,user_type) values ('$adm','$fname','$sname','$email','$pass','$user')");  
            echo'<script> alert("User Account created")</script>';
            return $register;
            echo "<script>window.location.href='register.php'</script>";
  

        }
         else {  
            echo'<script> alert("A user with that account already exists")</script>';
        }  

    }
}

?>