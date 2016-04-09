<?php
  header('Access-Control-Allow-Origin: *');
  header('Content-Type: application/json');    
  $insta_count_obj = file_get_contents("https://api.instagram.com/v1/users/884494772/?access_token=1202155813.467ede5.8cc95a8e2bb54cec8c85a0c155f7e2e7");
  $insta_media_obj = file_get_contents("https://api.instagram.com/v1/users/884494772/media/recent/?access_token=1202155813.467ede5.8cc95a8e2bb54cec8c85a0c155f7e2e7&scope=public_content");
  $insta_meta_array = array("meta" => json_decode($insta_count_obj, true));
  $insta_about_array = array("about" => json_decode($insta_media_obj, true));
  $insta_api_data = json_encode(
  	array_merge(
  		$insta_meta_array,
  		$insta_about_array
  		)
  	);

  echo $insta_api_data;

?>
