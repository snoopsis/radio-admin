<?php
 class Voo {
   private $db;

   public function __construct(){
     $this->db = new Database;
   }


   // Lista todos os voos
   public function getVoos(){
      // $this->db->query('SELECT * FROM voos WHERE procedencia LIKE "%SKBU%" ORDER BY id DESC LIMIT 20');

      $this->db->query('SELECT * FROM voos WHERE procedencia LIKE :um ORDER BY id DESC LIMIT 20');

      $novaUM = "%".$_SESSION['um']."%";

      $this->db->bind(':um', $novaUM);

     $results = $this->db->resultSet();

     return $results;
    }

       // Lista Busca de voos
   public function getVoosBusca(){
    $busca = $_POST['busca'];

    $this->db->query('SELECT * FROM voos WHERE data LIKE :busca');

     // Bind values
     $this->db->bind(':busca', "%$busca%");

    $results = $this->db->resultSet();

    return $results;
   }

    public function novoVoo($data){
      $this->db->query("INSERT INTO voos (obs, data, horario, procedencia, empresa_tt, troca_pax, numero, prefixo, modelo, companhiaAerea, user_id) VALUES(:obs, :data, :horario, :procedencia, :empresa_tt, :troca_pax, :numero, :prefixo, :modelo, :companhiaAerea, :user_id)");

      // Bind values
      $this->db->bind(':obs', $data['obs']);
      $this->db->bind(':data', $data['data']);
      $this->db->bind(':horario', $data['horario']);
      $this->db->bind(':procedencia', $data['procedencia']);
      $this->db->bind(':empresa_tt', $data['empresa_tt']);
      $this->db->bind(':troca_pax', $data['troca_pax']);
      // $this->db->bind(':numero', $data['numero']);
      $this->db->bind(':numero', rand(10000, 100000));
      $this->db->bind(':prefixo', $data['prefixo']);
      $this->db->bind(':modelo', $data['modelo']);
      $this->db->bind(':companhiaAerea', $data['companhiaAerea']);
      $this->db->bind(':user_id', $data['user_id']);
  
      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
     }

    // Atualiza um voo
    public function updateVoo($data){
      $this->db->query('UPDATE voos SET obs = :obs, data = :data, horario = :horario, procedencia = :procedencia, empresa_tt = :empresa_tt, troca_pax = :troca_pax, numero = :numero, prefixo = :prefixo, modelo = :modelo, companhiaAerea = :companhiaAerea, eta = :eta, saida_aero = :saida_aero, retorno_eta = :retorno_eta, retorno_pob = :retorno_pob, retorno_mag = :retorno_mag, retorno_alt = :retorno_alt, retorno_aut = :retorno_aut, pouso = :pouso, decolagem = :decolagem WHERE id = :id');
      // Bind values
      $this->db->bind(':id', $data['id']);
      $this->db->bind(':obs', $data['obs']);
      $this->db->bind(':data', $data['data']);
      $this->db->bind(':horario', $data['horario']);
      $this->db->bind(':procedencia', $data['procedencia']);
      $this->db->bind(':empresa_tt', $data['empresa_tt']);
      $this->db->bind(':troca_pax', $data['troca_pax']);
      $this->db->bind(':numero', $data['numero']);
      $this->db->bind(':prefixo', $data['prefixo']);
      $this->db->bind(':modelo', $data['modelo']);
      $this->db->bind(':companhiaAerea', $data['companhiaAerea']);
      $this->db->bind(':eta', $data['eta']);
      $this->db->bind(':saida_aero', $data['saida_aero']);
      $this->db->bind(':retorno_eta', $data['retorno_eta']);
      $this->db->bind(':retorno_pob', $data['retorno_pob']);
      $this->db->bind(':retorno_mag', $data['retorno_mag']);
      $this->db->bind(':retorno_alt', $data['retorno_alt']);
      $this->db->bind(':retorno_aut', $data['retorno_aut']);
      $this->db->bind(':pouso', $data['pouso']);
      $this->db->bind(':decolagem', $data['decolagem']);
  
      // Execute
      if($this->db->execute()){
        return true;
      } else {
        return false;
      }
     }

    // Get voo by id
    public function getVooById($id){
      $this->db->query('SELECT * FROM voos WHERE id = :id');
      $this->db->bind(':id', $id);
  
      $row = $this->db->single();
  
      return $row;
    }

  public function deleteVoo($id){
    $this->db->query('DELETE FROM voos WHERE id = :id');
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