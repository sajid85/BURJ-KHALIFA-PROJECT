<?php 
    session_start();
    if(isset($_REQUEST['submit'])){
     
        $name = $_REQUEST['name'];
        $username = $_REQUEST['username'];  
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $confirmpassword= $_REQUEST['confirmpassword'];
        $gender = $_REQUEST['gender']; 
        $dob = $_REQUEST['dob'];
       
        if($username == "" || $password == "" ||empty($name)|| $email == "" || empty($gender)||empty($dob)) {
            echo "Null";
            
        }
        elseif( $password != $confirmpassword  ) {
            echo "Password not match";
            
        }
        else{
            $file = fopen('user.txt', 'a');
            $user = $username."|".$password."|".$name."|".$email."|".$gender."|".$dob."\r\n";
            fwrite($file, $user);
            header('location: login.php');
        }
    }else{
        echo "invalid user.";
    }
?>