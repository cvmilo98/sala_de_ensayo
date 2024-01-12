<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>blog de sala de ensayo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
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
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Servicios</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </nav>

        </div>
        <div class="header-content container">
            <div class="header-txt">
                <h1>Sala de ensayo</h1>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Odit 
                    natus suscipit non aperiam, est quaerat itaque qui ut molestiae 
                    voluptatibus doloremque perferendis nostrum saepe blanditiis 
                    atque possimus officiis ratione at.
                </p>
                <a href="#" class="btn-1">Informacion</a>
            </div>
            <div class="header-img">
                <img src="Imagenes/sala-de-ensayo.png" alt="">
            </div>
        </div>

    </header>

    <section class="about container">

        <div class="about-img">
            <img src="Imagenes/6912ea7816dc864dbba7c0afe326091a.png" alt="">
        </div>

        <div class="about-txt">
            <h2>Nosotros</h2>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Reiciendis 
                rerum dolor praesentium in. Iste ex fuga deleniti, minima quisquam a 
                dolore, fugit, velit exercitationem voluptatibus excepturi alias 
                suscipit sequi consequuntur?
            </p>
            <br>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium 
                quo atque accusantium corrupti excepturi explicabo numquam 
                temporibus, exercitationem expedita cupiditate minima fuga id illum 
                tempore saepe perferendis odit alias corporis.
            </p>
        </div>
    </section>

    <main class="servicios">

        <h2>Servicios</h2>
        <div class="servicios-content container">

            <div class="servicio-1">
                <i class="fa-sharp fa-solid fa-headphones-simple"></i>
                <h3>Sala de ensayo</h3>
            </div>

            <div class="servicio-1">
                <i class="fa-sharp fa-solid fa-guitar"></i>
                <h3>Arriendo de Equipos</h3>
            </div>

            <div class="servicio-1">
                <i class="fa-sharp fa-solid fa-microphone-alt"></i>
                <h3>Estudio de grabacion</h3>
            </div>
        </div>
    </main>

    <section class="formulario container">

        <form method="post" autocomplete="off">
            <h2>Agendar Servicios</h2>

            <div class="input-group">

                <div class="input-container">
                    <input type="text" name="name" placeholder="Nombre y Apellido">
                    <i class="fa-solid fa-user"></i>
                </div>

                <div class="input-container">
                    <input type="tel" name="phone" placeholder="Numero de Contacto">
                    <i class="fa-solid fa-phone"></i>
                </div>

                <div class="input-container">
                    <input type="email" name="email" placeholder="Correo Electronico">
                    <i class="fa-solid fa-envelope"></i>
                </div>

                <div class="input-container">
                    <textarea name="message" placeholder="Detalles del Servicio"></textarea>
                </div>

                <input type="submit" name="send" class="btn" onclick="myfunction()">
            </div>
        </form>        
    </section>

    <footer class="footer">
        <div class="footer-content container">

            <div class="link">
                <a href="#" class="logo">logo</a>
            </div>

            <div class="link">
                <ul>
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Nosotros</a></li>
                    <li><a href="#">Servicio</a></li>
                    <li><a href="#">Contacto</a></li>
                </ul>
            </div>

        </div>

    </footer>

    <?php
        include("send.php");
    ?>

    <script>
        function myfunction() 
        {
            window.location.href="http://localhost/pagina"
        }
    </script>
    
</body>
</html>