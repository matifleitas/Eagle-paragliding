
<form action="updated/{$glider->id_parapente}" method="POST" enctype="multipart/form-data">

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre de la vela: </label>
    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
  </div>

  <div class="mb-2">
    <label for="floatingInput" class="form-label">Categoria: </label>
        <select class="form-select" name="category" id="">
        <option selected disabled>Seleccionar la categoria a modificar: </option>
        {foreach $categories as $category}
            <option value="{$category->id_category}">{$category->type_paraglider}</option>
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
  
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Dificultad: </label>
    <input type="text" class="form-control" id="difficulty" name="difficulty" name="category">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Precio: </label>
    <input type="number" class="form-control" id="price" name="price" name="category">
  </div>

  <button type="submit" class="btn btn-primary">Modificar</button>
</form>