<?php 
    session_start();
    if (!isset($_SESSION['usuarios'])) { 
        $_SESSION['usuarios'] = [];
    }
    $listado = $_SESSION["usuarios"];
    $index = $_GET["k"];                //Index a modificar
    
    /* Datos modificados */
    $first_name = $listado[$index]["first_name"];
    $last_name = $listado[$index]["last_name"];
    $created_at = $listado[$index]["created_at"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>
<body>
<h1>Modify</h1>
    <br>
    <form method="post" action="modify.php">
        <div class="row">
          <div class="col">
            <input type="text" class="form-control" placeholder="First name" id="name" name="name" value="<?php echo $first_name;?>" required>
          </div>
          <div class="col">
            <input type="text" class="form-control" placeholder="Last name" id="lastname" name="lastname" value="<?php echo $last_name;?>" required>
          </div>
          <input type="hidden" name="key" id="key" value="<?php echo $index;?>" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Modify</button>
    <br>
    <a href="listuser.php">Users List</a>

</body>
</html>