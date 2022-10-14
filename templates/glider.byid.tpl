{include file="header.tpl"}

<div class="container">
  <div class="card text-center" style="width: 40rem;">
    <h1> {$glider->name} </h1>
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
    </div>
  </div>
</div>