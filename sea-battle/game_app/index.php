<?require_once 'lib.php'?>
<?require_once 'map.php' ?>
<? $map_ship = load_map('map_ship');?>
<? $map_state = load_map('map_state');?>
<?$coords = get_coords($_GET)?>
<?$map_state = shoot($map_state,$coords)?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/app.css">
    <title>SEA BATTLE</title>
</head>
<body>
    <div class="container">
     
      <table class="navbar">
        <tr>
            <td><h2>SEA BATTLE</h2></td>
            <td><a href="/match.php">NEW MATCH</a></td>
        </tr>
      </table>
      
    </div>
</body>
</html>
<? save_map($map_state,'map_state') ?> 
