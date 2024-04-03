// <?
// $file = fopen("./client.txt","r");
// $name = fread($file,100);
// print($name);
// ?>
<?
$file = fopen("./data/client.json","r");
$client =json_decode(fread($file,1000),true);
var_dump($client);
?>
