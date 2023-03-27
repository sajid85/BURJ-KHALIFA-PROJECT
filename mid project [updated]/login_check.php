<?php
session_start();

if (isset($_REQUEST['submit'])) {

  $Name = $_REQUEST['Name'];
  $Password = $_REQUEST['Password'];

  if($username == "" && $password == "") {
            
    header('location: homepage.php');
}
else{
    $file = fopen('user.txt', 'r');
    
    while(!feof($file)){
        $data = fgets($file);
        $user = explode('|', $data);
        
        if($username == trim($user[0]) && $password == trim($user[1]))
        {
            $_SESSION['name']=$user[0];
            $_SESSION['password']=$user[1];
           
            $_SESSION['flag'] = "true";
            header('homepage.php');
            
        }
        
    }
    
        
            echo "invalid credentials!!";
        
}
}
?>