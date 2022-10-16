{if $email}
  <form action="add" method="POST" enctype="multipart/form-data">

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

      <label for="basic-url" class="form-label">Subir archivo imagen</label>
      <div class="input-group mb-3">
        <input type="file" name="input_name" id="imageToUpload">
      </div>

    <div class="mb-2">
      <label for="floatingInput" class="form-label">Dificultad: </label>
      <input type="text" class="form-control" id="difficulty" name="difficulty" placeholder="Dificultad de la vela">
    </div>

    <div class="mb-2">
      <label for="floatingInput" class="form-label">Precio: </label>
      <input type="number" class="form-control" id="price" name="price" placeholder="Precio de la vela">
    </div>

    <div class="mb-2">
      <label for="floatingInput" class="form-label">ID_fk: </label>
      <input type="text" class="form-control" id="ID_fk" name="ID_fk" placeholder="Precio de la vela">
  </div>

    <button type="submit" class="btn btn-info">Agregar</button>
    <br>
    <br>
  </form>
  
{/if}
