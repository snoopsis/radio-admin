<?php

class Crews extends Controller{
  public function __construct(){
    if(!isLoggedIn()){
      redirect('users/login');
    }

    $this->chegadaModel = $this->model('User');

    $this->crewModel = $this->model('Crew');
  }

  public function index(){
    $crews = $this->crewModel->getCrews();

    $data = [
      'title' => 'Crew Offshore',
      'description' => 'Listagem de Crew Offshore',
      'crews' => $crews
    ];
    $this->view('crews/index', $data);
  }

  public function editar($id){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
      // Sanitize POST array
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
  
      $data = [
       'id' => $id,
       'name' => trim($_POST['name']),
       'sispat' => trim($_POST['sispat']),
       'cabin' => trim($_POST['cabin']),
       'country' => trim($_POST['country']),
       'company' => trim($_POST['company']),
       'funcao' => trim($_POST['funcao']),
       'cpf' => trim($_POST['cpf']),
       'dob' => trim($_POST['dob']),
       'celular' => trim($_POST['celular']),
       'email' => trim($_POST['email']),
       'embarque' => trim($_POST['embarque']),
       'desembarque' => trim($_POST['desembarque'])
     ];
  
      // Validated
      if($this->crewModel->updateCrew($data)){
       flash('post_message', 'Tripulante Atualizado');
       redirect('crews/index');
      } else {
        // Load with no errors
       $this->view('crews/editar', $data);
      }
    
      } else {
         // Get existing crew from model
      $crew = $this->crewModel->getCrewById($id);

            
       $data = [
         'id' => $id,
         'name' => $crew->name,
         'sispat' => $crew->sispat,
         'cabin' => $crew->cabin,
         'country' => $crew->country,
         'company' => $crew->company,
         'funcao' => $crew->funcao,
         'cpf' => $crew->cpf,
         'dob' => $crew->dob,
         'celular' => $crew->celular,
         'email' => $crew->email,
         'embarque' => $crew->embarque,
         'desembarque' => $crew->desembarque
       ];
      }
  
  
     $this->view('crews/editar', $data);
    }

        public function delete($id){
          // Get existing crew from model
          $crew = $this->crewModel->getCrewById($id);
          
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
          if($this->crewModel->deleteCrew($id)){
            flash('post_message', 'Tripulante Removido');
            redirect('crews');
          } else {
            die('something went wrong');
          }
      } else {
        redirect('crews');
      }
    }

    public function novo(){
      if($_SERVER['REQUEST_METHOD'] == 'POST'){
      // Sanitize POST array
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
  
      $data = [
       'name' => trim($_POST['name']),
       'sispat' => trim($_POST['sispat']),
       'cabin' => trim($_POST['cabin']),
       'country' => trim($_POST['country']),
       'company' => trim($_POST['company']),
       'funcao' => trim($_POST['funcao']),
       'cpf' => trim($_POST['cpf']),
       'dob' => trim($_POST['dob']),
       'celular' => trim($_POST['celular']),
       'email' => trim($_POST['email']),
       'embarque' => trim($_POST['embarque']),
       'desembarque' => trim($_POST['desembarque']),
       'name_err' => '',
       'sispat_err' => '',
       'cabin_err' => '',
       'country_err' => '',
       'company_err' => '',
       'funcao_err' => '',
       'cpf_err' => '',
       'dob_err' => '',
       'celular_err' => '',
       'email_err' => '',
       'embarque_err' => '',
       'desembarque_err' => ''
     ];

    
     // Validate nome
     if(empty($data['name'])){
       $data['name_err'] = 'Por favor insira o Nome';
     }
  
      // Validate sispat
      if(empty($data['sispat'])){
       $data['sispat_err'] = 'Por Favor Insira Sispat';
     }

      // Validate cabin
      if(empty($data['cabin'])){
        $data['cabin_err'] = 'Por Favor Insira Cabin';
      }

       // Validate country
       if(empty($data['country'])){
        $data['country_err'] = 'Por Favor Insira Country';
      }

       // Validate company
       if(empty($data['company'])){
        $data['company_err'] = 'Por Favor Insira Empresa';
      }

       // Validate Rank
       if(empty($data['funcao'])){
        $data['funcao_err'] = 'Por Favor Insira Rank';
      }
  
  
     // Make sure no errors
     if(empty($data['name_err']) && empty($data['sispat_err']) && empty($data['cabin_err']) && empty($data['country_err']) && empty($data['company_err']) && empty($data['funcao_err'])){
      // Validated
      if($this->crewModel->novoCrew($data)){
       flash('post_message', 'Tripulante Adicionado');
       redirect('crews');
      } else {
        die('Something went wrong');
      }
  
      } else {
        // Load with no errors
       $this->view('crews/novo', $data);
      }
    
      } else {
       $data = [
         'name' => '',
         'sispat' => '',
         'cabin' => '',
         'country' => '',
         'company' => '',
         'funcao' => '',
         'cpf' => '',
         'dob' => '',
         'celular' => '',
         'email' => '',
         'embarque' => '',
         'desembarque' => ''
       ];
      }
  
     $this->view('crews/novo', $data);
    }

    public function busca(){
      $busca = $this->crewModel->getCrewsBusca();

      $data = [
        'title' => 'Crew Offshore',
        'description' => 'Listagem de Crew Offshore',
        'crews' => $crews
      ];
  
      $this->view('crews/index', $data);
    }
}
