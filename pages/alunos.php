<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">

  <title>MAPA | Alunos</title>
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

    <div class="div" style="width: 100%;">
      <div class="row">
        <a type="button" class="btn btn-primary" href="./adicionar_aluno.php">Adicionar Aluno</a>
      </div>

      <div class="row mt-3">
        <table class="table table-hover table-dark">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nome</th>
              <th scope="col">Ações</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row" class="align-middle">1</th>
              <td class="align-middle">Jonatan Renan Vitoriano da Silva</td>
              <td style="width: 25%">
                <a type="button" class="btn btn-primary" href="./visualizar_aluno.php">Visualizar</a>
                <a type="button" class="btn btn-secondary" href="./editar_aluno.php">Editar</a>
                <a type="button" class="btn btn-danger">Excluir</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>



  </main>

</body>

</html>