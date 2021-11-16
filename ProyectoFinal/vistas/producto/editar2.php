<!-- Vista desde donde editaremos un producto -->
<div class="card">
    <div class="card-header">
            Buscar por ID
        <div class="mb-3">
            <input type="number"
            class="form-control" name="ID" id="ID" aria-describedby="helpId" placeholder="ID del automovil">
        </div>
        <input name="" id="" class="btn btn-success" type="submit" value="buscar">
    </div>
</div>

<div class="card" color="red">

    <div class="card-header">
        Editar Vehiculo
    </div>

    <div class="card-body">
        <form action="" method="post">

            <div class="mb-3">
              <label for="ID" class="form-label">ID: </label>
              <input type="number" class="form-control" name="ID" value="<?php echo $automovil -> ID ?>" readonly id="ID" aria-describedby="helpId" >
            </div>

            <div class="mb-3">
              <label for="marca" class="form-label">Marca: </label>
              <input type="text" class="form-control" name="marca" id="marca" aria-describedby="helpId" placeholder="Marca del Vehiculo">
            </div>

            <div class="mb-3">
              <label for="modelo" class="form-label">Modelo: </label>
              <input type="text" class="form-control" name="modelo" id="modelo" aria-describedby="helpId" placeholder="Modelo del vehiculo">
            </div>

            <div class="mb-3">
              <label for="año" class="form-label">Año: </label>
              <input type="number" class="form-control" name="año" id="año" aria-describedby="helpId" placeholder="Año del vehiculo">
            </div>

            <div class="mb-3">
              <label for="precio" class="form-label">Precio: </label>
              <input type="text" class="form-control" name="precio" id="precio" aria-describedby="helpId" placeholder="Precio del vehiculo">
            </div>

            <input name="" id="" class="btn btn-success" type="submit" value="Editar">

            <a href="index.php?accion=inicio" class="btn btn-primary">Cancelar</a>
        </form>
    </div>

</div>