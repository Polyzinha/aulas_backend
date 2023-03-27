<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <style>
    body{
        background-color:
        <?php if (isset($_POST['cor'])) {
          echo $_POST['cor'] ;
        }else{
            echo "white";
        }
          ?>;
    }
   </style>
</head>
<body>
    <h1>Mudança de cor</h1>
    <hr>
    <form action="form1.php" method="post">
<label for="cor">Escolha uma cor</label>
<input type="color" name="cor" id="cor">
<button type="submit">Ok</button>
    </form>
</body>
</html>