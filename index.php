<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="css/import.css">
</head>
<body>
    <div class="form">
        <div class="container">
            <div id="top">
                <h2 class="title">Nombre de la Tienda</h2>
            </div>
                <div id="center">
                    <div id="container-center">
                        <form action="" method="GET">
                            <div>
                                <label for="">Nombre:</label><br>
                                <input type="text" name="" class="datos" placeholder="Ingresa tu nombre" required>
                                <br>
                            </div>

                            <div class="position-div">
                                <label for="">Email:</label><br>
                                <input type="email" name="" class="datos" placeholder="Ingresa tu correo" required>
                                <br>
                            </div>
                            
                            <div class="position-div">
                                <label for="">Contraseña:</label><br>
                                <input type="password" name="" class="datos" minlength="6" maxlength="12" placeholder="Ingresa tu contraseña" required>
                                <br>
                            </div>

                            <div class="position-div">
                                <label for="">Categoria Favorita</label><br>
                                <select name="">
                                    <option disabled selected>Seleccione una categoria</option>
                                    <option>Mundo</option>
                                </select>
                                <br>
                            </div>

                            <div class="position-div">
                                <input type="checkbox" name="" value=""> 
                                <label for="">Enviar ofertas mensuales</label><br>
                                <br>
                            </div>

                            <div class="final">
                                <input class="mt-1" id="enviar" type="submit">
                            </div>
                        </form>
                    </div>
                </div>

            
        </div>
    </div>
    <script src="https://kit.fontawesome.com/e5dbc0e638.js" crossorigin="anonymous"></script>

</body>
</html>