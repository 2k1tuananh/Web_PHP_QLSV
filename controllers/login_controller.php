<?php
require_once("./models/sinhvien.php");
require_once("./models/giangvien.php");
use models\DatabaseConnection;
class login_controller {
    public function run(){
        $dbh = DatabaseConnection::getInstance();
        $dbc = $dbh->getConnection();
        $this->giangvien = new giangvien($dbc);
        $this->db = new sinhvien($dbc);
        $action= filter_input(INPUT_GET,"action");
        if(method_exists($this,$action))
        {
            $this->$action();
        }
        else{
            $this->login();
        }
    }
    function login(){
        if(isset($_POST['login'])){
            $tk = $_POST['tk'];
            $mk = $_POST['mk'];
            $check = $tk[0];
            if(!empty($_POST)){
                $reuslt = $this->db->login($tk,$mk);
                
                if($reuslt)
                {
                    $info=$this->db->getinfoadmin($tk);
                    $_SESSION['id']=$info['id'];
                    $_SESSION['name']=$info['hovaten'];
                    $_SESSION['admin']=$info['maadmin'];
                    $_SESSION['ngaysinh']=$info['ngaysinh'];
                    $_SESSION['email']=$info['email'];
                    $_SESSION['start'] = time(); 
                    $_SESSION['expire'] = $_SESSION['start'] + (30*60);
                    $_SESSION['role_id'] = $info['role_id']; 
                    header('location:index.php?controller=admin');;
                }
            }
            if($check == "A")
            {
                $user =$this->db->mkchecksinhvien($tk,$mk);
                if(mysqli_num_rows($user)>0){
                    

                        $info=$this->db->getinfosinhvien1($tk);
                        $_SESSION['name']=$info['hovaten'];
                        $_SESSION['msv']=$info['masinhvien'];
                        $_SESSION['ngaysinh']=$info['ngaysinh'];
                        $_SESSION['lop']=$info['lop'];
                        $_SESSION['role_id'] = $info['role_id'];
                        $_SESSION['start'] = time(); 
                        $_SESSION['expire'] = $_SESSION['start'] + (30*60);
                        header('location:index.php?controller=sinhvien');
                }
            }
            else
            {
                $user =$this->giangvien->mkcheckgiangvien($tk,$mk);
                
                if(mysqli_num_rows($user)>0){
                        
                        $info=$this->giangvien->getinfogiangvien($tk);
                        var_dump($info);
                        $_SESSION['name']=$info['hovaten'];
                        $_SESSION['mgv']=$info['magiangvien'];
                        $_SESSION['ngaysinh']=$info['ngaysinh'];
                        $_SESSION['email']=$info['email'];
                        $_SESSION['start'] = time(); 
                        $_SESSION['expire'] = $_SESSION['start'] + (30*60);
                        $_SESSION['role_id'] = $info['role_id']; 
                        header('location:index.php?controller=sinhvien');
                        
                }
               
            }
            // 
        }
        
        require_once('./view/index.php');
    }
    function logout(){
        session_destroy();
        header('location:index.php?controller=login&action=login');
    }
    function doimk(){
        if(isset($_SESSION['msv']))
        {
            $data=$this->db->getinfosinhvien($_SESSION['msv']);
            if( isset($_POST['doimk']) ){
                $mkc = $_POST['mkc'];
                $mkm = $_POST['mkm'];
                $nhaplaimk = $_POST['nhaplaimk'];
                $check=$this->db->mkchecksinhvien($_SESSION['msv'],$mkc);
                if(mysqli_num_rows($check)!=[]){
                    if($mkm==$nhaplaimk){
                        $this->db->updatemksinhvien($_SESSION['msv'],$mkm);
                        $msg="Đổi lại mật khẩu thành công";
                        echo "<script type='text/javascript'>alert('$msg');</script>";
                    }
                    else{
                        $message = "Mật khẩu mới và nhập lại mật khẩu không đúng!!!";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                    }
                }
                else
                {
                    $message = "Mật khẩu không đúng";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                }
            }
        }
        else
        {
            $data=$this->giangvien->getinfogiangvien($_SESSION['mgv']);
          
            if( isset($_POST['doimk']) ){
                $mkc = $_POST['mkc'];
                $mkm = $_POST['mkm'];
                $nhaplaimk = $_POST['nhaplaimk'];
                $check=$this->giangvien->mkcheckgiangvien($_SESSION['mgv'],$mkc);
                if(mysqli_num_rows($check)!=[]){
                    if($mkm==$nhaplaimk){
                        $this->giangvien->updatemkgiangvien($_SESSION['mgv'],$mkm);
                        $msg="Đổi lại mật khẩu thành công";
                        echo "<script type='text/javascript'>alert('$msg');</script>";
                    }
                    else{
                        $message = "Mật khẩu mới và nhập lại mật khẩu không đúng!!!";
                        echo "<script type='text/javascript'>alert('$message');</script>";
                    }
                }
                else
                {
                    $message = "Mật khẩu không đúng";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                }
            }
        }
        require_once("./view/DoiMatKhau.php");
    }
}