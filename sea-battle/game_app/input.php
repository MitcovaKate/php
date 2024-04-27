<?
    if (isset($_GET['shoot'])) {
        $coords = explode('x', $_GET['shoot']);
        header('Location: /');
        //print ($coords[0]);
        //print ($coords[1]);
    }
?>