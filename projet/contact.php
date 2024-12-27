<?php
include_once 'conn.php'; 

class Contact {
    private $id;
    private $nom;
    private $prenom;
    private $email;
    private $telephone;
    private $connection; 

    public function __construct($connection){
        $this->connection = $connection->connect();  
    }
    public function getId() 
    { return $this->id; }
    public function getNom()
     { return $this->nom; }
    public function getPrenom(){ 
        return $this->prenom; 
    }
    public function getEmail()  { 
        return $this->email;
     }
    public function getTelephone() { 
        return $this->telephone; 
    }
    public function add($nom,$prenom,$email,$telephone){
// var_dump($this->db);
         $query="insert into contact (nom,prenom,email,telephone) values (:nom,:prenom,:email,:telephone)";
      $stmt=$this->connection->prepare($query);
     $stmt->bindParam(':nom',$nom);
   $stmt->bindParam(':prenom',$prenom);
$stmt->bindParam(':email',$email);
$stmt->bindParam(':telephone',$telephone);
return $stmt->execute();

}

    public function getAllContacts() {
        
        $query = "SELECT * FROM contact"; 
        try {
            $stmt = $this->connection->prepare($query);
            $contacts=[] ; 
            $stmt->execute();
            $contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);  
        } catch (PDOException $e) {
            
            echo "Error: " . $e->getMessage();
            $contacts = [];  
        }
        return $contacts;  
    }

}
   
?>




