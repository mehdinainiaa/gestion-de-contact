<?php
include_once('dbConnect.php');
class User{
    public $conn;
    function __construct($conn){
       $this->conn = $conn;
    }
    public function signup(){
        if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password2']));
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password2 = $_POST['password2'];

        $date = date('Y-m-d');
        $time = date('h:i:sa');
        $siup_log = $date." ".$time;
        $query= $this->conn ->prepare("INSERT INTO `user`(`username`, `password`, `last_signup`) VALUES (?,?,?)"); 
        $query->bindParam(1,$username , PDO::PARAM_STR);
        $query->bindParam(2,$password , PDO::PARAM_STR);
        $query->bindParam(3,$siup_log , PDO::PARAM_STR);
        if($query->execute()){
            $row = $query->fetch(PDO::FETCH_ASSOC);
            // $_SESSION['id_user'] = $row['iduser'];
            $_SESSION['username'] = $username;
            $_SESSION['last_signup'] = $row['last_signup'];
           
     
        $stmt2 =  $this->conn->prepare("SELECT * FROM `user` WHERE `username` = ?");
                    $stmt2->bindParam(1,$username , PDO::PARAM_STR);
                    $stmt2->execute();
                    $row2 = $stmt2->fetch(PDO::FETCH_ASSOC);
                    $_SESSION['id_user'] = $row2['iduser'];
                    header('location:authtifc.php');
   }
 }
 public function signin($username,$password){
    $query= $this->conn ->prepare(" SELECT * FROM `user` WHERE `username` = ? AND `password` = ?"); 
    $query->bindParam(1,$username , PDO::PARAM_STR);
    $query->bindParam(2,$password , PDO::PARAM_STR);
    $query->execute();
    if($query->execute()){
        $row = $query->fetch(PDO::FETCH_ASSOC);
        $_SESSION['id_user'] = $row['iduser'];
        $_SESSION['username'] = $row['username'];
        $date = date('Y-m-d');
        $time = date('h:i:sa');
        $sign_log = $date." ".$time;
        $_SESSION['signin'] = $sign_log;
        echo $_SESSION['username'];
        header('location:contact.php');
    }
    }

    public function get_user_data($username){
        $sql = "SELECT * FROM user WHERE username=?";
        $stmt = $this->conn ->prepare($sql);
        $stmt -> bindParam(1,$username, PDO::PARAM_STR);
        $stmt ->execute();
        $result = $stmt ->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

}