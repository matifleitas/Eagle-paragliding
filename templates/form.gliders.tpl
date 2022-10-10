  
<form action="add" method="POST">
  <div class="mb-2">
    <label for="floatingInput" class="form-label">id: </label>
    <input type="text" class="form-control" id="id" name="id" placeholder="Id de la vela">
  </div>

  <div class="mb-2">
    <label for="floatingInput" class="form-label">Nombre: </label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Nombre de la vela">
  </div>

  <div class="mb-2">
    <label for="floatingInput" class="form-label">Categoria: </label>
    <input type="text" class="form-control" id="category" name="category" placeholder="Categoria de la vela">
  </div>

  <div class="mb-3">
    <label for="floatingInput" class="form-label">Descripcion: </label>
    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
  </div>

  <div class="mb-2">
    <label for="floatingInput" class="form-label">Dificultad: </label>
    <input type="text" class="form-control" id="difficulty" name="difficulty" placeholder="Dificultad de la vela">
  </div>

  <div class="mb-2">
    <label for="floatingInput" class="form-label">Precio: </label>
    <input type="text" class="form-control" id="price" name="price" placeholder="Precio de la vela">
  </div>

  <button type="submit" class="btn btn-info">Agregar</button>
</form>

