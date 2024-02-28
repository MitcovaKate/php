<?
$day = rand(1,7);

print($day);

switch($day){
    case 1:print("Mo");break;
    case 2:print("Tu");break;
    case 3:print("Wd");break;
    case 4:print("Th");
    case 5:print("Fr");
    case 6:print("St");break;
    case 7:print("Su");break;
    default :print("Wrong day number!");
}
