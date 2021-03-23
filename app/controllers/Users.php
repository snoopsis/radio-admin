<?php
class Users extends Controller{
  public function __construct(){
   $this->userModel = $this->model('User');
  }

  public function register(){
    // Check for POST
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      // Process form
    
      // Sanitize POST data
      $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      // Init data
      $data=[
        'name' => trim($_POST['name']),
        'email' => trim($_POST['email']),
        'um' => trim($_POST['um']),
        'password' => trim($_POST['password']),
        'confirm_password' => trim($_POST['confirm_password']),
        'name_err' => '',
        'email_err' => '',
        'password_err' => '',
        'confirm_password_err' => '',
        'um_err' => '',
        ];

      // Validate email
      if(empty($data['email'])){
        $data['email_err'] = "Por favor insira o Email";
      } else {
        // Check email
        if($this->userModel->findUserByEmail($data['email'])){
          $data['email_err'] = 'Email ja existe';
        }
      }

      // Validate name
      if(empty($data['name'])){
      $data['name_err'] = "Por favor insira o Nome";
      }    

      // Validate UM
      if(empty($data['um'])){
        $data['um_err'] = "Por favor insira unidade maritima";
        }  
      
      // Validate password
      if(empty($data['password'])){
        $data['password_err'] = "Por favor insira Senha";
        }  elseif (strlen($data['password']) < 6){
          $data['password_err'] = 'Senha precisa no minimo 6 carateres';
        }

            // Validate Confirm Password
      if(empty($data['confirm_password'])){
        $data['confirm_password_err'] = "Por favor insira senha";
        }  elseif (strlen($data['confirm_password']) < 6){
          $data['confirm_password_err'] = 'Por favor confirme a senha';
        } else {
          if($data['password'] != $data['confirm_password']){
            $data['confirm_password_err'] = 'Senhas digitadas nao sao iguais';
          }
        }

        // Make sure errors are empty
        if(empty($data['email_err']) && empty($data['name_err']) && empty($data['um_err']) && empty($data['password_err']) && empty($data['confirm_password_err'])){
          // Validated

           // Hash Password
        $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

        // Register User
       if($this->userModel->register($data)){
         flash('register_success', 'Registro completo pode fazer login');
        redirect('users/login');
       } else {
         die('algo deu errado');
       }
    
        } else {
          // Load view with errors
          $this->view('users/register', $data);
        }
    
    } else {
      // Init data
      $data=[
      'name' => '',
      'um' => '',
      'email' => '',
      'password' => '',
      'confirm_password' => '',
      'name_err' => '',
      'um_err' => '',
      'email_err' => '',
      'password_err' => '',
      'confirm_password_err' => ''
      ];

      // Load view
      $this->view('users/register', $data);
    }
  }

  public function login(){
    // Check for POST
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
      // Process form
       // Sanitize POST data
       $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

       // Init data
       $data=[
         'email' => trim($_POST['email']),
         'password' => trim($_POST['password']),
         'email_err' => '',
         'password_err' => ''
         ];

          // Validate email
      if(empty($data['email'])){
        $data['email_err'] = "Please insira o email";
      }

       // Validate password
       if(empty($data['password'])){
        $data['password_err'] = "Por favor insira a senha";
      }

      // Check for user/email
      if($this->userModel->findUserByEmail($data['email'])){
      // User found
      } else {
        $data['email_err'] = 'Usuario nao foi encontrado';
      }

       // Make sure errors are empty
       if(empty($data['email_err']) && empty($data['password_err'])){
        // Validated
        // Check and set logged in user
        $loggedInUser = $this->userModel->login($data['email'], $data['password']);

        if($loggedInUser){
          // Create session
          $this->createUserSession($loggedInUser);
        } else {
         $data['password_err'] = 'Senha invalida / Conta Inativa';

         $this->view('users/login', $data);
        }
      } else {
        // Load view with errors
        $this->view('users/login', $data);
      }

    } else {
      // Init data
      $data=[      
      'email' => '',
      'password' => '',      
      'email_err' => '',
      'password_err' => ''
      ];

      // Load view
      $this->view('users/login', $data);
    }
  }

  public function createUserSession($user){
    $_SESSION['user_id'] = $user->id;
    $_SESSION['email'] = $user->email;
    $_SESSION['name'] = $user->name;
    $_SESSION['um'] = $user->um;
    redirect('pages/index');
  }

  public function logout(){
    unset($_SESSION['user_id']);
    unset($_SESSION['user_email']);
    unset($_SESSION['user_name']);
    unset($_SESSION['user_um']);
    session_destroy();
    redirect('users/login');
  }

  public function isLoggedIn(){
    if(isset($_SESSION['user_id'])){
      return true;
    } else {
      return false;
    }
  }

}