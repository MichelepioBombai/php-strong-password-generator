<?php   

if(isset($_GET['length'])) {
    $length = $_GET['length'];
    
    
    function generate_password($length) {
      $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()_+{}';
      $password = '';
      for ($i = 0; $i < $length; $i++) {
        $password .= 	$characters[rand(0, strlen(	$characters) - 1)];
      }
      return $password;
    }

    $password = generate_password($length);
    
  }