<?php
require_once 'Validation.php';
require_once 'LoginValidation.php';
require_once 'InsertionValidation.php';
require_once 'InsertIntoDatabase.php';
require_once 'ResetValidation.php';
require_once 'ResetPassword.php';

/**
 * Class to manage Url
 */
class UrlManagment{

  public $session_validator;

  function __construct(){
  $this->session_validator=new Validation();
  }

  /**
   * Function to redirect user.
   */
  public function Login(){
    if (isset($_POST['submit'])) {
      $email_id=$_POST['Email_id'];
      $password=$_POST['Password'];
      $is_valid=loginValidation($email_id,$password);
     if($is_valid){
        header('location:/home');
      }
      else{
        require_once './View/Login.php';
      }
    }
    else{
      require_once './View/Login.php';
    }
  }

  /**
   * Function to redirect user.
   */
  public function forget(){
    if(isset($_POST['submit'])){
      sendToken($_POST['Email_id']);
    }
    require_once './View/ForgetPassword.php';
  }

  /**
   * Function to redirect user.
   */
  public function reset(){
    if(isset($_POST['submit'])){
      resetPassword($_POST['Password']);
    }
  }

  /**
   * Function to redirect user.
   */
  public function register(){
    if(isset($_POST['submit'])){
        insert($_POST['Email_id'],$_POST['Password'],$_POST['User_firstname'],$_POST['User_lastname']);
    }
    else{
    require_once './View/Registration.php';
    }
  }

  /**
   * Function to redirect user.
   */
  public function otp(){
    if (isset($_POST['submit'])) {
       otpcheck($_POST['OTP']);
    }
      require_once './View/OTP.php';
    }

  /**
   * Function to redirect user.
   */
  public function home(){
    if($this->session_validator->isSessionSet()){
      require_once './View/Home.php';
    }
    else{
      require_once './View/Login.php';
    }
  }

  /**
   * Function to redirect user.
   */
  public function logout(){
    $this->session_validator->destroySession();
    $message = urlencode('logged out successfully');
    header("Location:/?message={$message}");
  }

  /**
   * Function to redirect user.
   */
  public function profile(){
    require_once 'Controller/fetchUserData.php';
  }

  /**
   * Function to redirect user.
   */
  public function post(){
    require_once './View/post.php';
  }

  /**
   * Function to redirect user.
   */
  public function default(){
    require_once './View/Login.php';
  }
}
