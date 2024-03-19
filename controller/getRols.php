<?php include("../config/conexion.php") ?>
<table id="mainDataTable" class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Rol</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    //Comprobamos si las variables fueron enviadas
                        //Comprobar si la variable de busqueda exista y no este vacia
                            $sql = "SELECT * FROM tbl_rols";
                            $ejecutar = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_array($ejecutar)) { ?>
                                <tr>
                                    <td><?php echo $row[0]; ?></td>
                                    <td><?php echo $row[1]; ?></td>
                                    <td><?php echo $row[2]; ?></td>
                                </tr>
                            <?php
                            }
                            mysqli_close($conn);

                        //En el caso que no hayan variable se devuelve una fila vacia
                        ?>
                </tbody>
                <tfoot>
                    <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    </tr>
                </tfoot>
            </table>