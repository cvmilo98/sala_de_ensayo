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

    <!-- Contenido principal - Lista de Salas de Ensayo -->
    <main class="servicios">
        <h2>Nuestras Salas de Ensayo</h2>
        <div class="servicios-content container">
            
            <!-- Sala de Ensayo 1 -->
            <div class="servicio">
                <img src="Imagenes/sala_1.png" alt="Sala de Ensayo 1">
                <h3>Sala de Ensayo 1</h3>
                <p>Metros Cuadrados: 30 m²</p>
                <p>Aire Acondicionado: Funcionando</p>
                <p>Precio por Hora: $7.00</p>
            </div>

            <!-- Sala de Ensayo 2 -->
            <div class="servicio">
                <img src="Imagenes/sala_2.png" alt="Sala de Ensayo 2">
                <h3>Sala de Ensayo 2</h3>
                <p>Metros Cuadrados: 25 m²</p>
                <p>Aire Acondicionado: No Funcionando</p>
                <p>Precio por Hora: $7.00</p>
            </div>

            <!-- Sala de Ensayo 3 -->
            <div class="servicio">
                <img src="Imagenes/6912ea7816dc864dbba7c0afe326091a.png" alt="Sala de Ensayo 3">
                <h3>Sala de Ensayo 3</h3>
                <p>Metros Cuadrados: 40 m²</p>
                <p>Aire Acondicionado: Funcionando</p>
                <p>Precio por Hora: $7.00</p>
            </div>

        </div>
    </main>


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
