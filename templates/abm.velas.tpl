
<h1 class="display-6">{$title}</h1>
  <ul class="list-group list-group-numbered">
    {foreach from=$gliders item=$glider}
      
    <li class="list-group-item d-flex justify-content-between align-items-start">
      <a href="glider/{$glider->id_parapente}" class="fw-bold">{$glider->name}: </a> 
      <div><img src="{$glider->image}" class="img-thumbnail" alt="..."></div>
        <span class="fw-bold">
          ●Categoria de la vela: <p class="fw-semibold">{$glider->type_paraglider}</p> 
          <br>
          ●Description: <p class="fw-semibold">{$glider->description}</p> 
          <br>
          ●Dificultad: <p class="fw-semibold">{$glider->difficulty}</p>
          <br> 
          ●Precio: <p class="fw-semibold">{$glider->price}</p>
        </span>
      
      <a href='edit/{$glider->id_parapente}' type='button' class="btn btn-outline-primary">Editar</a>
      <a href='delete/{$glider->id_parapente}' type='button' class="btn btn-outline-danger">Borrar</a>

    </li>

    {/foreach}
  </ul>

{include file = "footer.tpl"}