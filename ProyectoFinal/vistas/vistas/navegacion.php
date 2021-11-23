<div class="p-3 mb-2 bg-secondary text-white">
    <h1 class="text-center" >  CARS SHOP </h1> 
</div>




<nav class="navbar navbar-expand-lg navbar-light bg-light">

  <div class="collapse navbar-collapse" id="navbarScroll">
    <ul class="navbar-nav mr-auto my-2 my-lg-0 navbar-nav-scroll" style="max-height: 100px;">
      <li class="nav-item active">
        <a class="nav-link" href="index.php?accion=main">Inicio <span class="sr-only"></span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="index.php?accion=registrar">Registrar</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="index.php?accion=inicio">Lista de vehiculos</a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="" id="navbarScrollingDropdown" role="button" data-toggle="dropdown" aria-expanded="false"> Mostrar </a>
        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
        <li><a class="dropdown-item" href="index.php?accion=inicio">Total Vehiculos</a></li>
          <li><a class="dropdown-item" href="vistaPorValor.php">Por Valor</a></li>
          <li><a class="dropdown-item" href="vistaPorModelo.php">Por Antiguedad</a></li>
        </ul>
      </li>  


    </ul>

    <form action="index.php" method="GET" class="d-flex">
   
        <input class="form-control mr-2" type="text" name="id" id="id" placeholder="BUSCAR VEHICULO" >

        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="accion" value="editar" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1"> ID </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="accion" value="vistaMarca" id="defaultCheck2">
            <label class="form-check-label" for="defaultCheck2"> MARCA </label>
        </div>

        <div class="form-check">
             <input class="form-check-input" type="checkbox" name="accion" value="vistaModelo" id="defaultCheck2">
             <label class="form-check-label" for="defaultCheck2"> MODELO </label>
        </div>

        <input class="btn btn-outline-secondary" type="submit" value="Buscar">
          
    </form>


  </div>
</nav>