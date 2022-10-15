{if $email}
    <div>
        <h5>Categorias:</h5>
        <ul class="list-group list-group-numbered">
        {foreach $categories as $category}
            <li class="list-group-item">{$category->type_paraglider}
            <a href='editCategory/{$category->id_category}' type='button' class="btn btn-primary">Editar</a>
            <a href='deleteCategory/{$category->id_category}' type='button' class="btn btn-danger">Borrar</a>
            </li>
        {/foreach}
        </ul>
    </div>
{/if}