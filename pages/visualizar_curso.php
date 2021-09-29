<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

  <title>MAPA | Cursos</title>
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="./alunos.php">Alunos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./cursos.php">Cursos</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>

  <main class="d-flex container align-items-center" style="height: calc(100vh - 56px); ">
    <div class="container-fluid border rounded p-5" style="box-shadow: 1px 2px 6px 4px rgba(0,0,0,0.1)">
      <button type="button" class="btn btn-primary">Voltar</button>

      <div class="row mt-5">
        <div class="col-md-3">
          <p class="font-weight-bold">ID:</p>
        </div>
        <div class="col-md-6">
          <p class="font-weight-bold">Nome do curso:</p>
        </div>
        <div class="col-md-3">
          <p class="font-weight-bold">Status:</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <p>1</p>
        </div>
        <div class="col-md-6">
          <p>Jonatan Renan</p>
        </div>
        <div class="col-md-3">
          <p>Ativo</p>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-md-3">
          <p class="font-weight-bold">Data de Início:</p>
        </div>
        <div class="col-md-3">
          <p class="font-weight-bold">Data de término:</p>
        </div>
        <div class="col-md-6">
          <p class="font-weight-bold">Descrição:</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <p>4/12/2000</p>
        </div>
        <div class="col-md-3">
          <p>05/01/1875</p>
          
        </div>
        <div class="col-md-6">
          <p>Sistemas para Internet</p>
        </div>
      </div>
    </div>
  </main>

</body>

</html>