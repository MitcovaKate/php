function shoot($map ,$coords){
if($coords){
     $map[$coords[0]][$coords[1]]=1; 
}
return $map;
}

function get_coords($request){
     if (isset($request['shoot'])) {
          $coords = explode('x', $request['shoot']);
        return $coords;
}
return null;
}



function save_map($map){
 file_put_contents("./data/map.json",json_encode($map));  
}

function load_map(){
  return  json_decode(file_get_contents("./data/map.json"),true);  
    }
?>
