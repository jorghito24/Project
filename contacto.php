<?php include("templates/cabecera.php") ?>

<main>
        <div class="container">
            <div class="panel-heading">
                <h4>Formulario de Contacto</h4>
            </div>
            <div class="panel-body">
                <form class="form-horizontal" id="signupForm" action="https://formspree.io/f/mqkonrly" method="POST">

                    <div class="form-group">
                        <label for="fullname" class="col-sm-2 control-label">Nombre</label>
                        <div class="col-sm-3">
                            <input type="text" id="fullname" name="fullname" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Correo electronico</label>
                        <div class="col-sm-5">
                            <input type="text" id="email" name="email" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="col-sm-2 control-label">Número Celular</label>
                        <div class="col-sm-3">
                            <input type="text" id="password" name="password" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-2">
                            <label for="luckynumber">Tipo de comentario</label>
                            <select name="luckynumber" id="luckynumber" class="form-control">
                                <option value="">Seleccionar</option>
                                <option value="double zero">Queja</option>
                                <option value="seven">Agradecimiento</option>
                                <option value="thirteen">General</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="comments" class="col-sm-2 control-label">Comentario</label>
                        <div class="col-sm-5">
                            <textarea name="comments" id="comments" cols="40" rows="5" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="submit" class="btn btn-primary" value="Enviar" />
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>

<?php include("templates/pie.php") ?>