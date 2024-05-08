<?
if(empty($_GET) && empty($_POST)){
    $new_match = true;
}
else{
    $new_match = false;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app.css">
    <title>New match</title>
</head>
<body>
    <table class="match-table">
        <tr>
            <td colspan="2"><h1>NEW MATCH</h1></td>
        </tr>
        <tr>
            <td ><h2>Player1</h2></td>
            <td ><h2>Player2</h2></td>
        </tr>
        <tr>
            <td>
                <form action="/login-action.php" method="POST">
                    <input type="text" name="username" placeholder="username">
                    <input type="password" name="password" placeholder ="password">
                    <p>no account <a href="">register</a></p>
                    <button>ENTER</button>
                </form>
            </td>
            <td> <form action="/login-action.php" method="POST">
                    <input type="text" name="username" placeholder="username">
                    <input type="password" name="password" placeholder ="password">
                    <p>no account ?<a href="">register</a></p>
                    <button>ENTER</button>
                </form>
            </td>
        </tr>
    </table>
</body>
</html>