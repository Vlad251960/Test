<?php

  $n1 = $_REQUEST["num1"];

  $file1 = fopen("file1.txt", "r");
  $str1 = fread($file1, filesize("file1.txt"));
  fclose($file1);
     

 // $myObj->res = $str;
 
 //$str2 = '{"name1":"Ivanov","arr1":[["Aaaaaaaaa","Bbbbbbbbbbb"],["Zzzzzzzzzzzzz","Xxxxxxxxxxxx"]]}';

 $myJSON1 = json_decode($str1);
 $myJSON2 = json_encode($myJSON1);

 //if ($q == "Donald Duck")
   echo $myJSON2;

?>
