
{include file="header.tpl"}


<ul class="list-group list-group-numbered">
  {foreach from=$gliders item=$glider}
    
  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
    <div class="fw-bold">{$glider->name}</div>
        {$glider->description} : (dificultad: {$glider->difficulty}) : (precio: {$glider->price})
    </div>

    <a href='edit/{$glider->name}' type='button' class='btn btn-success'>Editar</a>
    <a href='delete/{$glider->name}' type='button' class='btn btn-danger'>Borrar</a>

  </li>

  <li class="list-group-item d-flex justify-content-between align-items-start">
    <div class="ms-2 me-auto">
    <div class="fw-bold">{$glider->id_parapente}</div> 
        {$glider->description} : (dificultad: {$glider->difficulty}) : (precio: {$glider->price})
    </div>

    <a href='edit/{$glider->id_parapente}' type='button' class='btn btn-success'>Editar</a>
    <a href='delete/{$glider->id_parapente}' type='button' class='btn btn-danger'>Borrar</a>
  </li>
  {/foreach}
</ul>