<?php
    include("../config/conexion.php");
    switch($_POST['verbo']){
        case 'create':{
            $firstname=trim($_POST['firstname']);
            $lastname=trim($_POST['lastname']);
            $document=trim($_POST['document']);
            $document_type=trim($_POST['document_type']);
            $phone=trim($_POST['code']).trim($_POST['phone']);
            $email=trim($_POST['email']);
            if(!empty($firstname)&&!empty($lastname)&&!empty($document)&&!empty($document_type)&&!empty($phone)&&!empty($email)){
                include("../config/conexion.php");
                $query="SELECT * FROM users WHERE email='$email'";
                $res=mysqli_query($link,$query);
                if(mysqli_num_rows($res)>0){
                    echo json_encode(1);

                }else{
                    $query="SELECT * FROM students WHERE document='$document' and document_type='$document_type'";
                    $res=mysqli_query($link,$query);
                    
                    if(mysqli_num_rows($res)>0){
                        echo json_encode(1);

                    }else{
                        $rol=2;
                        $stmt=mysqli_prepare($link,"INSERT INTO users(email,password,rol) VALUES(?,?,?)");
                        mysqli_stmt_bind_param($stmt,'ssi',$email,sha1(md5($document)),$rol);
                        mysqli_stmt_execute($stmt);
                
                        $stmt=mysqli_prepare($link,"UPDATE  students SET firstname=?, lastname=?,document_type=?,document=?,phone=? WHERE firstname is null and uid is not null");
                        mysqli_stmt_bind_param($stmt,'ssiii',strtoupper($firstname),strtoupper($lastname),$document_type,$document,$phone);
                        mysqli_stmt_execute($stmt);
                        echo json_encode(0);
                    }
                    
            
                }
            }
        }
        case 'delete':{
           $stmt=mysqli_prepare($link,"DELETE FROM users WHERE id=?");
            mysqli_stmt_bind_param($stmt,'i',trim($_POST['uid']));
            mysqli_stmt_execute($stmt); 
            header("Location:../admin/pages/listado.php");
        }
    }
?>