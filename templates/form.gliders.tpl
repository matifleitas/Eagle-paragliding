  
<form action="add" method="POST">
  {* <div class="mb-2">
    <label for="floatingInput" class="form-label">id: </label>
    <input type="text" class="form-control" id="id" name="id" placeholder="Id de la vela">
  </div> *}

  <div class="mb-2">
    <label for="floatingInput" class="form-label">Nombre: </label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Nombre de la vela">
  </div>

  <div class="mb-2">
    <label for="floatingInput" class="form-label">Categoria: </label>
        <select class="form-select" name="category" id="">
        <option selected disabled>Seleccionar la categoria de la nueva vela: </option>
        {foreach $categories as $category}
            <option value="{$category->type_paraglider}">{$category->type_paraglider}</option>
        {/foreach}
    </select>
  </div>

  <div class="mb-3">
    <label for="floatingInput" class="form-label">Descripcion: </label>
    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
  </div>

    <label for="basic-url" class="form-label">URL de imagen del parapente</label>
    <div class="input-group mb-3">
      <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
      <input type="text" class="form-control" id="URL" name="URL" aria-describedby="basic-addon3">
    </div>

  <div class="mb-2">
    <label for="floatingInput" class="form-label">Dificultad: </label>
    <input type="text" class="form-control" id="difficulty" name="difficulty" placeholder="Dificultad de la vela">
  </div>

  <div class="mb-2">
    <label for="floatingInput" class="form-label">Precio: </label>
    <input type="text" class="form-control" id="price" name="price" placeholder="Precio de la vela">
  </div>

  <div class="mb-2">
    <label for="floatingInput" class="form-label">ID_fk: </label>
    <input type="text" class="form-control" id="ID_fk" name="ID_fk" placeholder="Precio de la vela">
</div>

  <button type="submit" class="btn btn-info">Agregar</button>
</form>

