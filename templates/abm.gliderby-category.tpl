
{include file="header.tpl"}

<h1 class="display-6"></h1>
  <ul class="list-group list-group-numbered">
  {foreach from=$categoriesId item=$category}
      
    <li class="list-group-item d-flex justify-content-between align-items-start">
      <h5>{$category->name}:</h5>
      <div><img src="{$category->image}" class="rounded float-end" alt="..."></div>
      <span>
        ●Description: <p class="fw-semibold">{$category->description}</p> 
        <br>
        ●Dificultad: <p class="fw-semibold">{$category->difficulty}</p>
        <br> 
        ●Precio (USD): <p class="fw-semibold">{$category->price}</p>
      </span>
        
    </li>
  {/foreach}
  </ul>


{include file = "footer.tpl"}