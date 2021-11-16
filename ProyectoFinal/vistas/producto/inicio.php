<table class="table table-bordered">

    <thead>
        <tr>
            <th>Id</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Año</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($automoviles as $automovil) 
        { ?>
        <tr>
            <td scope="row"><?php echo $automovil->Id ?></td>
            <td><?php echo $automovil->Marca ?></td>
            <td><?php echo $automovil->Modelo ?></td>
            <td><?php echo $automovil->Año ?></td>
            <td><?php echo $automovil->Precio ?></td>
            <td>
                <div class="btn-group" role="group" aria-label="">
                    <a href="index.php?accion=editar&ID=<?php echo $automovil->Id ?>" class="btn btn-info">Editar</a>
                    <a href="index.php?accion=borrar&ID=<?php echo $automovil->Id ?>" class="btn btn-danger">Borrar</a>
                </div>
            </td>

        </tr>

        <?php  } ?>
    </tbody>
</table>