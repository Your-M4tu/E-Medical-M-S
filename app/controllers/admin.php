<?php
class admin extends Controller
{
  protected $message;
  protected $user;
  function __construct()
  {
    $this->message=null;
    $this->user=$this->model('Users');
    $this->dt1=$this->model('Dt1');
    session_start();
  }

  public function usercheck()
  {
   $user_check = $_SESSION['username'];
   $login_session = $this->user->dbusercheck($user_check);
   if(!isset($_SESSION['username'])||!isset($login_session))
    header("location: /jvn/public/home/index");
  }

  public function manage()
  {
    $this->usercheck();
    $this->view('manage',['message'=>$this->message]);
  }

  public function logout()
  {

    if(session_destroy())
      header("location: /jvn/public/home/index");

  }

  public function changepassword ()
  {
    $this->usercheck();
    if(isset($_POST['sub']))
    {
    $this->message=$this->user->dbchangepassword($_POST['username'],$_POST['password'],$_POST['new']);
    $this->view('changepassword',['message'=>$this->message]);
    }
    else
    $this->view('changepassword',['message'=>$this->message]);
  }

  public function idcreation()
  {
    $this->usercheck();
    if(isset($_POST['sub']))
    {
    $this->message=$this->user->dbidcreation($_POST['key'],$_POST['keycount']);
    $this->view('idcreation',['message'=>$this->message]);
    }
    else
      $this->view('idcreation',['message'=>$this->message]);
  }

  public function structcreation()
  {
    $this->usercheck();
    if(isset($_POST['subs']))
    {
    $phc=$_SESSION['phc'];
  	$i=1;
    $scm[0]=0;
  	$no=$_SESSION['n'];
  	$dtc=$_SESSION['d'];
    while($i <= $no)
      {
  	      $panct = $_POST['panchayat'.$i];
  	      $ward = $_POST['ward'.$i];
  	      $bl = $_POST['pa'.$i];
  	      $ul = $_POST['pb'.$i];
  	      $scm[$i]=$this->dt1->dbcreatestructure($dtc,$phc,$panct,$ward,$bl,$ul);
          $i++;
      }
      $this->view('structurecreation',['scm'=>$scm]);
    }
  else
  $this->view('structurecreation');
  }

  public function removeuser()
  {
    $this->usercheck();
    if(isset($_POST['subun']))
    {
      $this->message=$this->user->dbremoveuser($_POST['username']);
      $this->view('removeuser',['message'=>$this->message]);
    }
    if(isset($_POST['subid']))
    {
      $this->message=$this->user->dbremoveid($_POST['id']);
      $this->view('removeuser',['message'=>$this->message]);
    }
    else
  $this->view('removeuser');
  }

  public function viewusers()
  {
    $this->usercheck();
    $res=$this->user->dbviewall();
    $this->view('viewusers',['result'=>$res]);
  }
  public function viewpanchayat()
  {
    $this->usercheck();
    $res=$this->dt1->dbdisplayall();
    $this->view('viewpanchayat',['result'=>$res]);
  }

  public function removepanchayat()
  {
    $this->usercheck();
    if(isset($_POST['subpn']))
    {
      $this->message=$this->dt1->dbdeleteselected($_POST['panchayatname']);
      $this->view('removepanchayat',['message'=>$this->message]);
    }
    else
  $this->view('removepanchayat');
  }
}
  ?>
