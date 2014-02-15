<?php

    require_once('connection/connect.php');
    

    if( isset($_POST['un'])){
        $username = preg_replace('#[^a-z0-9]#i', '', $_POST['un']);
        
        $sql = " SELECT user_id FROM user_tbl".
               " WHERE username = '$username' ".
               " LIMIT 1 ";
        $res = $con->query($sql);
       
        
        if( strlen($username) < 3 || strlen($username) > 12){
            
            echo '3 - 16 characters please';
            exit();
        }
        
        if(is_numeric($username[0])){
            echo 'username must begin with a letter';
            exit();
        }
       if($c=mysqli_num_rows($res) < 1){
           
           echo "$username is ok";
            exit();
       }else{
           echo "$username is taken";
            exit();
           
       }
    }

    if(isset($_POST['name'])){
         $name = mysqli_real_escape_string($con,$_POST['name']);
        $n_cap = ucwords($name);
         $uname = preg_replace('#[^a-z0-9]#i', '',$_POST['uname']);
         $pword = $_POST['pword'];
         $gender = preg_replace('#[^a-z]#', '',$_POST['gender']);
         $email = mysqli_real_escape_string($con,$_POST['email']);
        
        $ip = preg_replace('#[^0-9.]#', '', getenv('REMOTE_ADDR'));
        
        $sql =  "SELECT user_id FROM user_tbl ".
                " WHERE username = '$uname' ".
                " LIMIT 1 "; 
        $u_ch = $con->query($sql);
        $uname_check = mysqli_num_rows($u_ch);
        $sql = "SELECT user_id FROM user_tbl ".
                " WHERE email = '$email' ".
                " LIMIT 1 ";
        $e_ch = $con->query($sql);
        $mail_check = mysqli_num_rows($e_ch);
        if( $name == "" || $uname == "" || $pword == "" || $gender == "" || $email == "" ){
            
            echo " Fill in all fields";
        } else if( $uname_check > 0 ){
            echo "username already taken";
            exit();
        } else if($mail_check > 0){
            echo "email already taken";
            exit();
        } else if(strlen($uname) <3 || strlen($uname) > 12){
            echo '3 - 12 characters please';
            exit();
        } else if( is_numeric($uname[0])){
             echo 'username must begin with a letter';
            exit();
        } else if(strlen($pword) < 6 || strlen($pword) > 12){
             echo '6 - 12 password characters please';
        } else{
            
            $sql = " INSERT INTO user_tbl(name,username,pword,gender,email,ip) ".
                    " VALUES ('$n_cap','$uname','$pword','$gender','$email','$ip') ";
            $query = $con->query($sql);
            
            echo "Registration Complete!";
        }
        
    }

?>