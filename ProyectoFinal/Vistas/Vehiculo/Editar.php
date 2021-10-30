<div class="card">
    <div class="card-header">
            Buscar Vehiculo por id
        <div class="mb-3">
            <input type="text"
            class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Ingrese el id de vehiculo">
        </div>
        <input name="" id="" class="btn btn-success" type="submit" value="Buscar">
    </div>
</div>

<div class="card" color="red">
    <div class="card-header">
        Editar Vehiculo
    </div>
    <div class="card-body">
        <form action="" method="post">

            <div class="mb-3">
              <label for="id" class="form-label">Id: </label>
              <input type="text"
                class="form-control" name="id" value="<?php echo $vehiculo -> id ?>" readonly id="id" aria-describedby="helpId" >
                <div class="mb-3">
              <label for="marca" class="form-label">Marca: </label>
              <input type="text"
                class="form-control" name="marca" id="marca" aria-describedby="helpId" placeholder="Marca del Vehiculo">
            </div>
            <div class="mb-3">
              <label for="modelo" class="form-label">Modelo: </label>
              <input type="text"
                class="form-control" name="modelo" id="modelo" aria-describedby="helpId" placeholder="Modelo del vehiculo">
            </div>
            <div class="mb-3">
              <label for="anio" class="form-label">Año: </label>
              <input type="number"
                class="form-control" name="anio" id="anio" aria-describedby="helpId" placeholder="Año del vehiculo">
            </div>
            <div class="mb-3">
              <label for="precio" class="form-label">Precio: </label>
              <input type="text"
                class="form-control" name="precio" id="precio" aria-describedby="helpId" placeholder="Precio del vehiculo">
            </div>
            <input name="" id="" class="btn btn-success" type="submit" value="Editar vehiculo">
            <a href="index.php?accion=inicio" class="btn btn-primary">Cancelar</a>
        </form>
    </div>

</div>