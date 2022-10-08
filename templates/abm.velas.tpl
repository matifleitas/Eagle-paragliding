
{include file="header.tpl"}

<h1 class="display-6">{$title}</h1>
  <ul class="list-group list-group-numbered">
    {foreach from=$gliders item=$glider}
      
    <li class="list-group-item d-flex justify-content-between align-items-start">
      
      <div class="fw-bold">{$glider->name}:</div>
      <div><img src="https://justacro.com/files/styles/video_preview/public/gear/glider/photo/image10dsc00216.jpg.res-800x600.jpg?itok=QCxvWndn" class="rounded float-end" alt="..."></div>
          <span>{$glider->description} - Dificultad: {$glider->difficulty} - Precio: {$glider->price}</span>
      

      <a href='edit/{$glider->id_parapente}' type='button' class="btn btn-outline-primary">Editar</a>
      <a href='delete/{$glider->id_parapente}' type='button' class="btn btn-outline-danger">Borrar</a>

    </li>

    {/foreach}
  </ul>

{include file = "footer.tpl"}