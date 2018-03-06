<?php
class home extends Controller
{
 protected $user;
  function __construct()
  {
      $this->user =$this->model('Users');
  }

  public function index()
  {
    $this->view('index');
  }

  public function login()
  {
    $this->view('login');
  }
  public function validate()
  {
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
    $myusername = $_POST['log_username'];
    $mypassword = $_POST['log_password'];
    $row=$this->user->validation($myusername,$mypassword);
    if(isset($row))
    {
      session_start();
      $_SESSION['username']=$myusername;
      if(!strcmp($row['id'],"2"))
      header("location: /jvn/public/admin/manage");
      else
      header("location: /jvn/public/user/userhome");
    }
    else
    $this->view('index',['value'=>$myusername]);
  }
}

public function register()
{
  if(isset($_POST['sr']))
  {
  $designation=$_POST['designation'];
  $id=$_POST['id'];
  $name=$_POST['name'];
  $sex=$_POST['sex'];
  $age=$_POST['age'];
  $mail_id=$_POST['mail_id'];
  $mob=$_POST['mob'];
  $user_name=$_POST['username'];
  $password=$_POST['password'];
  $msg=$this->user->dbregister($designation,$id,$name,$sex,$age,$mail_id,$mob,$user_name,$password);
  $this->view('register',['message'=>$msg]);
  }
  else
    $this->view('register');
}
}
 ?>
