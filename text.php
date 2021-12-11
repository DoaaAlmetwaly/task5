
<?php
$file=fopen("product.txt",'r') or die("can not open file");
while(!feof($file)){
    echo fgets($file).'<br>';

} 
fclose($file);


?>