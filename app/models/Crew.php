<?php
 class Crew {
   private $db;

   public function __construct(){
     $this->db = new Database;
   }


   // Lista todos os Crews
   public function getCrews(){
     $this->db->query('SELECT * FROM crew WHERE user_id = :user_id ORDER BY id DESC LIMIT 20');

     $this->db->bind(':user_id', $_SESSION['user_id']);

     $results = $this->db->resultSet();

     return $results;
    }

       // Lista Busca de Crews
   public function getCrewsBusca(){
    $busca = $_POST['busca'];

    $this->db->query('SELECT * FROM crew WHERE name LIKE :busca LIMIT 20');

     // Bind values
     $this->db->bind(':busca', "%$busca%");

    $results = $this->db->resultSet();

    return $results;
   }

    public function novoCrew($data){
      $this->db->query('INSERT INTO crew (name, sispat, cabin, country, company, funcao, cpf, dob, celular, email, embarque, desembarque, user_id) VALUES(:name, :sispat, :cabin, :country, :company, :funcao, :cpf, :dob, :celular, :email, :embarque, :desembarque, :user_id)');
      // Bind values
      $this->db->bind(':name', $data['name']);
      $this->db->bind(':sispat', $data['sispat']);
      $this->db->bind(':cabin', $data['cabin']);
      $this->db->bind(':country', $data['country']);
      $this->db->bind(':company', $data['company']);
      $this->db->bind(':funcao', $data['funcao']);
      $this->db->bind(':cpf', $data['cpf']);
      $this->db->bind(':dob', $data['dob']);
      $this->db->bind(':celular', $data['celular']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':embarque', $data['embarque']);
      $this->db->bind(':desembarque', $data['desembarque']);
      $this->db->bind(':user_id', $_SESSION['user_id']);
  
      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
     }

    // Atualiza um Crew
    public function updateCrew($data){
      $this->db->query('UPDATE crew SET name = :name, sispat = :sispat, cabin = :cabin, country = :country, company = :company, funcao = :funcao, cpf = :cpf, dob = :dob, celular = :celular, email = :email, embarque = :embarque, desembarque = :desembarque WHERE id = :id');
      // Bind values
      $this->db->bind(':id', $data['id']);
      $this->db->bind(':name', $data['name']);
      $this->db->bind(':sispat', $data['sispat']);
      $this->db->bind(':cabin', $data['cabin']);
      $this->db->bind(':country', $data['country']);
      $this->db->bind(':company', $data['company']);
      $this->db->bind(':funcao', $data['funcao']);
      $this->db->bind(':cpf', $data['cpf']);
      $this->db->bind(':dob', $data['dob']);
      $this->db->bind(':celular', $data['celular']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':embarque', $data['embarque']);
      $this->db->bind(':desembarque', $data['desembarque']);
  
      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
     }

    // Get Crew by id
    public function getCrewById($id){
      $this->db->query('SELECT * FROM crew WHERE id = :id');
      $this->db->bind(':id', $id);
  
      $row = $this->db->single();
  
      return $row;
    }

  public function deleteCrew($id){
    $this->db->query('DELETE FROM crew WHERE id = :id');
    // Bind values
    $this->db->bind(':id', $id);

    // Execute
    if($this->db->execute()){
      return true;
    } else {
      return false;
    }
  }
}