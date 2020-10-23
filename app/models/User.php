<?php
 class User {
   private $db;

   public function __construct(){
     $this->db = new Database;
   }

   // Register User
   public function register($data){
    $this->db->query('INSERT INTO users (name, email, password, cpf) VALUES(:name, :email, :password, :cpf)');
    // Bind values
    $this->db->bind(':name', $data['name']);
    $this->db->bind(':email', $data['email']);
    $this->db->bind(':password', $data['password']);
    $this->db->bind(':cpf', $data['cpf']);

    // Execute
    if($this->db->execute()){
      return true;
    } else {
      return false;
    }
   }

   // Login User
   public function login($email, $password){
     $this->db->query('SELECT * FROM users WHERE email = :email');
     $this->db->bind(':email', $email);

     $row = $this->db->single();

     $hashed_password = $row->password;
     if(password_verify($password, $hashed_password) && $row->active == 1){
       return $row;
     } else {
       return false;
     }
   }

   // Find user by email
   public function findUserByEmail($email){
     $this->db->query('SELECT * FROM users WHERE email = :email');
     // bind value
     $this->db->bind('email', $email);

     $row = $this->db->single();

     // Check row
     if($this->db->rowCount() > 0){
      return true;
     } else {
       return false;
     }
   }

   public function getAllUsers(){
     $this->db->query('SELECT * FROM users ORDER BY id DESC');

     $results = $this->db->resultSet();

     return $results;
   }

   // Activar Usuarios
   public function activate($id){
     $this->db->query('UPDATE users SET active = true WHERE id = :id');

     $this->db->bind(':id', $id);

      // Execute
    if($this->db->execute()){
      return true;
    } else {
      return false;
    }
   }

   // Desativar usuarios
   public function deactivate($id){
    $this->db->query('UPDATE users SET active = false WHERE id = :id');

    $this->db->bind(':id', $id);

     // Execute
   if($this->db->execute()){
     return true;
   } else {
     return false;
   }
  }

 }