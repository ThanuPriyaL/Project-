<?php
  extract($_REQUEST);
  $file=fopen('form-data.txt','a');
 
  fwrite($file,'name:');
  fwrite($file, $name."\r\n");
  fwrite($file,'email:');
  fwrite($file, $email ."\r\n");
  fwrite($file,'phone:');
  fwrite($file, $phone ."\r\n");
  fwrite($file,'date:');
  fwrite($file, $date ."\r\n");
  fwrite($file,'subject:');
  fwrite($file, $subject ."\r\n");
  fwrite($file,'message:');
  fwrite($file, $message ."\r\n");
  fclose($file);
            
?>