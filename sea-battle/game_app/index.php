<?require_once 'lib.php'?>
<?require_once 'map.php' ?>
<? $map = load_map() ?>
<? $coords = get_coords($_GET)?>
<?$map = shoot($map,$coords)?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/app.css">
    <title>SEA BATTLE</title>
</head>
<body>
    <div class="container">
        <?= render_map($map)?>
    </div>
</body>
</html>
<? save_map($map) ?> 
