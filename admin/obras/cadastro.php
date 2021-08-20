<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>testeBD</title>
  </head>
  <body>
    
    
      <div class="container">
        <div class="row">
          <?php

            Require_once ("conexao.php");

              $titulo = $_POST['titulo'];
              $resumo = $_POST['resumo'];
              $ano = $_POST['ano'];
              $url = $_POST['url'];
              $autora_obra = $_POST['autora_obra'];
              $tipo_obra = $_POST['tipo_obra'];
              $editora_obra = $_POST['editora_obra'];
              

              
               
              $sql = "INSERT INTO obras 
              (titulo, resumo, ano, url, autora_obra, tipo_obra, editora_obra) VALUES ('$titulo','$resumo','$ano','$url', '$autora_obra', '$tipo_obra', '$editora_obra')";
              if (mysqli_query($conn, $sql)) {
                    echo "New record created successfully";
              } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
              }
              mysqli_close($conn);
          ?>
         
        </div>  
      </div>  
          <div class="d-grid gap-2 col-4 mx-auto">
           <a href="index.php" class="btn btn-success">Voltar</a>
          </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    
  </body>
</html>