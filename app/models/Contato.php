<?php
 class Contato {
   private $db;

   public function __construct(){
     $this->db = new Database;
   }


   // Lista todos os contatos
   public function getContatos(){
     $this->db->query('SELECT * FROM telefones_offshore LIMIT 20');

     $results = $this->db->resultSet();

     return $results;
    }

       // Lista Busca de Contatos
   public function getContatosBusca(){
    $busca = $_POST['busca'];

    $this->db->query('SELECT * FROM telefones_offshore WHERE um LIKE :busca');

     // Bind values
     $this->db->bind(':busca', "%$busca%");

    $results = $this->db->resultSet();

    return $results;
   }

    public function novoContato($data){
      $this->db->query('INSERT INTO telefones_offshore (um, telefone, ramal_pb, email, empresa, user_id) VALUES(:um, :telefone, :ramal_pb, :email, :empresa, :user_id)');
      // Bind values
      $this->db->bind(':um', $data['um']);
      $this->db->bind(':telefone', $data['telefone']);
      $this->db->bind(':ramal_pb', $data['ramal_pb']);
      $this->db->bind(':email', $data['email']);
      $this->db->bind(':empresa', $data['empresa']);
      $this->db->bind(':user_id', $data['user_id']);
  
      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
     }

    // Atualiza um contato
    public function updateContato($data){
      $this->db->query('UPDATE telefones_offshore SET um = :um, telefone = :telefone, ramal_pb = :ramal_pb, empresa = :empresa, email = :email WHERE id = :id');
      // Bind values
      $this->db->bind(':id', $data['id']);
      $this->db->bind(':um', $data['um']);
      $this->db->bind(':telefone', $data['telefone']);
      $this->db->bind(':ramal_pb', $data['ramal_pb']);
      $this->db->bind(':empresa', $data['empresa']);
      $this->db->bind(':email', $data['email']);
  
      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
     }

  // Get arrival by id
  public function getChegadaById($id){
    $this->db->query('SELECT * FROM chegada WHERE id = :id');
    $this->db->bind(':id', $id);

    $row = $this->db->single();

    return $row;
  }

    // Get contato by id
    public function getContatoById($id){
      $this->db->query('SELECT * FROM telefones_offshore WHERE id = :id');
      $this->db->bind(':id', $id);
  
      $row = $this->db->single();
  
      return $row;
    }

  public function deleteContato($id){
    $this->db->query('DELETE FROM telefones_offshore WHERE id = :id');
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