<?php
session_start();
include_once('dbConnect.php');
// echo $_SESSION['id_user'];


class contact{
        public $conn;
        public $id;
        public $name;
        public $email;
        public $phone;
        public $address;
      function __construct($conn){
              $this->conn = $conn;

      }
        function add_con($name , $email , $phone , $address){
            $this->name = $name;
            $this->email = $email;
            $this->phone = $phone;
            $this->address = $address;

           $requete =$this->conn->prepare("INSERT INTO `Contact`(`iduser`,`Name`,`email`,`phone`,`Adresse`)
            VALUES(?,?,?,?,?)");
            $requete->bindParam(1,$_SESSION['id_user'] ,PDO::PARAM_INT);
            $requete->bindParam(2,$name ,PDO::PARAM_STR);
            $requete->bindParam(3,$email ,PDO::PARAM_STR);
            $requete->bindParam(4,$phone ,PDO::PARAM_STR);
            $requete->bindParam(5,$address ,PDO::PARAM_STR);

            $requete->execute();
               header('Location: listabl.php');

               
               
          
        }
        function select(){
            $id = $_SESSION['id_user'];
            $insert =$this->conn->prepare("SELECT * FROM contact WHERE iduser=?"); 
            $insert -> bindParam(1, $id, PDO::PARAM_INT );
            $insert -> execute();
            $stmt = $insert ->fetchAll(PDO::FETCH_ASSOC);
         return $stmt;
        }
       //todo------------------------------------------------crud--------------------------------------------------------------------------- 

        public function delit($id){
                        $dell = $this->conn->prepare("DELETE FROM `contact` WHERE id=?");
                        $dell -> bindParam(1, $id, PDO::PARAM_INT );
                        $dell -> execute();
                        header('Location: listabl.php');

        }

        
        public function affichagepost($id){
                $sql= "SELECT * FROM contact WHERE id=?";   
                $stmt= $this->conn->prepare($sql); 
                $stmt -> bindParam(1, $id, PDO::PARAM_INT);
                $stmt->execute();  
                $results =$stmt->fetchAll(); 
                return $results;                                                                          
        }

        
        public function editpost($Name,$email,$phone,$address,$id){
                echo $Name;
                echo $email;
                echo $phone;
                echo $address;
                echo $id;
                $sql= "UPDATE contact SET Name='$Name', email='$email' ,phone='$phone',adresse='$address' WHERE id = $id ";   
                $stmt = $this->conn->prepare($sql); 
                $stmt->execute();
                header('Location: listabl.php');
                

        

        }
        
        
}

?>