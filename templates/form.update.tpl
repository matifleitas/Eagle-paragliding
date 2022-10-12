<form action="updated/{$glider->id_parapente}" method="POST">

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Id: </label>
    <input type="text" class="form-control" id="id" name="id" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre de la vela: </label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Categoria: </label>
    <input type="text" class="form-control" id="category" name="category">
  </div>

  <div class="mb-3">
    <label for="floatingInput" class="form-label">Descripcion: </label>
    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">URL imagen: </label>
    <input type="text" class="form-control" id="image" name="image" name="category">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Dificultad: </label>
    <input type="text" class="form-control" id="difficulty" name="difficulty" name="category">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Precio: </label>
    <input type="text" class="form-control" id="price" name="price" name="category">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Id_catgegory: </label>
    <input type="text" class="form-control" id="ID_fk" name="ID_fk" name="category">
  </div>

  <button type="submit" class="btn btn-primary">Modificar</button>
</form>