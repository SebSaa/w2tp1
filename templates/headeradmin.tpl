<!DOCTYPE html>
<html lang="en">
<head>
    <base href="{$basehref}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>{$titulo}</title>
</head>
<body>

<div class="row">
        
  <div class="col-sm-8"><h2>logo del super m</h2></div>
  <div class="col-sm-4">
                {if isset($usuario)} {* si no está vacio *}
                    <a class="nav-link" href="logout">Cerrar Sesion {$usuario}</a>
                {else}
                    <a class="nav-link" href="login">Iniciar Sesion</a>
                {/if}
        </div>
</div>
<div class="row">
    <div class="col-sm">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Super M</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="iniciol">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="catview">Categorias</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="prodview">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="prodcatview">Cat&Pro</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout">Login</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>



    