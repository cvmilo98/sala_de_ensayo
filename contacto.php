<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros - Sala de Ensayo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    <script src="https://maps.googleapis.com/maps/api/js?key=TU_API_KEY&libraries=places&callback=initMap" async defer></script>

    
    <!-- Agrega otros enlaces a estilos si los necesitas específicos para esta página -->
</head>
<body>
    <header class="header">
        <div class="menu container">
            <a href="#" class="logo">logo</a>
            <input type="checkbox" id="menu"/>
            <label for="menu">
                <img src="Imagenes/menu.png" class="menu-icono" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="nosotros.php">Nosotros</a></li>
                    <li><a href="servicios.php">Servicios</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <h1>Contacto</h1>
    <p>
        Gaalvarino, Santiago Centro
        <br>
        Region Metropolitana
    </p>
    <hr>
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1176.8356255533367!2d-70.64202411637183!3d-33.45988774068832!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662c56c61d23ef3%3A0x2f1796e89e5b5c81!2sVentura%20Lavalle%20673%2C%208360122%20Santiago%2C%20Regi%C3%B3n%20Metropolitana!5e0!3m2!1ses!2scl!4v1705467977191!5m2!1ses!2scl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>



    <!-- Puedes agregar más secciones según sea necesario -->

    <footer class="footer">
        <div class="footer-content container">
            <div class="link">
                <a href="#" class="logo">logo</a>
            </div>
            <div class="link">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="nosotros.php">Nosotros</a></li>
                    <li><a href="servicios.php">Servicios</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <script>
        function myfunction() {
            window.location.href="http://localhost/pagina"
        }
    </script>
</body>
</html>
