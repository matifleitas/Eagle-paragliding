
{include file="header.tpl"}

<h1 class="display-6"></h1>
  <ul class="list-group list-group-numbered">
  {foreach from=$categoriesId item=$category}
      
    <li class="list-group-item d-flex justify-content-between align-items-start">
      <a href="glider">{$category->name}:</a> 
      <div><img src="{$category->image}" class="rounded float-end" alt="..."></div>
          <span>{$category->description} - Dificultad: {$category->difficulty} - Precio: {$category->price}</span>
        
    </li>
  {/foreach}
  </ul>


{include file = "footer.tpl"}