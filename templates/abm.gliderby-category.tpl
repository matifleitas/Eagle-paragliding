
{include file="header.tpl"}

<h1 class="display-6"></h1>
  <ul class="list-group list-group-numbered">
  {foreach from=$categoriesId item=$category}
      
    <li class="list-group-item d-flex justify-content-between align-items-start">
      <a href="glider">{$category->name}:</a> 
      <div><img src="https://justacro.com/files/styles/video_preview/public/gear/glider/photo/image10dsc00216.jpg.res-800x600.jpg?itok=QCxvWndn" class="rounded float-end" alt="..."></div>
          <span>{$category->description} - Dificultad: {$category->difficulty} - Precio: {$category->price}</span>
        
    </li>
  {/foreach}
  </ul>


{include file = "footer.tpl"}