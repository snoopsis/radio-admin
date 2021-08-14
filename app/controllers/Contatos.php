<?php

class Contatos extends Controller{
  public function __construct(){
    if(!isLoggedIn()){
      redirect('users/login');
    }

    $this->userModel = $this->model('User');

    $this->contatoModel = $this->model('Contato');
  }

  public function index(){
    $contatos = $this->contatoModel->getContatos();

    $data = [
      'title' => 'Contatos Offshore',
      'description' => 'Listagem de Contatos Offshore',
      'contatos' => $contatos
    ];

    $this->view('contatos/index', $data);
  }

  public function editar($id){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
      // Sanitize POST array
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
  
      $data = [
        'id' => $id,
       'um' => trim($_POST['um']),
       'telefone' => trim($_POST['telefone']),
       'ramal_pb' => trim($_POST['ramal_pb']),
       'empresa' => trim($_POST['empresa']),
       'email' => trim($_POST['email'])
     ];
  
      // Validated
      if($this->contatoModel->updateContato($data)){
       flash('post_message', 'Contato Atualizado');
       redirect('contatos/index');
      } else {
        // Load with no errors
       $this->view('contatos/editar', $data);
      }
    
      } else {
         // Get existing contato from model
        $contato = $this->contatoModel->getContatoById($id);

         // Check for owner
      if($contato->user_id != $_SESSION['user_id']){
        redirect('contatos');
       } 
        
       $data = [
         'id' => $id,
         'um' => $contato->um,
         'telefone' => $contato->telefone,
         'ramal_pb' => $contato->ramal_pb,
         'empresa' => $contato->empresa,
         'email' => $contato->email
       ];
      }
  
  
     $this->view('contatos/editar', $data);
    }

        public function delete($id){
          // Get existing post from model
          $contato = $this->contatoModel->getContatoById($id);
          
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
          if($this->contatoModel->deleteContato($id)){
            flash('post_message', 'Contato Removido');
            redirect('contatos');
          } else {
            die('something went wrong');
          }
      } else {
        redirect('contatos');
      }
    }

    public function novo(){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
      // Sanitize POST array
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
  
      $data = [
       'um' => trim($_POST['um']),
       'telefone' => trim($_POST['telefone']),
       'ramal_pb' => trim($_POST['ramal_pb']),
       'email' => trim($_POST['email']),
       'empresa' => trim($_POST['empresa']),
       'user_id' => $_SESSION['user_id'],
       'um_err' => '',
       'telefone_err' => '',
       'ramal_pb_err' => '',
       'email_err' => '',
       'empresa_err' => ''
     ];
  
     // Validate title
     if(empty($data['um'])){
       $data['um_err'] = 'Por favor insira o Nome';
     }
  
      // Validate body
      if(empty($data['telefone'])){
       $data['telefone_err'] = 'Por Favor Insira Telefone';
     }
  
  
     // Make sure no errors
     if(empty($data['um_err']) && empty($data['telefone_err'])){
      // Validated
      if($this->contatoModel->novoContato($data)){
       flash('post_message', 'Contato Adicionado');
       redirect('contatos');
      } else {
        die('Something went wrong');
      }
  
      } else {
        // Load with no errors
       $this->view('contatos/novo', $data);
      }
    
      } else {
       $data = [
         'um' => '',
         'telefone' => '',
         'ramal_pb' => '',
         'email' => '',
         'empresa' => ''
       ];
      }
  
     $this->view('contatos/novo', $data);
    }

    public function busca(){
      $busca = $this->contatoModel->getContatosBusca();

      $data = [
        'title' => 'Contatos Offshore',
        'description' => 'Listagem de Contatos Offshore',
        'contatos' => $busca
      ];
  
      $this->view('contatos/index', $data);
    }
}
