<!DOCTYPE html>
<html lang="en">
<head>

    <base href="{BASE_URL}">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    
    <title>Eagle</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> Eagle Paragliding </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="home"> Home </a>
        </li>

        <li class="nav-item dropdown" >
            <a class="nav-link dropdown-toggle" href="gliders" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Velas
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="gliders">Todas</a></li>
                <li><a class="dropdown-item" href="#">Tandem</a></li>
                <li><a class="dropdown-item" href="#">Acro</a></li>
                <li><a class="dropdown-item" href="#">Cross Country</a></li>
            </ul>
        </li>
        {if !isset($smarty.session.USER_ID)}
            <li class="nav-item">
                <a class="nav-link" href="login"> Login </a>
            </li>
        {else} 
            <li class="nav-item">
                <a class="nav-link" href="logout"> logout {$smarty.session.email_user} </a>
            </li>
        {/if}
        <li class="nav-item">
            <a class="nav-link" href="about-us"> Quienes somos </a>
        </li>
    </ul>
</div>
</nav>



