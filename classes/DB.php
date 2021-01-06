<?php
     class DB{
          private $conn = NULL;
          public function __construct(){
               $this->host = "localhost";
               $this->user = "root";
               $this->pass = "";
               $this->db   = "petshop";
          }
          public function connect(){
               try{
                    $this->conn = new PDO("mysql:host=".$this->host.";dbname=".$this->db,$this->user,$this->pass);
               }
               catch(PDOException $e){
                    echo $e->getMessage();
                    die();
               }
          }
          public function insertUser($user , $pass, $email){
               $query = "INSERT INTO `user`(`username`, `password`, `email`) VALUES ('".$user."','".$pass."','".$email."'    )";
               $stmt = $this->conn->prepare($query);
               $stmt->execute();
          }
          public function checkUser($user){
               $query = "SELECT * from `user` WHERE username='".$user."'";
               $stmt = $this->conn->prepare($query);
               $stmt->execute();
               return $stmt->fetchAll(PDO::FETCH_ASSOC);
          }    
          public function insertPet($name , $img, $info){
               $query = "INSERT INTO `pets`(`petname`, `petimg`, `petinfo`) VALUES ('".$name."','".$img."','".$info."')";
               $stmt = $this->conn->prepare($query);
               $stmt->execute();
          }
          public function fetchAllPet(){
               $query = "SELECT * from `pets`";
               $stmt = $this->conn->prepare($query);
               $stmt->execute();
               return $stmt->fetchAll(PDO::FETCH_ASSOC);
          }  
          public function deletePet($id){
               $query = "DELETE from `pets` where id=".$id;
               $stmt = $this->conn->prepare($query);
               $stmt->execute();
          }
     }
?>
