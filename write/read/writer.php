<?
if(isset($_GET['clients_name'])){
    $clients_name= $_GET['clients_name'];
    //save to file
    $file=fopen('./client.txt', "w");
     fwrite($file,$clients_name);
     fclose($file);
}
else{
    print("Clients name paramentr missing");

}
?>
