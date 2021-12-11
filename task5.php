<?php
 $Data=file_get_contents("http://shopping.marwaradwan.org/api/Products/1/1/0/100/atoz");
$DataArry=json_decode($Data,true);  
$file=fopen("product.txt",'w') or die("can not open file");
foreach($DataArry['data'] as $key =>$value){
    echo $value['products_id'].',' 
    .$value['products_name']. ',' 
    .$value['products_description']. ','
    .$value['products_quantity']. ','
    .$value['products_image']. ','
    .$value['products_model']. ','
    .$value['products_date_added']. ','
    .$value['products_liked'].'<br>'.'Next Product'.'<br>';
}; 
$output =implode("",$value);
fwrite($file,$output);
fclose($file);
?>
