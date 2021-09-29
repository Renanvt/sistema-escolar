
  <?php include_once './header.php'?>


  <main class="d-flex container align-items-center" style="height: calc(100vh - 56px); ">
    <div class="container-fluid border rounded p-5  bg-dark border-success" style="box-shadow: 1px 2px 6px 4px rgba(0,0,0,0.1)">
      <a type="button" href="./cursos.php" class="btn btn-primary">Voltar</a>

      <form action="../controllers/adicionar_curso_action.php" method="POST" class="mt-5">
        <div class="row mt-4">
          <div class="col-md-7">
            <p class="fw-bold text-white">Nome do curso:</p>
          </div>
          <div class="col-md-3">
            <p class="fw-bold text-white">Status:</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-7"><input type="text" class="form-control" name="name" id="name" aria-describedby="name"></div>
          <div class="col-md-5">
            <select class="form-control" aria-label="Selecione" name="status">
              <option value="1">Ativo</option>
              <option value="0">Inativo</option>
            </select>
          </div>
        </div>
        <div class="row mt-4">
          <div class="col-md-6">
            <p class="fw-bold text-white">Data de início:</p>
          </div>
          <div class="col-md-6">
            <p class="fw-bold text-white">Data de término:</p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6"><input type="date" class="form-control" name="dateStart" id="dateStart" aria-describedby="dateStart"></div>
          <div class="col-md-6"><input type="date" class="form-control" name="dateFinish" id="dateFinish" aria-describedby="dateFinish"></div>
        </div>
        <div class="row mt-4">
          <div class="col-md-12">
            <p class="fw-bold text-white">Descrição:</p>
          </div>
        </div>
        <div class="row mb-5">
          <div class="col-md-12"><textarea style="resize: none;height: 100px;" class="form-control" name="description" id="description" aria-describedby="description"></textarea></div>
        </div>

        <button type="submit" class="btn btn-success mr-2">Salvar</button>
      </form>
    </div>
  </main>

</body>

</html>