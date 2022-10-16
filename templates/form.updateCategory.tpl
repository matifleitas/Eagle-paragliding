
{include file="header.tpl"}

<form action="updatedCategory/{$categoriesId->id_category}" method="POST" class="border border-success">
    <div class="row g-3 align-items-center">
        <div class="col-auto">
            <label for="inputPassword6" class="col-form-label">Editar Categoria:</label>
        
            <input type="text" name="editCategory" class="form-control" >
            <button type="submit" class="btn btn-primary">Modificar</button>
            </div>
        </div>
    </div>
</form>

{include file="footer.tpl"}

