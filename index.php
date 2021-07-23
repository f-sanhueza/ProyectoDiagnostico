<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyecto Diagnostico</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <script src="js/jquery-3.6.0.js"></script>
</head>
<body>
<h1 align="center">Proyecto Diagnostico</h1>
<div class="container">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Solo Pares</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Suma Impares</button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Secuencia de Fibonacci</button>
        </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="row align-item-start">
                <div class="col">
                    <h3>Parte 1</h3>
                    <form method="post" id="formulario1">
                        <div class="mb-3">
                            <label class="form-label">Cantidad</label>
                            <input type="number" class="form-control" id="cantidad" name="cantidad" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="enviar1" id="enviar1">Enviar</button>
                    </form>
                </div>
                <div class="col">
                    <h3>Parte 2</h3>
                    <form method="post" id="formulario2">
                        <div class="mb-3">
                            <label class="form-label">Cantidad</label>
                            <input type="number" class="form-control" id="cantidad2" name="cantidad2" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="enviar2" id="enviar2">Enviar</button>
                    </form>
                </div>
            </div>
            <div class="row align-items-center" >
                <div class="col" align="center">
                    <div id="respuesta1"></div>
                </div>
                <div class="col" align="center">
                  <div id="respuesta2"></div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="row align-item-start">
                <div class="col">
                    <h3>Parte 1</h3>
                    <form method="post" id="formulario3">
                        <div class="mb-3">
                            <label class="form-label">Limite</label>
                            <input type="number" class="form-control" id="limite" name="limite" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="enviar3" id="enviar3">Enviar</button>
                    </form>
                </div>
                <div class="col">
                    <h3>Parte 2</h3>
                    <form method="post" id="formulario4">
                        <div class="col" >
                            <div class="mb-3">
                                <label class="form-label">Minimo</label>
                                <input type="number" class="form-control" id="minimo" name="minimo" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Maximo</label>
                                <input type="number" class="form-control" id="maximo" name="maximo" required>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary" name="enviar4" id="enviar4">Enviar</button>
                    </form>
                </div>
            </div>
            <div class="row align-items-center" >
                <div class="col" align="center">
                   <div id="respuesta3"></div>
                </div>
                <div class="col" align="center">
                    <div id="respuesta4"></div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
            <div class="row align-item-start">
                <div class="col">
                    <h3>Secuencia de Fibonacci</h3>
                    <form method="post" id="formulario5">
                        <div class="mb-3">
                            <label class="form-label">Limite</label>
                            <input type="number" class="form-control" id="limite" name="limite" required>
                        </div>
                        <button type="submit" class="btn btn-primary" name="enviar5" id="enviar5">Enviar</button>
                    </form>
                </div>

            </div>
            <div class="row align-items-center" >
                <div align="center">
                    <div id="respuesta5"></div>
                </div>
            </div>

        </div>
    </div>
</div>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/EnvioForm.js"></script>
</body>
</html>
