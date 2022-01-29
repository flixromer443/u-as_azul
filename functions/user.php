<?php
    class user{
        protected $email;
        protected $password;
        function __construct($email,$password){
            $this->email=$email;
            $this->password=sha1(md5($password));
        }
        public function validate_user(){
            include("../config/conexion.php");
            $query="select * from users where email='$this->email' and password='$this->password'";
            $res=mysqli_query($link,$query);
            if(mysqli_num_rows($res)>0){
                while($row=mysqli_fetch_array($res)){
                    return $row;
                }
            }else{
                return 0;
            }
        }

    }
    //1---admin
    //2--alumno
    $obj=new user(trim($_POST['email']),trim($_POST['password']));
    $res=$obj->validate_user();
    if($res==0){
        header("Location:../pages/iniciar_sesion.php");
    }else{
        if($res['rol']==1){
            session_start();
            $_SESSION['admin']=$res;
            header("Location:../admin/pages/panel.php");
        }
        
    }
?>