<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4"><br>

<h2>Novo Registro</h2><br>

<form method="POST">
  <div class="form-group">
    <label for="tipoentrega">Tipo da Entrega</label>
    <select class="form-control" name="tipoentrega" id="tipoentrega">
      <option class=""></option>
      <option value="Chaveiro">Chaveiro</option>
      <option value="CD/DVD">CD/DVD</option>
      <option value="HD">HD</option>
    </select>
  </div>

  <div class="form-group">
    <label for="ronda">Ronda Técnico</label>
    <select class="form-control" name="ronda" id="ronda">
      <option class=""></option>
      <option value="Blade">Blade</option>
      <option value="Elton">Elton</option>
      <option value="Guerra">Guerra</option>
      <option value="Marreta">Marreta</option>
    </select>
  </div>

  <div class="form-group">
    <label for="apartamento">Apartamento</label>
    <input class="form-control" name="apartamento" type="text">
  </div>

  <div class="form-group">
    <label for="condominio">Condomínio</label>
    <input class="form-control" name="condominio" type="text">
  </div>

  <div class="form-group">
    <label for="status">Status</label>
    <select class="form-control" name="status" id="status">
      <option class=""></option>
      <option value="Em demanda">Em demanda</option>
      <option value="Entregue">Entregue</option>
      <option value="Retornou">Retornou</option>
      <option value="Cancelado">Cancelado</option>
    </select>
  </div>

  <div style="width: 100%; height: 120px;">
    <div style="text-align: center;">
      <button class="btn btn-primary" type="submit">Cadastrar</button>
    </div>
  </div>
</form>