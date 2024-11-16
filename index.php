<!DOCTYPE html>

<html>
    <head>
        <title></title>
        <link type ="text/css" rel ="stylesheet" href ="Css/index.css">
        <?php include('PHP/Principal.php');?>
    </head>
    <body>
        <header>
            <div id ="encabezado">
                SISTEMA CONTROL DE MANTENIMIENTOS - "Cootranscol"
            </div>
        </header>
        <selection>
            <div id ="principal">
                <div id ="form">
                    <form action ="index.php" method ="POST" name ="form">
                        <input type ="hidden" name ="txtID" id ="txtID" value = '<?php echo $vehiculo->id;?>'/><br/><br/>

                        <label for ="txtPlaca">Placa:</label>
                        <input type ="text" name ="txtPlaca" id ="txtPlaca"  value = '<?php echo $vehiculo->placa;?>' placeholder="Placa del vehículo">

                        <label for ="txtMarca">Marca:</label>
                        <input type ="text" name ="txtMarca" id ="txtMarca" value = '<?php echo $vehiculo->marca;?>' placeholder="Marca del vehículo">

                        <label for ="txtModelo">Modelo:</label>
                        <input type ="text" name ="txtModelo" id ="txtModelo" value = '<?php echo $vehiculo->modelo;?>' placeholder="Modelo del vehículo">

                        <label for ="txtinterno">Interno:</label>
                        <input type ="text" name ="txtInterno" id ="txtInterno" value = '<?php echo $vehiculo->interno;?>' placeholder="Número Interno">

                        <label for ="txtPropietario">Propietario:</label>
                        <input type ="text" name ="txtPropietario" id ="txtPropietario" value = '<?php echo $vehiculo->propietario;?>' placeholder="Propietario del vehículo">

                        <button type ="submit"> Guardar </button>
                        <button onclick ="window.location ='index.php'"> Nuevo </button>
                    </form>
                </div>
                <div id ="tabla">
                    <fieldset>
                <legend>vehiculos</legend>
                <table id="tbDatos">
                    <thead>
                        <tr>
                            <th>Numero</th>
                            <th>Placa</th>
                            <th>Modelo</th>
                            <th>Marca</th>
                            <th>Interno</th>
                            <th>Propietario</th>
                            <th>Borrar</th>
                            <th>Editar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $vehiculo->listarDatos();?>
                    </tbody>
                </table>
            </fieldset>
                </div>
            </div>
        </selection>
        <div id ="footer">
            "Cootranscol" 2024...
        </div>
    </body>
</html>