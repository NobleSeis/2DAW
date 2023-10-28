<?php
require '../templates/header.php';
?>
<h1 class="display-4 text-center bg-dark text-white rounded p-4 mb-4">Actividad 2</h1>

<h3 class="mb-4">Instalación de XAMPP</h3>
<p>
    Para instalar XAMPP en nuestro sistema, debemos dirigirnos a la siguiente
    <a href="https://www.apachefriends.org/es/index.html" target="_blank" rel="noopener noreferrer">web</a>
    y descargar el paquete correspondiente al sistemas que estamos usando. Una vez hecho, empezaremos la instalación:
</p>
<div class="container-fluid mt-4">
    <ul class="nav nav-tabs px-5 row">
        <li class="nav-item col-sm-12 col-md-2">
            <a class="nav-link active text-dark" data-bs-toggle="tab" href="#windows">Windows</a>
        </li>
        <li class="nav-item col-sm-12 col-md-2">
            <a class="nav-link text-dark" data-bs-toggle="tab" href="#linux">Linux</a>
        </li>
    </ul>
</div>
<div class="tab-content my-5">
    <!-- Instalación en windows 1 -->
    <div class="tab-pane container active" id="windows">
        <p class="mb-5">Para Windows, se descarga un ejecutable que guiará la instalación de forma sencilla.</p>
        <img class="img-fluid mx-auto d-block" src="../assets/windows-1.png" alt="Instalador de XAMPP">
        <p class="my-5">Es el típico instalador de siguiente, siguiente, que todo el mundo conoce, así que empezamos con el primer click en siguiente (next)</p>
        <img class="img-fluid mx-auto d-block" src="../assets/windows-2.png" alt="Instalador de XAMPP">
        <p class="my-5">
            La siguiente pantalla tiene algo más de chicha, y nos permite decidir que componentes del stack queremos instalar. En mi caso voy a
            desmarcar la opción de Perl, ya que no lo voy a usar. Sino sabes que es cada paquete, no te compliques y deja la instalación por defecto.
        </p>
        <img class="img-fluid mx-auto d-block" src="../assets/windows-3.png" alt="Instalador de XAMPP">
        <p class="my-5">
            Es el momento de elegir la ruta de instalación, la ruta por defecto es <span class="fw-bold">C:\xampp</span> y es recomendable dejarla así.
            Tras esta ventana hay otra de selección de idioma, pero solo están soportados el inglés y el alemán. Ahora es el momento de iniciar la instalación
            como tal.
        </p>
        <img class="img-fluid mx-auto d-block" src="../assets/windows-4.png" alt="Instalador de XAMPP">
        <p class="my-5">
            Y listo, una vez finalizada la instalación, nos preguntará si queremos iniciar el panel de control y ya tendremos disponible el stack XAMPP
        </p>
        <img class="img-fluid mx-auto d-block" src="../assets/windows-5.png" alt="Instalador de XAMPP">
    </div>

    <!-- Instalación en linux 2 -->
    <div class="tab-pane container fade" id="linux">
        <p class="mb-5">
            En sistemas linux, se nos descarga un script que debemos ejecutar. Pero dicho script viene sin permisos de ejecución, de modo que debemos darselo.
            El comando es el siguiente: <kbd>chmod +x nombreDelArchivo</kbd>
        </p>
        <img class="img-fluid mx-auto d-block" src="../assets/linux-1.png" alt="Instalador de XAMPP">
        <p class="my-5">
            Ahora ya podemos ejecutar el script, eso si, como super usuario. El comando es el siguiente <kbd>sudo ./nombreDelArchivo</kbd>
            y nos aparecerá una ventana identica a la de la instalación en Windows:</p>
        <img class="img-fluid mx-auto d-block" src="../assets/linux-2.png" alt="Instalador de XAMPP">
        <p class="my-5">
            Tras hacer click en siguiente, aparece una nueva ventana que nos da a escoger entre instalar solo los paquetes basicos del stack, o seleccionar
            también los de desarrollo. En este caso voy a dejar seleccionados ambos.
        </p>
        <img class="img-fluid mx-auto d-block" src="../assets/linux-3.png" alt="Instalador de XAMPP">
        <p class="my-5">Se nos informa que XAMPP será instalado en la ruta <span class="fw-bold">/opt/lampp</span> y empezará la instalación</p>
        <img class="img-fluid mx-auto d-block" src="../assets/linux-4.png" alt="Instalador de XAMPP">
        <p class="my-5">Y listo, una vez se completa la instalación podemos abrir el panel de control de XAMPP</p>
        <img class="img-fluid mx-auto d-block" src="../assets/linux-5.png" alt="Instalador de XAMPP">
    </div>
    <hr class="my-5">
    <div>
        <h3 class="mb-4">Ejecutando código PHP</h3>
        <p>
            Con XAMPP instalado, ya podemos ejecutar nuestros primeros códigos en PHP
        </p>
        <p>
            Lo primero que debemos saber, es que un navegador por si solo no es capaz de procesar archivos <span class="fw-bold">.php</span> así que debemos
            usar la carpeta <span class="fw-bold">htdocs</span> de XAMPP. Desde ahí todo código PHP será procesado por el módulo PHP de apache y entregado al
            navegador.
        </p>
        <h5 class="my-5">Hola mundo en PHP</h5>
        <img class="img-fluid mx-auto d-block" src="../assets/php-1.png" alt="Hola mundo PHP">
        <p class="my-5">
            Como vemos en la imagen anterior, tenemos una estructura HTML típica, sin embargo en el cuerpo tenemos código PHP.
            <span class="fw-bold">Todo código PHP debe ir entre etiquetas <kbd>&lt;?php</kbd> y <kbd>?></kbd></span> además, siempre que tengamos código php
            por pequeño que sea, la extensión del documento debe ser <span class="fw-bold">.php</span> o no será reconocido por el procesador PHP del servidor.
        </p>

        <h5 class="my-5">Usando PHP puro</h5>
        <p class="my-5">
            En el ejemplo anterior estabamos usando PHP dentro de una estructura HTML, esto es llamado código embebido, sin embargo también podemos usar PHP
            puro en un documento, es decir, que todo el archivo sea código PHP.
        </p>
        <img class="img-fluid mx-auto d-block" src="../assets/php-2.png" alt="Hola mundo PHP">
        <p class="my-5">
            Como dato curioso, no es necesario cerrar un documento PHP puro con la etiqueta de cierre de PHP <kbd>?></kbd>
        </p>
    </div>
</div>
<?php
require '../templates/footer.php';
?>