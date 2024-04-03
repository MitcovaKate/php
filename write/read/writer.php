<?
// if(isset($_GET['clients_name'])){
//     $clients_name= $_GET['clients_name'];
//save to file
    // $file=fopen('./client.txt', "w");
    //  fwrite($file,$clients_name);
    //  fclose($file);
// }
// else{
//     print("Clients name paramentr missing");

// }
//?name=John&email=fd@mail.com&age=30&active=true
      // $name=$_GET['name'];
      // $email=$_GET['email'];
      // $age=$_GET['age'];

// Определить необходимые ключи
$urlKeys  = ['name', 'email', 'age','active'];

// Проверить наличие всех ключей
foreach ($urlKeys as $key) {
  if (!isset($_GET[$key])) {
    echo "Отсутствует параметр: $key";
    return;
  }
}
$client = [];
foreach ($urlKeys as $key) {
  switch ($key) {
    case 'age':
      $client[$key] = (int) $_GET[$key];
      break;
    case 'active':
      $client[$key] = (bool) $_GET[$key];
      break;
    default:
      $client[$key] = $_GET[$key];
  }
}
      // $client=[
      //   'name'=> $name,
      //   'email'=>$email,
      //   'age'=>$age
      // ];


      $file =fopen('./data/client.json', "w");
        fwrite($file,json_encode($client,JSON_PRETTY_PRINT));
       fclose($file);
    

// 

?>
