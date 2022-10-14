
{include file="header.tpl"}

<form action="verify" method="POST">
    <div class="mb-5"> 
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Ingresar Email">
    </div>

    <div class="mb-5">
        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Ingresar contraseña">

        <span id="passwordHelpInline" class="form-label">Permitido entre 8 y 20 caracrteres.</span>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
</form>
{include file="footer.tpl"}
