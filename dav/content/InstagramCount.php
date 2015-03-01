<?php
$a = file_get_contents("https://api.instagram.com/v1/users/481503861/?access_token=53042481.ab103e5.0c6f8f50471a4e1f97595f8db529a47a");
echo json_encode($a);

  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');    
  $instaAPI = file_get_contents("https://api.instagram.com/v1/users/1202155813/?access_token=1202155813.467ede5.8cc95a8e2bb54cec8c85a0c155f7e2e7"); // Add your ID & Access Token   
  echo json_encode($instaAPI);
?>
