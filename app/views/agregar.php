<?php 

?>



<!DOCTYPE html>

<html lang="en">

<head>

  <meta charset="UTF-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <script src="app/views/estilos/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="app/views/estilos/css/bootstrap.min.css">

  <title>.: Agregar :.</title>

</head>

<body>

  <h1>Nuevo Usuario</h1>



  <form method="post">

    <div class="mb-3">

      <label for="inputID" class="form-label">Id</label name="id">

      <input type="text" class="form-control" id="inputID" name="id">

    </div>

    <div class="mb-3">

      <label for="inputName" class="form-label">Name</label>

      <input type="text" class="form-control" id="inputName" name="id">

    </div>

    <div class="mb-3">

      <label for="inputLastName" class="form-label">LastName</label name="id">

      <input type="text" class="form-control" id="inputLastName">

    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

  </form>



</body>

</html>

<?php 
var_dump($_POST);




?>