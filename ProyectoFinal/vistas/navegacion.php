<div class="p-3 mb-2 bg-secondary text-white">
    <h1 class="text-center" >  CARS SHOP </h1> 
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <!-- ESTO LO COMENTE porque la busqueda por ID la hacemos en el navegador -->


  <!-- <a class="navbar-brand" href="index.php?accion=main">Inicio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button> -->


  <div class="collapse navbar-collapse" id="navbarScroll">
    <ul class="navbar-nav mr-auto my-2 my-lg-0 navbar-nav-scroll" style="max-height: 100px;">
      <li class="nav-item active">
        <a class="nav-link" href="index.php?accion=main">Inicio <span class="sr-only"></span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?accion=registrar">Registrar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?accion=editar">Editar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?accion=inicio">Lista de vehiculos</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="" id="navbarScrollingDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          VISTAS
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
          <li><a class="dropdown-item" href="vistaPorValor.php">Por Valor</a></li>
          <li><a class="dropdown-item" href="#">Por Antiguedad</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">Por Modelo</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled"></a>
      </li>
    </ul>

    <!-- Opcion 1 y 2  -->

    <form class="d-flex">

      <!-- Opcion 1 -->

      <input href="index.php?accion=editar&id" class="form-control mr-2" type="search" placeholder="ID del vehiculo" aria-label="Search">
      <button href="index.php?accion=editar&id" class="btn btn-outline-success" type="submit" value="id">Buscar</button>

      <!-- Opcion 2 -->

      <a href="index.php?accion=editar&id" id= "" class="btn btn-danger">BUSCAR</a>

    </form>

    <!-- Opcion 3 -->

    <!-- <form action="controlador_paginas.php/editar" method="get" class="d-flex">
          <input type="text" name="id" id="editar" placeholder="ID">
          <input type="submit" value="Buscar">
    </form> -->

  </div>
</nav>