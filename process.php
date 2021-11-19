<?php
  
  $file = file("visitor.txt");
  
  $int = 0;
  
  foreach($file as $line){
	  $int = (int)$line;
  }
  
  $file = fopen("visitor.txt", "w");

  fwrite( $file, ++$int );
  fclose($file);

  echo $int;

?>