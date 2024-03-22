<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* Estilos generales */
        body {
            background-color: white;
            font-family: Arial, Helvetica, sans-serif;
            color: rgb(0, 0, 0);
            margin: 0%;
        }

        h1, h2 {
            color: #EE0303;
        }

        .divinicio h1 {
            color: white;
        }

        /* Estilos para la sección de inicio */
        .divinicio {
            padding: 20px;
            border-radius: 10px;
            margin: 0;
            padding: 0;
            background-image: url('/img/portada1.png');
            background-size: cover;
            background-position: center;
            height: 100vh;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: rgb(255, 255, 255);
            position: relative; /* Añadido para la superposición */
        }

        .divinicio h1 {
            font-size: 100px;
            z-index: -1;
        }

        .divinicio p {
            width: 1000px;
            z-index: -1;
        }

        .divinicio h1,
        .divinicio p {
            margin: 10px 0; /* Ajusta la distancia vertical entre h1 y p */
            z-index: -1;
        }

        /* Estilos para la superposición */
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(10, 9, 9, 0.5); /* Color semitransparente */
            z-index: 1; /* Asegura que el overlay esté detrás del contenido */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #FF7E76;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #FFEEF0;
        }

        #tabla1 {
            background-color: #FFEDE2;
        }

        .inicio2 {
            text-align: center;
            margin: 35px;
        }

        .Inicio3 {
            text-align: center;
            padding: 30px;
        }

        .Inicio3 li {
            text-align: left;
            padding: 10px;
        }

        /* Estilos para el menú */
        nav {
            background-color: #333;
            padding: 10px 0;
        }

        #menu {
            list-style-type: none;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        #menu li {
            display: inline;
        }

        #menu li a {
            display: inline-block;
            color: white;
            text-decoration: none;
            padding: 10px 20px;
        }

        #menu li a:hover {
            background-color: #555;
        }

        /* Estilos para las secciones */
        section {
            padding-top: 50px;
        }

        .inicio,
        .inicio2,
        .inicio3 {
            background-color: #f2f2f2;
            text-align: center;
        }

        .contenido {
            position: relative;
            z-index: 1;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Fondo oscuro semitransparente */
            z-index: 0;
        }

        table {
            margin: 0 auto;
        }

        #tabla1 {
            width: 150px;
        }
    </style>
</head>
<body>
    <nav>
        <ul id="menu">
            <li><a href="#inicio">Inicio</a></li>
            <li><a href="#informacion-personal">Información Personal</a></li>
            <li><a href="#experiencia">Experiencia</a></li>
            <li><a href="#trabajos-realizados">Trabajos Realizados</a></li>
            <li><a href="#acerca-de-mi">Acerca de Mi</a></li>
            <li><a href="#valores">Valores</a></li>
        </ul>
    </nav>

    <section id="inicio" class="inicio">
        <div class="divinicio">
            <div class="overlay"></div>
            <div class="contenido">
                <h1>Mi Portafolio</h1>
                <p>Programa como si no hubiera mañana</p>
            </div>
        </div>
    </section>

    <section id="informacion-personal">
        <div class="inicio2">
            <br>
            <h1>Informacion Personal</h1>
                <table>
                <tr>
                    <th id="tabla1">Nombre</th>
                    <td>Diego Ramirez Bello</td>
                </tr>
                <tr>
                    <th>Fecha de Nacimiento</th>
                    <td>20/04/2004</td>
                </tr>
                <tr>
                    <th id="tabla1">Carrera Académica</th>
                    <td>Preparatoria</td>
                </tr>
                <tr>
                    <th>Profesión</th>
                    <td>Ingeniero en Software</td>
                </tr>
                </table>
        </div>
    </section>

    <section id="experiencia">
        <div class="Inicio3">
            <h1>Experiencia</h1>
            <p>Estas son mis puntos fuertes:</p>
            <ul>
                <li>CSS</li>
                <li>HTML</li>
                <li>JAVA</li>
                <li>Base de Datos</li>
            </ul>
        </div>
    </section>
    
    <section id="trabajos-realizados">
        <div class="Inicio3">
            <h1>Trabajos Realizados</h1>
            <p>En transcurso de mi vida solo eh realizado 2 paginas web</p>
            <ul>
                <li>Página Web</li>
                <li>Ninguno</li>
                <li>Ninguno</li>
                <li>Ninguno</li>
            </ul>
        </div>
    </section>

    <section id="acerca-de-mi">
        <div class="Inicio3">
            <h1>Acerca de Mi</h1>
            <p>¡Hola! Soy Diego Ramirez Bello, un entusiasta desarrollador web y estudiante de ingeniería de software. Desde que era joven, siempre me ha fascinado la tecnología y la informática, y descubrí mi pasión por la programación mientras exploraba este mundo apasionante.

                Disfruto cada momento que paso creando páginas web y aplicaciones, combinando diseño y funcionalidad para dar vida a mis ideas en la pantalla. Cada proyecto es una oportunidad para desafiarme a mí mismo y mejorar mis habilidades.
                
                Actualmente, estoy inmerso en mi educación en ingeniería de software, donde estoy aprendiendo todo lo que puedo para convertirme en un profesional destacado en este campo. Me dedico por completo a mis estudios y proyectos personales, siempre buscando nuevas formas de crecer y mejorar como desarrollador.
                
                Además de programar, me encanta compartir mis conocimientos con otros. Colaboro en proyectos de código abierto, participo en comunidades en línea y disfruto enseñando a otros lo que he aprendido en mi viaje como desarrollador.
                
                Cada línea de código que escribo me acerca un paso más a mi objetivo de convertirme en un experto en ingeniería de software. Mi determinación y pasión por la tecnología me impulsan a seguir adelante en este emocionante y siempre cambiante campo del desarrollo web y la ingeniería de software. ¡El futuro me espera, y estoy listo para enfrentarlo con entusiasmo y determinación!</p>
            <img src="/img/user.png" alt="">
        </div>
    </section>

    <section id="valores">
        <div class="Inicio3">
            <h1>Valores</h1>
            <p>Estos son mis valores como ingeniero de software:</p>
            <ul>
                <li>Aprendizaje continuo</li>
                <li>Ética profesional</li>
                <li>Trabajo en equipo y colaboración</li>
                <li>Precisión y atención al detalle</li>
            </ul>
        </div>
    </section>

    <script>
        document.querySelectorAll('#menu a').forEach(item => {
            item.addEventListener('click', e => {
                e.preventDefault(); 
                const href = item.getAttribute('href'); 
                const section = document.querySelector(href); 
                section.scrollIntoView({ behavior: 'smooth' }); 
            });
        });
    </script>
</body>
</html>
