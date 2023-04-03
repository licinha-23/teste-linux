<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Linux PHP</title>
</head>

<?php
$servername = "localhost";
$database = "linux-db";
$username ="root";
$password = "";



$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

  ?>

<body>
    <header>
        <h1>Notas Alunos</h1>
    </header>
    <div>
    <br>
    <?php
    $sql = "SELECT * FROM alunos";
    $exec = mysqli_query($conn,$sql);
    while ($dados = mysqli_fetch_assoc($exec) ) {
  ?>
     <div>
     <hr>
    <p><strong><?php echo $dados['Nome']?></strong></p>
    <p> * Idade <?php echo $dados['Idade']?></p>
    <p> * Nota <?php echo $dados['Nota']?></p>
    
    </div>
    
    <?php
        }
    ?>
    
    <footer>
        <h2> Alice-Linux </h2>
    </footer>
</body>
</html>
<?php
    
 mysqli_close($conn);

?>