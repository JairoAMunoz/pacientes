<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>sesion</title>
  <!-- JQUERY -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!--FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

<!-- Los iconos tipo Solid de Fontawesome-->
<link rel="stylesheet"href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
<script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

<!-- Nuestro css-->
<link rel="stylesheet"type="text/css"href="static/css/index.css">
<!------ Include the above in your HEAD tag ---------->

    
        <!--JQUERY-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        
        <!-- FRAMEWORK BOOTSTRAP para el estilo de la pagina-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        
        <!-- Los iconos tipo Solid de Fontawesome-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
        <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    
        <!-- Nuestro css-->
        <link rel="stylesheet" type="text/css" href="static/css/index.css" th:href="@{/css/index.css}">
    
    </head>
    <body>

        @csrf
        <div class="modal-dialog text-center">
            <div class="col-sm-8 main-section">
                <div class="modal-content">
                    <div class="col-12 user-img">
                        <i class="fa-solid fa-user-helmet-safety"></i>
                        <p>Registro
                        </p>
                    </div>
                    <form class="col-12"  action="/ingreso" method="POST">
                       
                            
                            <div class="form-group" id="user-group">
                      



                                <select name="tipodocumento" class="form-control">
                                    
                                  
                                    <option value=""> tipo documento</option>                             
                                 
                                 
                                    
                                  </select>

                                  
                                </div>
                        <div class="form-group" id="user-group">
                            <input type="text" class="form-control" placeholder="Numero docmento" name="numdoc"/>
                        </div>
                        <div class="form-group" id="user-group">
                            <input type="text" class="form-control" placeholder="Primer Nombre" name="nombre1"/>
                        </div>
                        <div class="form-group" id="user-group">
                            <input type="text" class="form-control" placeholder="Segundo Nombre" name="nombre2"/>
                        </div>
                        <div class="form-group" id="user-group">
                            <input type="text" class="form-control" placeholder="Primer Apellido" name="apellido1"/>
                        </div>
                        <div class="form-group" id="user-group">
                            <input type="text" class="form-control" placeholder="Segundo Apellido" name="apellido2"/>
                        </div>
                        <div class="form-group" id="user-group">
                        <select name="genero" class="form-control">
                            <option>genero</option>                             
                          </select>
                        </div>
                        <div class="form-group" id="user-group">
                        <select name="departamento" class="form-control">
                            <option>departamento</option>                             
                          </select>
                        </div>
                        <div class="form-group" id="user-group">
                        <select name="municipio" class="form-control">
                            <option>municipio</option>                             
                          </select>
                        </div>



                        <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Ringresar departamento </button>
                    </form>
                    
                  
                </div>
            </div>
        </div>
    </body>
    </html>

</form>

</body>
</html>