<?php
 class Chegada {
   private $db;

   public function __construct(){
     $this->db = new Database;
   }


   // Find all arrivals
   public function getChegadas(){
     $this->db->query('SELECT * FROM chegada ORDER BY id DESC LIMIT 20');

     $results = $this->db->resultSet();

     return $results;
    }

  // Get arrival by id
  public function getChegadaById($id){
    $this->db->query('SELECT * FROM chegada WHERE id = :id');
    $this->db->bind(':id', $id);

    $row = $this->db->single();

    return $row;
  }

  public function deleteChegada($id){
    $this->db->query('DELETE FROM chegada WHERE id = :id');
    // Bind values
    $this->db->bind(':id', $id);

    // Execute
    if($this->db->execute()){
      return true;
    } else {
      return false;
    }
  }

         // Lista Busca de Crews
         public function getChegadasBusca(){
          $busca = $_POST['busca'];
      
          $this->db->query('SELECT * FROM chegada WHERE nome LIKE :busca LIMIT 20');
      
           // Bind values
           $this->db->bind(':busca', "%$busca%");
      
          $results = $this->db->resultSet();
      
          return $results;
         }
}