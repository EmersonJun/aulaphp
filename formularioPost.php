<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
            nome: <input type="text" name="nome">
            <input type="submit" value="calcular">
        </form>
    <?php 
        echo "<h2>post</h2>";
        var_dump($_POST);
        echo "<h2>get</h2>";
        var_dump($_GET);
        echo "<h2>request</h2>";
        var_dump($_REQUEST);

        if($_SERVER["REQUEST_METHOD"] == "GET"){
            echo "recebido via get";
        } elseif($_SERVER["REQUEST_METHOD"] == "POST"){
            echo "recebido via post";
        } else {
            echo "recebido via request";
        }
    ?>
</body>
</html>