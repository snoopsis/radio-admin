<?php

class Pages extends Controller{
  public function __construct(){
    if(!isLoggedIn()){
      redirect('users/login');
    }

    $this->userModel = $this->model('User');
    $this->chegadaModel = $this->model('Chegada');
  }

  public function index(){
    $chegadas = $this->chegadaModel->getChegadas();
    $users = $this->userModel->getAllUsers();

    $data = [
      'title' => 'Informacoes de Chegada',
      'description' => 'Cadastro de Chegada de Pessoal',
      'chegadas' => $chegadas,
      'users' => $users
    ];

    // Check for owner
    if($_SESSION['user_id'] != 0){
      redirect('contatos');
      } 

    $this->view('pages/index', $data);
  }

  public function about(){
    $data = [
      'title' => 'About',
      'description' => 'App to share posts with other users'
    ];

   $this->view('pages/about', $data); 
  }

  public function delete($id){
    // If delete get chegada ID
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      if($this->chegadaModel->deleteChegada($id)){
        redirect('index');
      }
    }
  }

  public function activateuser($id){
     // Activate User
     if($_SERVER['REQUEST_METHOD'] == 'POST'){
      if($this->userModel->activate($id)){
        redirect('index');
      }
   }
 }

 public function deactivateuser($id){
  // Activate User
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
   if($this->userModel->deactivate($id)){
     redirect('index');
   }
}
}

}