<?php

class Voos extends Controller{
  public function __construct(){
    if(!isLoggedIn()){
      redirect('users/login');
    }

    $this->chegadaModel = $this->model('User');

    $this->vooModel = $this->model('Voo');
  }

  public function index(){
    $voos = $this->vooModel->getvoos();

    $data = [
      'title' => 'voos Offshore',
      'description' => 'Listagem de voos Offshore',
      'voos' => $voos
    ];

    $this->view('voos/index', $data);
  }

  public function editar($id){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
      // Sanitize POST array
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
  
      $data = [
        'id' => $id,
        'obs' => trim($_POST['obs']),
       'data' => trim($_POST['data']),
       'horario' => trim($_POST['horario']),
       'procedencia' => trim($_POST['procedencia']),
       'empresa_tt' => trim($_POST['empresa_tt']),
       'troca_pax' => trim($_POST['troca_pax']),
       'numero' => trim($_POST['numero']),
       'prefixo' => trim($_POST['prefixo']),
       'modelo' => trim($_POST['modelo']),
       'companhiaAerea' => trim($_POST['companhiaAerea']),
       'eta' => trim($_POST['eta']),
       'saida_aero' => trim($_POST['saida_aero']),
       'retorno_eta' => trim($_POST['retorno_eta']),
       'retorno_pob' => trim($_POST['retorno_pob']),
       'retorno_mag' => trim($_POST['retorno_mag']),
       'retorno_alt' => trim($_POST['retorno_alt']),
       'retorno_aut' => trim($_POST['retorno_aut']),
       'pouso' => trim($_POST['pouso']),
       'decolagem' => trim($_POST['decolagem'])
     ];
  
      // Validated
      if($this->vooModel->updateVoo($data)){
       flash('post_message', 'Voo Atualizado');
      //  redirect('voos/index');
      $this->view('voos/editar', $data);
      } else {
        // Load with no errors
       $this->view('voos/editar', $data);
      }
    
      } else {
         // Get existing Voo from model
      $voo = $this->vooModel->getVooById($id);
        
       $data = [
         'id' => $id,
         'obs' => $voo->obs,
         'data' => $voo->data,
         'horario' => $voo->horario,
         'procedencia' => $voo->procedencia,
         'empresa_tt' => $voo->empresa_tt,
         'troca_pax' => $voo->troca_pax,
         'numero' => $voo->numero,
         'prefixo' => $voo->prefixo,
         'modelo' => $voo->modelo,
         'companhiaAerea' => $voo->companhiaAerea,
         'eta' => $voo->eta,
         'saida_aero' => $voo->saida_aero,
         'retorno_eta' => $voo->retorno_eta,
         'retorno_pob' => $voo->retorno_pob,
         'retorno_mag' => $voo->retorno_mag,
         'retorno_alt' => $voo->retorno_alt,
         'retorno_aut' => $voo->retorno_aut,
         'pouso' => $voo->pouso,
         'decolagem' => $voo->decolagem
       ];
      }
  
  
     $this->view('voos/editar', $data);
    }

        public function delete($id){
          // Get existing post from model
          $voo = $this->vooModel->getVooById($id);
          
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
          if($this->vooModel->deleteVoo($id)){
            flash('post_message', 'Voo Removido');
            redirect('voos');
          } else {
            die('something went wrong');
          }
      } else {
        redirect('voos');
      }
    }

    public function novo(){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
      // Sanitize POST array
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
  
      $data = [
       'obs' => trim($_POST['obs']),
       'data' => trim($_POST['data']),
       'horario' => trim($_POST['horario']),
       'procedencia' => trim($_POST['procedencia']),
       'empresa_tt' => trim($_POST['empresa_tt']),
       'troca_pax' => trim($_POST['troca_pax']),
       'numero' => trim($_POST['numero']),
       'prefixo' => trim($_POST['prefixo']),
       'modelo' => trim($_POST['modelo']),
       'companhiaAerea' => trim($_POST['companhiaAerea']),
       'user_id' => $_SESSION['user_id'],
       'obs_err' => '',
       'data_err' => '',
       'horario_err' => '',
       'procedencia_err' => '',
       'empresa_err' => '',
       'troca_pax_err' => '',
      //  'numero_err' => '',
       'prefixo_err' => '',
       'modelo_err' => '',
       'companhiaAerea_err' => ''
     ];
  
        // Validate title
        if(empty($data['obs'])){
          $data['obs_err'] = 'Por favor insira status';
        }
      
          // Validate body
          if(empty($data['data'])){
          $data['data_err'] = 'Por Favor Insira a Data';
        }

         // Validate title
         if(empty($data['horario'])){
          $data['horario_err'] = 'Por favor insira o Horario';
        }
     
         // Validate body
         if(empty($data['procedencia'])){
          $data['procedencia_err'] = 'Por Favor Insira Procedencia';
        }

            // Validate title
        if(empty($data['empresa_tt'])){
          $data['empresa_err'] = 'Por favor insira o Empresa';
        }
    
        // Validate body
        if(empty($data['troca_pax'])){
          $data['troca_pax_err'] = 'Por Favor Insira Pax Troca';
        }

        // Validate title
        // if(empty($data['numero'])){
        //   $data['numero_err'] = 'Por favor insira o Numero';
        // }
     
         // Validate body
         if(empty($data['prefixo'])){
          $data['prefixo_err'] = 'Por Favor Insira Prefixo';
        }

            // Validate title
        if(empty($data['modelo'])){
          $data['modelo_err'] = 'Por favor insira o Modelo';
        }
    
        // Validate body
        if(empty($data['companhiaAerea'])){
          $data['companhiaAerea_err'] = 'Por Favor Insira Companhia Aerea';
        }
  
  
     // Make sure no errors
     if(empty($data['obs_err']) && empty($data['data_err']) && empty($data['horario_err']) && empty($data['procedencia_err']) && empty($data['empresa_err']) && empty($data['troca_pax_err']) && empty($data['prefixo_err']) && empty($data['modelo_err']) && empty($data['companhiaAerea_err'])){
      // Validated
      if($this->vooModel->novoVoo($data)){
       flash('post_message', 'Voo Adicionado');
       redirect('voos');
      } else {
        die('Something went wrong');
      }
  
      } else {
        // Load with no errors
       $this->view('voos/novo', $data);
      }
    
      } else {
       $data = [
         'obs' => '',
         'data' => '',
         'horario' => '',
         'procedencia' => '',
         'empresa_tt' => '',
         'troca_pax' => '',
         'numero' => '',
         'prefixo' => '',
         'modelo' => '',
         'companhiaAerea' => ''
       ];
      }
  
     $this->view('voos/novo', $data);
    }

    public function busca(){
      $busca = $this->vooModel->getvoosBusca();

      $data = [
        'voos' => $busca
      ];
  
      $this->view('voos/index', $data);
    }
}
