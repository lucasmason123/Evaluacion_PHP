<?php include '../header.php'; ?>

<!-- Contenido -->
<div id="login">
    <h3 class="text-center text-white display-4"> Acceso sistema</h3>

        <div class="container">
            <div id="login-fila" class="row justify-content-center align-items-center">
                <div id="login-columna" class="col-md-6">
                    <div id="login-box" class="col-md-12 bg-light text-dark">
                        <form id="formlogin" class="form" action="" method="post">
                            <h3 class="text-center text-dark"> Iniciar Sesion</h3>
                            <div class="form-group">
                                <label for="usuario" class="text-dark">Usuario</label>
                                <input type="text" name="txtUsuario" class="form-control" id="usuario" autofocus  placeholder="usuario">
                            </div>

                            <div class="form-group">
                                <label for="password" class="text-dark">Password</label>
                                <input type="password" name="txtPassword" class="form-control"  id="password" placeholder="****">
                            </div>

                            <div class="form-group text-center">
                                <input type="submit" name="submit" class="btn btn-dark btn-lg btn-block" value="Conectar">

                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>

<!-- Fin contenido -->
<?php include '../footer.php';?>