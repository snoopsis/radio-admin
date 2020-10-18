<?php

class Rotinas extends Controller{
  public function __construct(){
    if(!isLoggedIn()){
      redirect('users/login');
    }

    $this->chegadaModel = $this->model('User');
  }

  public function index(){

    $data = [
      'title' => 'Rotinas Offshore',
      'description' => 'Listagem de Rotinas Offshore'
    ];
  

    $this->view('rotinas/index', $data);
  }

}
