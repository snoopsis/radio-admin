<?php

class Chegadas extends Controller{
  public function __construct(){
    if(!isLoggedIn()){
      redirect('users/login');
    }

    $this->chegadaModel = $this->model('Chegada');
  }

      public function index(){
        $chegadas = $this->chegadaModel->getChegadas();

        $data = [
          'chegadas' => $chegadas
        ];

      // Check for owner
    if($_SESSION['user_id'] == 0){
      $this->view('chegadas/index', $data);
      } else {
        redirect('contatos');
      }
    }


        public function delete($id){
          // Get existing crew from model
          $chegada = $this->chegadaModel->getChegadaById($id);
          
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
          if($this->chegadaModel->deleteChegada($id)){
            flash('post_message', 'Chegada Removida');
            redirect('chegadas');
          } else {
            die('something went wrong');
          }
      } else {
        redirect('chegadas');
      }
    }

    public function busca(){
      $busca = $this->chegadaModel->getChegadasBusca();

      $data = [
        'chegadas' => $busca
      ];
  
      $this->view('chegadas/index', $data);
    }

    // Abre pagina do formulario
    public function form(){
      $this->view('chegadas/form');
    }
}
