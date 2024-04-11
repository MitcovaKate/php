<?
function load($name){
$file=fopen("./data/{$name}.json}","r");
$data=json_decode(fread($file,100000), true);
fclose($file);
return $data;
}

function save ($data,$name){
    $file=fopen("./data/{$name}.json","w");
    fwrite($file,json_encode($data,0,4));
    fclose($file);
}
?>